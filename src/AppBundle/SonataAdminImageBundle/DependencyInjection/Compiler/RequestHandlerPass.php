<?php

namespace AppBundle\SonataAdminImageBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class RequestHandlerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $definition = $container->findDefinition(
            'image_panel.request_handler_provider'
        );
        $taggedServices = $container->findTaggedServiceIds(
            'image_panel.request_handler'
        );

        if (count($taggedServices) === 0) {
            throw new \Exception(" Image Panel requires a request handler service. None were tagged");
        }

        foreach ($taggedServices as $id => $tags) {
            $definition->addMethodCall(
                'setHandler',
                array(new Reference($id))
            );
        }
    }
}