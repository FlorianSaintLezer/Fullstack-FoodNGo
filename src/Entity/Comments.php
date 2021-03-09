<?php

namespace App\Entity;

use App\Repository\CommentsRepository;
use Doctrine\ORM\Mapping as ORM;

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
     */
    private $commentsContent;

    /**
     * @ORM\ManyToOne(targetEntity=Recipes::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $recipe_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentsContent(): ?string
    {
        return $this->commentsContent;
    }

    public function setCommentsContent(string $commentsContent): self
    {
        $this->commentsContent = $commentsContent;

        return $this;
    }

    public function getRecipeId(): ?Recipes
    {
        return $this->recipe_id;
    }

    public function setRecipeId(?Recipes $recipe_id): self
    {
        $this->recipe_id = $recipe_id;

        return $this;
    }
}
