<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.block.form.type.block' shared service.

return $this->services['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType(${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->getSonata_Block_ManagerService()) && false ?: '_'});