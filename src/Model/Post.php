<?php

namespace CleverCoders\Bundle\BlogBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class Post
 */
class Post implements PostInterface
{
    /**
     * @var mixed
     */
    private $id;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $content;

    /**
     * @var array
     */
    private $meta;

    /**
     * @var string|null
     */
    private $slug;

    /**
     * @var string|null
     */
    private $layout;

    /**
     * @var int
     */
    private $status;

    /**
     * @var UserInterface
     */
    private $author;

    /**
     * @var AssetInterface
     */
    private $featuredImage;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param null|string $title
     * @return Post
     */
    public function setTitle(?string $title): Post
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param null|string $content
     * @return Post
     */
    public function setContent(?string $content): Post
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return array
     */
    public function getMeta(): array
    {
        return $this->meta;
    }

    /**
     * @param array $meta
     * @return Post
     */
    public function setMeta(array $meta): Post
    {
        $this->meta = $meta;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @param null|string $slug
     * @return Post
     */
    public function setSlug(?string $slug): Post
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLayout(): ?string
    {
        return $this->layout;
    }

    /**
     * @param null|string $layout
     * @return Post
     */
    public function setLayout(?string $layout): Post
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return Post
     */
    public function setStatus(int $status): Post
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return UserInterface
     */
    public function getAuthor(): UserInterface
    {
        return $this->author;
    }

    /**
     * @param UserInterface $author
     * @return Post
     */
    public function setAuthor(UserInterface $author): Post
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return AssetInterface
     */
    public function getFeaturedImage(): AssetInterface
    {
        return $this->featuredImage;
    }

    /**
     * @param AssetInterface $featuredImage
     * @return Post
     */
    public function setFeaturedImage(AssetInterface $featuredImage): Post
    {
        $this->featuredImage = $featuredImage;

        return $this;
    }
}
