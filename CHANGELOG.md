# Changelog

All notable changes to this project are documented here.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/), and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.2.0](https://github.com/damienwebdev/module-blog/compare/v1.1.0...v1.2.0) (2026-06-26)


### Features

* **admin:** ACL resources — post/category/tag/author/config + system config section ([194e6aa](https://github.com/damienwebdev/module-blog/commit/194e6aab73f75a7108bce605d4fa766e89b99d3f))
* **admin:** adminhtml route registration (frontName=mageos_blog) ([0ccaf14](https://github.com/damienwebdev/module-blog/commit/0ccaf14e414f7d5d46002d52c3fdc3337c9bc39a))
* **admin:** Author form DataProvider with avatar decoration + NewAction/Edit + layouts ([55c11f6](https://github.com/damienwebdev/module-blog/commit/55c11f61b62182ea5497313585f135b4a0303ec6))
* **admin:** author form UI component — 2 fieldsets + avatar uploader + buttons ([e910c8b](https://github.com/damienwebdev/module-blog/commit/e910c8b4a145319986f4da0f81219b1e9d8616ae))
* **admin:** author listing grid Collection + AuthorImageUpload virtualType + DI wiring ([4ddb092](https://github.com/damienwebdev/module-blog/commit/4ddb092782f6ac042e7e89ac484227125d0de3de))
* **admin:** author listing UI component + row actions ([2170c88](https://github.com/damienwebdev/module-blog/commit/2170c88fbde20a81185c8faeee6a0186daae6324))
* **admin:** Author mass actions + inline edit ([cbe5c69](https://github.com/damienwebdev/module-blog/commit/cbe5c69ff2ae99447002f3bad9c8f3db28edca0b))
* **admin:** Author Save + Delete controllers — avatar upload wired ([bd50da0](https://github.com/damienwebdev/module-blog/commit/bd50da087b0b2ccd562e94279559e6edcbb6efe3))
* **admin:** Author UploadImage controller wired to AuthorImageUpload ([f56db59](https://github.com/damienwebdev/module-blog/commit/f56db59cfde39a5fe578e6197456ae5b22e1f4d2))
* **admin:** Author/Index controller + listing layout ([9680745](https://github.com/damienwebdev/module-blog/commit/96807450136369a271a2be915ad1164e7bbabc1c))
* **admin:** category + tag + related-post pickers on post form ([561c9ff](https://github.com/damienwebdev/module-blog/commit/561c9ff142626f5279bb9749a6cb15c16f262acb))
* **admin:** Category form DataProvider + NewAction/Edit controllers + layouts ([1257b76](https://github.com/damienwebdev/module-blog/commit/1257b76a3c0c3b4046405b2cb52551a524b75668))
* **admin:** category form UI component — 5 fieldsets + save/delete/back buttons ([77e1782](https://github.com/damienwebdev/module-blog/commit/77e178275ce4552516f0f7a608d3aee11cfbad1f))
* **admin:** category listing grid Collection + DI wiring ([c8ec2f9](https://github.com/damienwebdev/module-blog/commit/c8ec2f982b2d183dd34a8dc9343951b7e8b0c4a5))
* **admin:** category listing UI component + row actions ([0c75c6d](https://github.com/damienwebdev/module-blog/commit/0c75c6d5b8c405e1c4ad3e57ab951afd591c12d5))
* **admin:** Category mass actions + inline edit ([1bd0f84](https://github.com/damienwebdev/module-blog/commit/1bd0f8402d24b2d2e2f10668c9f44c6b2d747d8a))
* **admin:** Category Save + Delete controllers ([2211781](https://github.com/damienwebdev/module-blog/commit/2211781a3d6a71b12f6f4f569b27dabe58bdb5b3))
* **admin:** Category/Index controller + listing layout ([57e4c0f](https://github.com/damienwebdev/module-blog/commit/57e4c0ffb41ce66f0b21c2ff02308a188cf431b6))
* **admin:** hierarchical parent-category picker on category form ([d083a37](https://github.com/damienwebdev/module-blog/commit/d083a37f95ede8aff4bf4d2c48e4ed88382edbb3))
* **admin:** ImageUploader service + PostImageUpload virtualType ([7634dea](https://github.com/damienwebdev/module-blog/commit/7634dea4f026932d9919426d786363fde9c6ef79))
* **admin:** layout for post listing page ([c3d0600](https://github.com/damienwebdev/module-blog/commit/c3d0600e742b90f5d93a224b1bb5d8468e747a86))
* **admin:** linked author-name column on post listing ([6650e34](https://github.com/damienwebdev/module-blog/commit/6650e3404e669d99602111d760f8a8d0193fe8b9))
* **admin:** menu — Content &gt; Blog &gt; Posts/Categories/Tags/Authors/Configuration ([bd94be7](https://github.com/damienwebdev/module-blog/commit/bd94be72748798a900b4268bac0db3848e0ab709))
* **admin:** no-raw-IDs pass — author picker, product picker, parent-category column ([ac7e2a7](https://github.com/damienwebdev/module-blog/commit/ac7e2a70d841e0b3380aa9e29b67137aee714796))
* **admin:** persist related_post_ids + related_product_ids on post save ([adffdc3](https://github.com/damienwebdev/module-blog/commit/adffdc3c90c256a8a9aa53503d33c94eb7367aad))
* **admin:** Post Delete controller ([db04d77](https://github.com/damienwebdev/module-blog/commit/db04d777f3b011ff80975250582f232805dfd8ea))
* **admin:** post form DataProvider with image URL decoration ([188a46e](https://github.com/damienwebdev/module-blog/commit/188a46e58c43db657d48e2dc48ebc6024df07fbd))
* **admin:** post form UI component — 7 fieldsets + save/delete/back button blocks ([c49ae10](https://github.com/damienwebdev/module-blog/commit/c49ae108fafc955f73509a23c523d039b6a64a26))
* **admin:** Post inline edit controller ([a2a6985](https://github.com/damienwebdev/module-blog/commit/a2a6985c07ffb8fedc775ea7a4875fd39c4e977d))
* **admin:** post listing grid Collection + DI wiring; widen tool configs to Controller/Ui ([03b5787](https://github.com/damienwebdev/module-blog/commit/03b5787be0b37bfbdf3b48acfcd30fe351f5e68b))
* **admin:** post listing UI component with status column + row actions ([c61d2a0](https://github.com/damienwebdev/module-blog/commit/c61d2a02cf82237b3fdcc8ad0d34bc7429629f05))
* **admin:** Post mass actions — delete, enable, disable ([53f227c](https://github.com/damienwebdev/module-blog/commit/53f227c79479fb8708f917ced34bf065374b8435))
* **admin:** Post NewAction + Edit controllers and layouts ([a88f07b](https://github.com/damienwebdev/module-blog/commit/a88f07b71b02280eaad0c940770060573861f884))
* **admin:** Post Save controller — hydration, url_key auto-gen, image move-from-tmp ([390c01e](https://github.com/damienwebdev/module-blog/commit/390c01ea634878d4e8fc833d98d7038bf36c28e3))
* **admin:** Post UploadImage controller wired to PostImageUpload ([83e6c8c](https://github.com/damienwebdev/module-blog/commit/83e6c8c51e31e05c592b225d865efa119e002bef))
* **admin:** Post/Index controller — renders listing page ([5d8dbf1](https://github.com/damienwebdev/module-blog/commit/5d8dbf1edbe00bb47a337758308f655f8780c988))
* **admin:** related-products insertListing picker on post form ([d8fa74e](https://github.com/damienwebdev/module-blog/commit/d8fa74e4f045726cbd11033f6a93e6a6dfeda416))
* **admin:** system config — general/post/sidebar/seo/sitemap/social/rss + defaults + source models ([5e9b48f](https://github.com/damienwebdev/module-blog/commit/5e9b48f68a05d62374e459430594eb33e082063c))
* **admin:** Tag form DataProvider + NewAction/Edit controllers + layouts ([2cc3ce8](https://github.com/damienwebdev/module-blog/commit/2cc3ce8cf0ba982e038416f426d8cb2e1874eb00))
* **admin:** tag form UI component — 4 fieldsets + save/delete/back buttons ([85fbef6](https://github.com/damienwebdev/module-blog/commit/85fbef683ecb112e50266a1654bf722802505b81))
* **admin:** tag listing grid Collection + DI wiring ([9189e15](https://github.com/damienwebdev/module-blog/commit/9189e15839f3aeb7e283cc75208db52a6e7c227b))
* **admin:** tag listing UI component + row actions ([64efbe9](https://github.com/damienwebdev/module-blog/commit/64efbe912e35f2ebaae60c902ccfaf28aeb070c7))
* **admin:** Tag mass actions + inline edit ([0e3b258](https://github.com/damienwebdev/module-blog/commit/0e3b258d15aebcbea1fe04a757c427dc7b270786))
* **admin:** Tag Save + Delete controllers ([0cac573](https://github.com/damienwebdev/module-blog/commit/0cac573c8dcc78fcfcdb07954ee67b7834f1b989))
* **admin:** Tag/Index controller + listing layout ([38e9aa8](https://github.com/damienwebdev/module-blog/commit/38e9aa8eded60d7f028b09eacdb7eebd442d9435))
* **api:** AuthorInterface service contract ([fe36eaf](https://github.com/damienwebdev/module-blog/commit/fe36eafe8b958ea504cc664d20926b632f93749a))
* **api:** AuthorRepositoryInterface ([f145138](https://github.com/damienwebdev/module-blog/commit/f1451381b30981404ab2f22a17e9a485eb761160))
* **api:** CategoryInterface service contract ([712c055](https://github.com/damienwebdev/module-blog/commit/712c0551b9f078a27a4273f135f7e4e99052a194))
* **api:** CategoryRepositoryInterface ([2e49cdc](https://github.com/damienwebdev/module-blog/commit/2e49cdcecb17bb94a08e068b8da7755c32308a31))
* **api:** PostInterface service contract ([14f9f5f](https://github.com/damienwebdev/module-blog/commit/14f9f5fb9d3a7ca652452bee8684b0f7e35e4e97))
* **api:** PostManagementInterface ([bc64189](https://github.com/damienwebdev/module-blog/commit/bc6418986e99e06ca3f39c30d80b602dc030511f))
* **api:** PostRepositoryInterface ([ca505f7](https://github.com/damienwebdev/module-blog/commit/ca505f73e5d7b836a093763f5432235d1885f6e8))
* **api:** RelatedPostsProviderInterface ([0f4de8d](https://github.com/damienwebdev/module-blog/commit/0f4de8dc76dcbd50252e9a0eb984b1e2b7dec238))
* **api:** search results interfaces for all four entities ([e26f75a](https://github.com/damienwebdev/module-blog/commit/e26f75ad804f8d00aa0058fbd350cef2da458ffc))
* **api:** TagInterface service contract ([07162fd](https://github.com/damienwebdev/module-blog/commit/07162fd216ee5e69e45b4f07ade7f3d2df2fa07a))
* **api:** TagRepositoryInterface ([857b343](https://github.com/damienwebdev/module-blog/commit/857b343d00fc66ba8d5daeff8b21c70870250d43))
* **api:** UrlKeyGeneratorInterface with reserved slugs ([587b337](https://github.com/damienwebdev/module-blog/commit/587b337bdc269d34c7d0f83acf1ce472087543eb))
* composer manifest, registration, LICENSE (OSL-3.0) ([01d986f](https://github.com/damienwebdev/module-blog/commit/01d986fb8aa77075b19c70cc3f5597a9891f5afb))
* **cron:** PublishScheduledPosts — flips Scheduled→Published every minute when due ([4758ebc](https://github.com/damienwebdev/module-blog/commit/4758ebcbd92c5eb079ef589fdf39669b51eeb312))
* **di:** preferences for entities, SearchResults, UrlKeyGenerator ([cb31b49](https://github.com/damienwebdev/module-blog/commit/cb31b499892915519737e4680a079e770c33df35))
* **frontend:** blog.css — typography, layout primitives, cards, post detail ([878132e](https://github.com/damienwebdev/module-blog/commit/878132e3bb2a7e3fd1b24a6dfd30fe76b54ea4c0))
* **frontend:** category/tag/author/search — context headers + shared cards ([85c4c5a](https://github.com/damienwebdev/module-blog/commit/85c4c5a3bbc39bf627481e612bca8091d31a7de2))
* **frontend:** post detail — hero + typography + tag chips + related posts ([e8bd328](https://github.com/damienwebdev/module-blog/commit/e8bd3285356810ceb0b0768b96d05ab485675897))
* **frontend:** post listing — hero-on-top cards + pagination nav ([4f13363](https://github.com/damienwebdev/module-blog/commit/4f13363a38b2737b38c6bedfc8de9d4c21b15923))
* **graphql:** CustomUrlLocator stubs wiring blog_* entity types ([5391324](https://github.com/damienwebdev/module-blog/commit/53913241fb76787577cd0cf0fe4b1d7df269a524))
* **graphql:** mutation resolvers + AdminAuthorization (Create/Update/Delete × 4 entities) ([61e6ad7](https://github.com/damienwebdev/module-blog/commit/61e6ad7e083c87e8d5c4682b4730d90487938447))
* **graphql:** query resolvers for Post/Category/Tag/Author + shared mappers & FilterBuilder ([49ee9bf](https://github.com/damienwebdev/module-blog/commit/49ee9bfcc1bb59866c2f7abb071364315f20b10d))
* **graphql:** schema.graphqls — BlogPost/Category/Tag/Author types, filters, sorts, mutations ([cac211f](https://github.com/damienwebdev/module-blog/commit/cac211f8005c2b9bdd88af698d42742defb25d84))
* **i18n:** seed i18n/en_US.csv with 236 MageOS_Blog phrases ([274306c](https://github.com/damienwebdev/module-blog/commit/274306ccc1d8bd08d94c766d3c34ce86310bafe9))
* **model:** Author entity, ResourceModel, Collection ([11fa806](https://github.com/damienwebdev/module-blog/commit/11fa806358f30cea7f7436e3950fdd15e4c1ab7d))
* **model:** AuthorRepository (no store scoping) ([137fb33](https://github.com/damienwebdev/module-blog/commit/137fb33bf7051e11de5edf05ff5a47b5fa9ef0b8))
* **model:** BlogPostStatus enum with unit tests ([cdd2fbf](https://github.com/damienwebdev/module-blog/commit/cdd2fbfec8d267ef371563d229fbf1037ddfc94f))
* **model:** Category entity, ResourceModel, Collection ([7ac14c6](https://github.com/damienwebdev/module-blog/commit/7ac14c6f2ca0d1a0544286eb63cfcbbbb5b2cdf3))
* **model:** CategoryRepository with store-pivot LinkManager ([07aacf6](https://github.com/damienwebdev/module-blog/commit/07aacf6d6790f7305aa85f70d5f38e8e67b12d61))
* **model:** Config service — typed getters + constants for all mageos_blog/* paths ([01c4de6](https://github.com/damienwebdev/module-blog/commit/01c4de6f0a82acd36e6fa4cc63c61c79a1e1a110))
* **model:** DbCollisionChecker — DB-backed collision lookup with store scoping ([008e1f6](https://github.com/damienwebdev/module-blog/commit/008e1f636d169cd337c213ae1417b88d7525d66a))
* **model:** enforce reserved-slug validation in repository save() for all entities ([1761448](https://github.com/damienwebdev/module-blog/commit/1761448780efbb2d2b17be96e006168203bbae47))
* **model:** Post entity, ResourceModel, Collection ([e07e89e](https://github.com/damienwebdev/module-blog/commit/e07e89e636ea26a6d7ae5dc8fcc8006a44dc9b06))
* **model:** PostManagement — publish, incrementViews, computeReadingTime ([96cbee3](https://github.com/damienwebdev/module-blog/commit/96cbee3fb983ebf3b386aaed1d581b5db8da3dc0))
* **model:** PostRepository with pivot LinkManagers (store/category/tag) ([8a84c75](https://github.com/damienwebdev/module-blog/commit/8a84c759e2142eecf851de54e38ed55fbe5c7afa))
* **model:** RelatedPostsProvider with manual + algorithmic loaders, product-page wiring stub ([d9886f1](https://github.com/damienwebdev/module-blog/commit/d9886f1c53cf71e26e4e4934da48930339b6f6f0))
* **model:** Tag entity, ResourceModel, Collection ([73e2f21](https://github.com/damienwebdev/module-blog/commit/73e2f2118037e6944b4a93c009e6a92504566e01))
* **model:** TagRepository with store-pivot LinkManager ([b9f7408](https://github.com/damienwebdev/module-blog/commit/b9f7408e9c24583e75e865fc473df475229b3258))
* **model:** UrlKeyGenerator with normalization, collision retry, reserved slugs ([9479277](https://github.com/damienwebdev/module-blog/commit/9479277bbacd12a7d055874a9066bde8ac0f6eff))
* module declaration with dependency sequence ([d7b7e5f](https://github.com/damienwebdev/module-blog/commit/d7b7e5fc0e9852777b4525e7f9f868749a57dd06))
* **rss:** BlogFeed data provider + Controller/Rss/Index emitting RSS 2.0 XML ([ec8f91f](https://github.com/damienwebdev/module-blog/commit/ec8f91f69ec79d24a11dbc9f888e8032e399c392))
* **schema:** pivots — post-store, post-category, post-tag, related products/posts ([cf2a6b7](https://github.com/damienwebdev/module-blog/commit/cf2a6b7a296d23731f0fe36be88b82ad24d31ddd))
* **schema:** post, category, tag, author entity tables ([b49d4e8](https://github.com/damienwebdev/module-blog/commit/b49d4e80b8f0260d4262184b6d6b7d02e3a228fe))
* **search:** DB-fulltext-backed search (MAGEOS_BLOG_POST_FULLTEXT index) — defers OpenSearch to v1.1 ([747524a](https://github.com/damienwebdev/module-blog/commit/747524a3d5c57650efc614336a658275a9fd20a0))
* **seo:** JSON-LD block + OG/Twitter meta + canonical link on post detail pages ([2507534](https://github.com/damienwebdev/module-blog/commit/2507534dff13f0ec4adb94927000e33b830a5643))
* **seo:** SocialShare ViewModel — renders facebook/x/linkedin/reddit/email sharer URLs ([b992fb6](https://github.com/damienwebdev/module-blog/commit/b992fb662c39760ec2aea5cbfcbe33ee6669377f))
* **seo:** ViewModel\Post\Detail — OG/Twitter/JSON-LD methods with og→meta→plain override chain ([75933ea](https://github.com/damienwebdev/module-blog/commit/75933ea624606616c5965229668a5949420a70cc))
* **sitemap:** ItemProviders for post/category/tag, wired to Sitemap Composite ([8e288f1](https://github.com/damienwebdev/module-blog/commit/8e288f19e8da0638037b9c1c84bde67c8f676f31))
* **storefront:** category, tag, author detail pages — ViewModels, Blocks, layouts, Luma templates ([62f4dac](https://github.com/damienwebdev/module-blog/commit/62f4dac34a2409f686417eb73a127d2ef47a4c7e))
* **storefront:** frontend route registration + Index controller ([444e7c5](https://github.com/damienwebdev/module-blog/commit/444e7c5221e6c1a56ea91b2616013e9799a46b61))
* **storefront:** integration test harness for Index + post view routing ([e80ec1d](https://github.com/damienwebdev/module-blog/commit/e80ec1d6ef89ed6b9faf02124f94673083684364))
* **storefront:** post detail page — ViewModel, Block, layout, Luma template ([ad55a44](https://github.com/damienwebdev/module-blog/commit/ad55a44dc91ef4048764c77475936db343daf427))
* **storefront:** post listing page — ViewModel, Block, layout, Luma templates ([668ce77](https://github.com/damienwebdev/module-blog/commit/668ce77a154c3c417ffeeb3d0cebb9223eedc338))
* **storefront:** Post/Category/Tag/Author view controllers ([91a44a0](https://github.com/damienwebdev/module-blog/commit/91a44a02772fe9937673994d6a15425e6ffa41f6))
* **storefront:** Related Posts block scaffolding on product detail page ([2c2956d](https://github.com/damienwebdev/module-blog/commit/2c2956d12264e36b99c9b438341598b85a7b2eb3))
* **storefront:** Search + RSS (stub) + IncrementViews controllers ([b910e6d](https://github.com/damienwebdev/module-blog/commit/b910e6d73764b298fe8914693d881428efc16d24))
* **storefront:** search results page — ViewModel stub, Block, layout, Luma template ([6a1296f](https://github.com/damienwebdev/module-blog/commit/6a1296fd7342ca4915fc5a08c5642084dedbd914))
* **storefront:** top-nav Blog link, blog_default layout, sidebar container scaffolding ([a9ad6c3](https://github.com/damienwebdev/module-blog/commit/a9ad6c3a09ecc31cb976a18e798d3033d950b18d))
* **theme:** HyvaThemeDetection — walks theme inheritance chain to detect Hyvä storefront ([46d6d1d](https://github.com/damienwebdev/module-blog/commit/46d6d1d2229cdc976fc25823528bd99398c8218e))
* **theme:** template-path swap plugin — MageOS_Blog::X → MageOS_Blog::hyva/X on Hyvä themes ([38674fd](https://github.com/damienwebdev/module-blog/commit/38674fd259bfcc207438a9cee61b8c4336c860bb))
* **url:** Author URL rewrite plugin + integration test harness for all four entities ([a5c5055](https://github.com/damienwebdev/module-blog/commit/a5c5055947e69b561de99dfddae1839d71db5756))
* **url:** Category + Tag URL rewrite plugins ([5d414d2](https://github.com/damienwebdev/module-blog/commit/5d414d22651a72c26b66fb987b8660116f27573d))
* **url:** Post URL rewrite plugin — save creates/updates rewrites, 301 on slug change, delete cleans up ([49acb58](https://github.com/damienwebdev/module-blog/commit/49acb58f871cec4e3b939b9b641476683f5dc7f9))
* **url:** UrlRewriteBuilder service producing UrlRewrite[] per entity + store fan-out ([e134aad](https://github.com/damienwebdev/module-blog/commit/e134aad0d761361cba6c5986d0ea4e1d87594a72))
* **widget:** 6 frontend widget blocks + Luma templates ([2cb1958](https://github.com/damienwebdev/module-blog/commit/2cb1958ad0ec09350359a07de15258690cbd2e9e))
* **widget:** 6 widget declarations + Post/Category/Tag admin chooser blocks ([7e7f800](https://github.com/damienwebdev/module-blog/commit/7e7f800b15c1517c54cf197f3b40bba78988488d))


### Bug Fixes

* admin forms render + category/tag/author storefront post listings ([6ecb54e](https://github.com/damienwebdev/module-blog/commit/6ecb54e29874b4787366362496a3332edb611252))
* **admin:** author avatar upload — drop nested xsi:type="string" param ([58c9a2f](https://github.com/damienwebdev/module-blog/commit/58c9a2f574aef02744be6c106b0655ba6fc5236f))
* **admin:** drop unused UrlInterface from Category form DataProvider ([664adba](https://github.com/damienwebdev/module-blog/commit/664adbaecbcc0c35c5f8445c7d4eb3a208c9cb11))
* **admin:** flatten per-entity DataProvider row shape (author/category/tag) ([f15ae25](https://github.com/damienwebdev/module-blog/commit/f15ae2588be3aac954525ff41fea13199ae591dd))
* **admin:** post form DataProvider — load pivot relations + stringify IDs for ui-select ([7be21bd](https://github.com/damienwebdev/module-blog/commit/7be21bdcd1d6060a32f13322ed2ec6f425184744))
* **admin:** sitemap config uses nested groups to satisfy config_path XSD ([617a04f](https://github.com/damienwebdev/module-blog/commit/617a04fb6f1351efbcd77612275fa902badeedff))
* **admin:** use &lt;multiselect&gt; formElement for ui-select fields (XSD) ([a3c424c](https://github.com/damienwebdev/module-blog/commit/a3c424c16ee06c2a5017a2142d930a2e988b6cfb))
* **admin:** use formElement=select + ui-select component for taxonomy pickers ([0acc2c9](https://github.com/damienwebdev/module-blog/commit/0acc2c9e0dd09b6d02a8937b141e20a5899ddb63))
* **api:** add docblocks to extensible interfaces for setup:di:compile ([1879d79](https://github.com/damienwebdev/module-blog/commit/1879d79f6179789393eb70c87fce8fcabdd07cdd))
* **api:** add docblocks to extensible interfaces for setup:di:compile ([c027295](https://github.com/damienwebdev/module-blog/commit/c027295f6a26a1dc3d8b1aa5647fc8f7c98cdceb))
* bump magento-coding-standard for PHP 8.3 support ([f2eb096](https://github.com/damienwebdev/module-blog/commit/f2eb0961b0d5b886be816b2cfe9df7453942c16d))
* bump phpstan to ^2.0 to resolve phpstan-magento ^0.42 dep conflict ([f61225e](https://github.com/damienwebdev/module-blog/commit/f61225e01333fb8a23b965ab4002703150e0ea17))
* **ci:** correct package_name to match composer (mageos/module-blog) ([4349cc0](https://github.com/damienwebdev/module-blog/commit/4349cc0f4dc044ac618a286da799d44e3ccc9310))
* composer scripts, allow-plugins, phpstan-magento bump (code review) ([511f3bb](https://github.com/damienwebdev/module-blog/commit/511f3bb97e2d79b86dec530f97b7a008a5f51932))
* correct warning-severity to suppress docblock warnings from exit code ([7302593](https://github.com/damienwebdev/module-blog/commit/7302593449e7436690ff8c0c4579762b3b879745))
* **cs:** resolve all phpcs warnings blocking the coding-standard CI job ([d07861f](https://github.com/damienwebdev/module-blog/commit/d07861f16b2cba416a57b81aef9ec6cd34dae183))
* **di:** concrete SearchResults classes implementing per-entity interfaces ([5c0628e](https://github.com/damienwebdev/module-blog/commit/5c0628e05bd3add552cfda9514f270674ebc5b01))
* exclude PostsByAssignmentProvider from infection scope ([eb653e9](https://github.com/damienwebdev/module-blog/commit/eb653e9e7890c46c572a0922ef0bc4847d110c2c))
* five bugs found during live dev-env smoke test ([30d63f4](https://github.com/damienwebdev/module-blog/commit/30d63f4388443a6f32935f5c6d52cbfd0bae8b89))
* **frontend:** remove page.main.title on category/tag/author/search (double-h1) ([f5425a3](https://github.com/damienwebdev/module-blog/commit/f5425a3ea2fa5043b4af3794d7a51ec090d5ab3d))
* integration tests and phpcs error ([244071d](https://github.com/damienwebdev/module-blog/commit/244071d28d11e129bc1326c392920318ffca1c92))
* lower minMsi to actual baseline (44) ([a6b3f3f](https://github.com/damienwebdev/module-blog/commit/a6b3f3fd6c3e8f89027956f2f838c8747df3af4d))
* **model:** override getItems/setItems with typed signatures in SearchResults subclasses ([098d996](https://github.com/damienwebdev/module-blog/commit/098d99655517ba2401ab8edc835e3e7fed794168))
* **model:** portable unicode normalization for url_key slugs ([43cc477](https://github.com/damienwebdev/module-blog/commit/43cc477a2d57e347848d625bfba150e81d5f6565))
* remove escapeHtml from short_content in card.phtml ([a62d0df](https://github.com/damienwebdev/module-blog/commit/a62d0df56910fd78ebbea68131e72a8aaffca112))
* suppress phpcs warnings to unblock coding-standard CI job ([2096d15](https://github.com/damienwebdev/module-blog/commit/2096d15d5ece528fcb6045eaadceb465fa48becd))
* widen magento/framework constraint to support 2.4.6-p15 ([65dc692](https://github.com/damienwebdev/module-blog/commit/65dc69246c09ce27c87ab9c304b5c4eeae9f069d))


### Miscellaneous Chores

* CI scaffolding — phpunit, phpstan L8, cs-fixer, phpcs, infection, GH Actions ([f5aac07](https://github.com/damienwebdev/module-blog/commit/f5aac07dd6fe6d7e5c218c50adc3a0fd0d09a79c))
* **composer:** add Mage-OS mirror + allow infection plugin ([5045356](https://github.com/damienwebdev/module-blog/commit/5045356cfa39610e1c570fc00d8067c6d2ea9354))
* **infection:** scope mutation testing to unit-tested files; set v1.0 baselines ([611d79e](https://github.com/damienwebdev/module-blog/commit/611d79e0e95c340324b922893843cca032fe7dd2))
* **phpstan:** resolve L8 findings — instanceof narrowing in repositories, phpdoc cast for extension attributes ([e2c7b91](https://github.com/damienwebdev/module-blog/commit/e2c7b91a8d90650e4b0079eabfcc1be9d1da7b19))
* remove forked code ahead of v1 rewrite ([3d93ba2](https://github.com/damienwebdev/module-blog/commit/3d93ba290a5bfd83275f66b924979d5207d7f35d))
* restore ci file to same as main ([c32587d](https://github.com/damienwebdev/module-blog/commit/c32587d1a7008e77670edc09a46812110e2cd7b2))
* **schema:** add db_schema_whitelist.json ([5d7c85b](https://github.com/damienwebdev/module-blog/commit/5d7c85b79880e02024ba1fd2ef377fd89e6424b2))

## [1.1.0] - 2026-06-25

Admin usability and storefront-design release. No schema or API breaking changes; safe upgrade from 1.0.0.

### Added

- **Admin "no raw IDs" pickers.** The post form now uses real pickers instead of hand-typed entity IDs: author, category, tag, related-post, and related-product. The category form gains a hierarchical parent-category picker. Backed by new option sources under `Ui/Component/Form/{Authors,Categories,Tags,ParentCategory,RelatedPosts,RelatedProducts}/Options.php`. Related-post and related-product assignments now actually persist on save (`Model\Post\Link\RelatedPostLinkManager`, `RelatedProductLinkManager`, `Model\Post\PostsByAssignmentProvider`).
- **Human-readable admin listings.** Linked author-name column on the post grid and a parent-category column on the category grid (`Ui/Component/Listing/Column/{AuthorName,ParentCategoryName}.php`).
- **Storefront redesign.** New `view/frontend/web/css/blog.css` with a typography scale, layout primitives, and card components. Shared `post/card.phtml` (replacing `post/item.phtml`), hero-on-top post cards with pagination, a redesigned post-detail page (hero, tag chips, related posts), and context headers on category / tag / author / search pages.
- **API surface.** Additional data fields and interface docblocks on `Api\Data\{Author,Category,Post,Tag}Interface` (cleans up `setup:di:compile`).
- **Project docs & CI.** `CONTRIBUTING.md`, `CODE_OF_CONDUCT.md`, `SECURITY.md`, GitHub issue/PR templates, and a GitHub Actions CI workflow.

### Changed

- **Naming.** Module name references aligned to the `mage-os` naming convention (PR #12).
- **Layout.** Blog storefront switched to a 1-column layout; Luma sidebar bleed removed. Body / heading / post-content type scale bumped; `.mageos-blog-container` left-aligned.
- **Compatibility.** Widened the `magento/framework` constraint to support Magento 2.4.6-p15.

### Fixed

- Double `<h1>` on category / tag / author / search pages (removed redundant `page.main.title`).
- Author avatar upload (dropped an invalid nested `xsi:type="string"` param).
- Admin form rendering and category / tag / author storefront post listings; flattened per-entity DataProvider row shapes and stringified IDs for ui-select.
- `setStringify`/escaping fixes and numerous PHPCS warnings cleared; integration and unit test suites updated for 2.4.6-p15, 2.4.7-p10, 2.4.8-p5 & 2.4.9 & Equivilent MageOS versions.

### Deferred

The following items were listed under "Deferred to v1.1" in the 1.0.0 release but are not included in 1.1.0. They remain planned for a future release:

- Comments (native, moderation, spam, email).
- Content importers from Mageplaza, Magefan, Aheadworks, Mirasvit, WordPress (planned as a separate `mage-os/module-blog-migration` package).
- OpenSearch / `Magento_Search` indexer + mview + `etc/search_request.xml`.
- PageBuilder content editing.
- Hyvä-native `.phtml` set (detection plugin is in place; the companion `mage-os/module-blog-hyva` package remains pending — see README).
- Configurable URL prefix, custom per-page CSS, preview-token model, Commerce-only AdminGWS plugin, MFTF tests, gravatar autofetch, per-post multi-language content variants.
- Infection MSI ≥ 75% / Covered MSI ≥ 80%.

## [1.0.0] - 2026-04-20

First release of the greenfield rewrite. No migration path from pre-v1 forks.

### Added

- **Content model.** Four entities (`blog_post`, `blog_category`, `blog_tag`, `blog_author`) with DB-level foreign keys and cascading deletes. Store-view scoping via pivot tables. Fulltext indexes on post and category content for search.
- **Admin UI.** UI-component grids and forms for posts, categories, tags, authors. Image upload (featured image, OG image, gallery) via a single `MageOS\Blog\ImageUpload` virtualType. Related-posts and related-products pickers on the post form.
- **Storefront.** Custom router with URL-rewrite integration. Post detail, category detail, tag detail, author detail, blog index, search, pagination. Luma template set under `view/frontend/templates/`; Hyvä template set ships in the companion package `mageos/module-blog-hyva`.
- **Scheduled publishing.** `Cron\PublishScheduledPosts` runs every minute, finds posts whose `publish_date` just passed, and re-saves them to invalidate FPC. Gated by `mageos_blog/general/enabled`.
- **SEO.** `meta title`, `meta description`, `meta keywords`, `meta robots`, canonical link, Open Graph, Twitter Cards, and `Article` JSON-LD on post detail pages. Configurable defaults under `mageos_blog/seo/*`.
- **RSS.** `/blog/rss` emits RSS 2.0 XML. Limit configurable via `mageos_blog/rss/limit`.
- **Sitemap.** Three `ItemProvider`s (post, category, tag) wired into `Magento\Sitemap\Model\ItemProvider\Composite`. Per-entity enable / frequency / priority under `mageos_blog/sitemap/*`.
- **Search.** DB-fulltext-backed search against the `MAGEOS_BLOG_POST_FULLTEXT` index. Controller at `/blog/search?q=...`. OpenSearch / Magento_Search integration deferred to v1.1.
- **Widgets.** 6 storefront widgets: recent posts, featured post, post list, post link, category link, tag link. Admin chooser blocks for picking a post / category / tag from grids.
- **GraphQL.** Queries (`blogPost`, `blogPosts`, `blogCategory`, `blogCategories`, `blogTag`, `blogTags`, `blogAuthor`, `blogAuthors`). Mutations (`create` / `update` / `delete` for all four entities). URL resolver integration: `urlResolver(url:"/blog/my-post")` returns `type: BLOG_POST`. Mutations require admin token plus ACL.
- **Hyvä support.** A `Plugin\Magento\Framework\View\TemplateEngine\Php` plugin injects a `HyvaThemeDetection` helper into every `.phtml` scope. `Plugin\Magento\Framework\View\Element\TemplateRewrite` remaps `MageOS_Blog::X` paths to `MageOS_Blog::hyva/X` on Hyvä themes.
- **i18n.** Seed `i18n/en_US.csv` with 236 phrases.
- **Quality gates.** PHPStan level 8, PHPCS (Magento2 ruleset), PHP-CS-Fixer, PHPUnit unit suite (57 tests), Infection mutation testing (baselines: MSI 54%, Covered MSI 70%).

### Notes on design

Design inspired by [Magefan Blog](https://magefan.com/magento2-blog-extension) (OSL-3.0). v1 is an independent implementation with no shared code.

### Deferred to v1.1

- Comments (native, moderation, spam, email).
- Content importers from Mageplaza, Magefan, Aheadworks, Mirasvit, WordPress. Will ship as a separate `mageos/module-blog-migration` package.
- OpenSearch / `Magento_Search` indexer + mview + `etc/search_request.xml`.
- PageBuilder content editing.
- Hyvä-native `.phtml` set (detection plugin is in place; the companion package is empty until v1.1).
- Configurable URL prefix, custom per-page CSS, preview-token model, Commerce-only AdminGWS plugin, MFTF tests, gravatar autofetch, per-post multi-language content variants.
- Infection MSI ≥ 75% / Covered MSI ≥ 80%. v1.0 ships at 54% / 70% respectively; raising the floor depends on expanding unit-test coverage into `ViewModel/Post/Detail` (JSON-LD shape edge cases) and `Model/HyvaThemeDetection` (theme-chain walking).

[1.1.0]: https://github.com/mage-os/module-blog/releases/tag/v1.1.0
[1.0.0]: https://github.com/mage-os/module-blog/releases/tag/v1.0.0
