<?php

namespace DigitalMarketingFramework\Typo3\Collector\Pardot\Registry\EventListener;

use DigitalMarketingFramework\Collector\Pardot\CollectorPluginInitialization;
use DigitalMarketingFramework\Typo3\Collector\Core\Registry\Event\CollectorRegistryPluginUpdateEvent;

class CollectorRegistryPluginUpdateEventListener
{
    public function __invoke(CollectorRegistryPluginUpdateEvent $event): void
    {
        CollectorPluginInitialization::initialize($event->getRegistry());
    }
}
