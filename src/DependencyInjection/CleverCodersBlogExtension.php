<?php

namespace CleverCoders\Bundle\BlogBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

/**
 * Class CleverCodersBlogExtension
 */
class CleverCodersBlogExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $processor     = new Processor();
        $configuration = new Configuration();

        $config = $processor->processConfiguration($configuration, $configs);
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));

        // load services
        $this->loadDoctrine($loader, $container, $config);
    }

    /**
     * @param XmlFileLoader    $loader
     * @param ContainerBuilder $container
     * @param array            $config
     */
    private function loadDoctrine(XmlFileLoader $loader, ContainerBuilder $container, array $config): void
    {
        $loader->load('doctrine.xml');
        $inheritanceListener = $container->getDefinition('cc_blog.listener.inheritance_listener');
        $inheritanceListener->addArgument($config['content_types']);
    }
}
