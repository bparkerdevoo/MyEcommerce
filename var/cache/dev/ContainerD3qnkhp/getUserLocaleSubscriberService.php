<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'AppBundle\EventSubscriber\UserLocaleSubscriber' shared autowired service.

return $this->services['AppBundle\EventSubscriber\UserLocaleSubscriber'] = new \AppBundle\EventSubscriber\UserLocaleSubscriber(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});