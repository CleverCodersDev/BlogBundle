<?php

namespace CleverCoders\Bundle\BlogBundle\Listener;

use CleverCoders\Bundle\BlogBundle\Model\PostInterface;
use Doctrine\ORM\Event\LoadClassMetadataEventArgs;

/**
 * Class InheritanceListener
 */
class InheritanceListener
{
    /**
     * @var array
     */
    private $inheritanceMap;


    /**
     * InheritanceListener constructor.
     * @param array $inheritanceMap
     */
    public function __construct(array $inheritanceMap)
    {
        $this->inheritanceMap = $inheritanceMap;
    }

    /**
     * @param LoadClassMetadataEventArgs $args
     */
    public function loadClassMetadata(LoadClassMetadataEventArgs $args)
    {
        $meta = $args->getClassMetadata();

        if (PostInterface::class !== $meta->getName()) {
            return;
        }

        $meta->setDiscriminatorMap($this->inheritanceMap);
    }
}
