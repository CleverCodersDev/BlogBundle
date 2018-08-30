<?php

namespace CleverCoders\Bundle\BlogBundle\Entity;

use CleverCoders\Bundle\BlogBundle\Model\PostInterface;
use CleverCoders\Bundle\BlogBundle\Model\PostTrait;

/**
 * Class Post
 */
class Post implements PostInterface
{
    use PostTrait;
}
