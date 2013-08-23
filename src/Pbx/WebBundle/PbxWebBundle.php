<?php

namespace Pbx\WebBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class PbxWebBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

//        $container->addCompilerPass(new RepositoryPass());
    }

    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
