<?php

namespace CleverCoders\Bundle\BlogBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Interface PostInterface
 */
interface PostInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return null|string
     */
    public function getTitle(): ?string;

    /**
     * @return null|string
     */
    public function getContent(): ?string;

    /**
     * @return array
     */
    public function getMeta(): array;

    /**
     * @return null|string
     */
    public function getSlug(): ?string;

    /**
     * @return null|string
     */
    public function getLayout(): ?string;

    /**
     * @return int|null
     */
    public function getStatus(): ?int;

    /**
     * @return UserInterface
     */
    public function getAuthor(): UserInterface;

    /**
     * @return AssetInterface
     */
    public function getFeaturedImage(): ?AssetInterface;
}
