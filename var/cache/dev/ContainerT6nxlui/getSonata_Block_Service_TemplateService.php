<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.block.service.template' shared service.

return $this->services['sonata.block.service.template'] = new \Sonata\BlockBundle\Block\Service\TemplateBlockService('sonata.block.template', ${($_ = isset($this->services['sonata.templating']) ? $this->services['sonata.templating'] : $this->load(__DIR__.'/getSonata_TemplatingService.php')) && false ?: '_'});
