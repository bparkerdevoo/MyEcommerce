<?php

namespace AppBundle\SonataAdminImageBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use AppBundle\SonataAdminImageBundle\DependencyInjection\Compiler\RequestHandlerPass;
class AdminImageBundle extends Bundle
{

    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new RequestHandlerPass());
    }
}