<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.templating.name_parser' shared service.

return $this->services['sonata.templating.name_parser'] = new \Sonata\BlockBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
