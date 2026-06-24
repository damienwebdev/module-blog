<?php

declare(strict_types=1);

namespace MageOS\Blog\Test\Integration\Model;

use Magento\TestFramework\Helper\Bootstrap;
use MageOS\Blog\Api\Data\PostInterfaceFactory;
use MageOS\Blog\Api\PostManagementInterface;
use MageOS\Blog\Api\PostRepositoryInterface;
use MageOS\Blog\Model\BlogPostStatus;
use PHPUnit\Framework\TestCase;

/**
 * @magentoAppArea adminhtml
 * @magentoDbIsolation enabled
 */
final class PostManagementTest extends TestCase
{
    public function test_publish_flips_status_to_published(): void
    {
        $post = $this->postFactory()->create();
        $post->setTitle('Draft')
            ->setUrlKey('pm-draft-' . uniqid())
            ->setStatus(BlogPostStatus::Draft->value)
            ->setStoreIds([1]);
        $saved = $this->repository()->save($post);

        $this->management()->publish((int) $saved->getPostId());

        $reloaded = $this->repository()->getById((int) $saved->getPostId());
        self::assertSame(BlogPostStatus::Published->value, $reloaded->getStatus());
    }

    public function test_increment_views_updates_counter_atomically(): void
    {
        $post = $this->postFactory()->create();
        $post->setTitle('Counter')
            ->setUrlKey('pm-counter-' . uniqid())
            ->setStoreIds([1]);
        $saved = $this->repository()->save($post);
        $postId = (int) $saved->getPostId();

        $this->management()->incrementViews($postId);
        $this->management()->incrementViews($postId);
        $this->management()->incrementViews($postId);

        $reloaded = $this->repository()->getById($postId);
        self::assertSame(3, $reloaded->getViewsCount());
    }

    private function management(): PostManagementInterface
    {
        return Bootstrap::getObjectManager()->get(PostManagementInterface::class);
    }

    private function repository(): PostRepositoryInterface
    {
        return Bootstrap::getObjectManager()->get(PostRepositoryInterface::class);
    }

    private function postFactory(): PostInterfaceFactory
    {
        return Bootstrap::getObjectManager()->get(PostInterfaceFactory::class);
    }
}
