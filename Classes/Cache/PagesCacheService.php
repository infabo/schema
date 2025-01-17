<?php

declare(strict_types=1);

/*
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\Schema\Cache;

use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

/**
 * @internal
 */
class PagesCacheService
{
    private ?TypoScriptFrontendController $controller = null;

    public function __construct(
        private readonly FrontendInterface $cache,
    ) {
    }

    public function getMarkupFromCache(): ?string
    {
        $this->initialiseTypoScriptFrontendController();

        return $this->cache->get($this->getCacheIdentifier()) ?: null;
    }

    private function getCacheIdentifier(): string
    {
        return $this->controller->newHash . '-tx-schema';
    }

    public function storeMarkupInCache(string $markup): void
    {
        $this->initialiseTypoScriptFrontendController();
        if ($this->controller !== null) {
            $this->cache->set(
                $this->getCacheIdentifier(),
                $markup,
                ['pageId_' . $this->controller->page['uid']],
                $this->controller->get_cache_timeout(),
            );
        }
    }

    private function initialiseTypoScriptFrontendController(): void
    {
        if ($this->controller === null) {
            $this->controller = $GLOBALS['TSFE'];
        }
    }

    /**
     * For testing purposes only!
     */
    public function setTypoScriptFrontendController(TypoScriptFrontendController $controller): void
    {
        $this->controller = $controller;
    }
}
