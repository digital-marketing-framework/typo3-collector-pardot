<?php

namespace DigitalMarketingFramework\Typo3\Collector\Pardot\Registry\EventListener;

use DigitalMarketingFramework\Collector\Pardot\CorePluginInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\Event\CoreRegistryPluginUpdateEvent;

class CoreRegistryPluginUpdateEventListener
{
    public function __invoke(CoreRegistryPluginUpdateEvent $event): void
    {
        CorePluginInitialization::initialize($event->getRegistry());
    }
}
