<?php

namespace CleverCoders\Bundle\BlogBundle;

use CleverCoders\Bundle\BlogBundle\DependencyInjection\Compiler\UuidCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class CleverCodersBlogBundle
 */
class CleverCodersBlogBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new UuidCompilerPass());
    }
}
