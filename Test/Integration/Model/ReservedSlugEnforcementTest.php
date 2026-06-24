<?php

declare(strict_types=1);

namespace MageOS\Blog\Test\Integration\Model;

use Magento\Framework\Exception\LocalizedException;
use Magento\TestFramework\Helper\Bootstrap;
use MageOS\Blog\Api\Data\PostInterfaceFactory;
use MageOS\Blog\Api\PostRepositoryInterface;
use PHPUnit\Framework\TestCase;

/**
 * @magentoAppArea adminhtml
 * @magentoDbIsolation enabled
 */
final class ReservedSlugEnforcementTest extends TestCase
{
    public function test_save_rejects_reserved_url_key(): void
    {
        $post = $this->postFactory()->create();
        $post->setTitle('Category Conflict')
            ->setUrlKey('category')  // reserved
            ->setStoreIds([1]);

        $this->expectException(LocalizedException::class);
        $this->repository()->save($post);
    }

    public function test_save_accepts_non_reserved_url_key(): void
    {
        $post = $this->postFactory()->create();
        $post->setTitle('OK')
            ->setUrlKey('reserved-test-' . uniqid())
            ->setStoreIds([1]);

        $saved = $this->repository()->save($post);
        self::assertNotNull($saved->getPostId());
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
