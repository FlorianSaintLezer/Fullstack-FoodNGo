<?php

namespace App\Entity;

use App\Repository\CommentsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CommentsRepository::class)
 */
class Comments
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min=10,
     *     minMessage="Comment too short",
     *     max=2000,
     *     maxMessage="Comment too long. Are you trying to write a novel here ???"
     * )
     */
    private $content;

    /**
     * @ORM\Column(type="datetime", "nullable=true")
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity=Recipes::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $recipe;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;

    ////////// ARRAYS

    public function __construct()
    {
        $this->updatedAt = new \DateTime();
    }

    ////////// ID

    public function getId(): ?int
    {
        return $this->id;
    }

    ////////// Content

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    ////////// Updated At

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    //////////////////// FOREIGN KEYS
    ////////// Recipes

    public function getRecipe(): ?Recipes
    {
        return $this->recipe;
    }

    public function setRecipe(?Recipes $recipe): self
    {
        $this->recipe = $recipe;

        return $this;
    }

    ////////// Author

    public function getAuthor(): ?Users
    {
        return $this->author;
    }

    public function setAuthor(Users $author): self
    {
        $this->author = $author;

        return $this;
    }
}
