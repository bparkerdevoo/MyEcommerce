<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.block.service.rss' shared service.

return $this->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService('sonata.block.rss', ${($_ = isset($this->services['sonata.templating']) ? $this->services['sonata.templating'] : $this->load(__DIR__.'/getSonata_TemplatingService.php')) && false ?: '_'});
