<?php

namespace CleverCoders\Bundle\BlogBundle\DependencyInjection\Compiler;

use Ramsey\Uuid\Doctrine\UuidType;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Class UuidCompilerPass
 */
class UuidCompilerPass implements CompilerPassInterface
{
    /**
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        $types = $container->getParameter('doctrine.dbal.connection_factory.types');
        if (empty($types) || !in_array(UuidType::class, $types)) {
            $types = array_merge([], $types, [
                UuidType::NAME => [
                    'class'     => UuidType::class,
                    'commented' => false,
                ],
            ]);
            $container->setParameter('doctrine.dbal.connection_factory.types', $types);
        }
    }
}
