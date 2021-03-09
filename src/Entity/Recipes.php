<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\RecipesRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=RecipesRepository::class)
 * @Vich\Uploadable
 */
class Recipes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $recipesName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $recipesImage;

    /**
     * @Vich\UploadableField(mapping="recipes_image", fileNameProperty="recipesImage")
     */
    private $imageFile;

    /**
     * @ORM\Column(type="text")
     */
    private $recipesDescription;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $user_id;

    /**
     * @ORM\ManyToMany(targetEntity=Ingredients::class)
     */
    private $recipesIngredients;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    public function __construct()
    {
        $this->recipesIngredients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRecipesName(): ?string
    {
        return $this->recipesName;
    }

    public function setRecipesName(string $recipesName): self
    {
        $this->recipesName = $recipesName;

        return $this;
    }

    public function getRecipesImage(): ?string
    {
        return $this->recipesImage;
    }

    public function setRecipesImage(string $recipesImage): self
    {
        $this->recipesImage = $recipesImage;

        return $this;
    }
    public function setImageFile(?File $imageFile = null): self
    {
        $this->imageFile = $imageFile;

        if ($this->imageFile instanceof UploadedFile) {
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getRecipesDescription(): ?string
    {
        return $this->recipesDescription;
    }

    public function setRecipesDescription(string $recipesDescription): self
    {
        $this->recipesDescription = $recipesDescription;

        return $this;
    }

    public function getUserId(): ?Users
    {
        return $this->user_id;
    }

    public function setUserId(?Users $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * @return Collection|Ingredients[]
     */
    public function getRecipesIngredients(): Collection
    {
        return $this->recipesIngredients;
    }

    public function addRecipesIngredient(Ingredients $recipesIngredient): self
    {
        if (!$this->recipesIngredients->contains($recipesIngredient)) {
            $this->recipesIngredients[] = $recipesIngredient;
        }

        return $this;
    }

    public function removeRecipesIngredient(Ingredients $recipesIngredient): self
    {
        $this->recipesIngredients->removeElement($recipesIngredient);

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
