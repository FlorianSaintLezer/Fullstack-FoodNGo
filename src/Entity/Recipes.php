<?php

namespace App\Entity;

use App\Repository\RecipesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
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
     * @ORM\Column(type="string")
     * @Assert\NotBlank(
     *      message="Need a title"
     * )
     * @Assert\Length(
     *      min=5,
     *      max=255,
     *      minMessage="Title too short",
     *      maxMessage="Title too long"
     * )
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @Vich\UploadableField(
     *      mapping="recipes_image",
     *      fileNameProperty="image"
     * )
     */
    private $imageFile;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     * @Assert\Length(
     *      min=20,
     *      minMessage="Description too short"
     * )
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity=Ingredients::class)
     * @ORM\OrderBy({"name": "ASC"})
     */
    private $ingredients;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;

    /**
     * @var Collection|Comments[]
     *
     * @ORM\OneToMany(
     *      targetEntity="Comments",
     *      mappedBy="recipes",
     *      orphanRemoval=true,
     *      cascade={"persist"}
     * )
     * @ORM\OrderBy({"updatedAt": "DESC"})
     */
    private $comments;

    ////////// ARRAYS

    public function __construct()
    {
        $this->updatedAt = new \DateTime();
        $this->comments = new ArrayCollection();
        $this->ingredients = new ArrayCollection();
    }

    ////////// ID

    public function getId(): ?int
    {
        return $this->id;
    }

    ////////// Title

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    ////////// Image

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    ////////// Image File

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

    ////////// Description

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    ////////// Ingredients (ARRAY)

    /**
     * @return Collection|Ingredients[]
     */
    public function getIngredients(): Collection
    {
        return $this->Ingredients;
    }

    public function addIngredient(Ingredients $ingredient): self
    {
        if (!$this->ingredients->contains($ingredient)) {
            $this->ingredients[] = $ingredient;
        }

        return $this;
    }

    public function removeIngredient(Ingredients $ingredient): self
    {
        $this->ingredients->removeElement($ingredient);

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
    ////////// Author

    public function getAuthor(): ?Users
    {
        return $this->author;
    }

    public function setAuthor(?Users $author): self
    {
        $this->author = $author;

        return $this;
    }

    ////////// Comments (Array)

    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comments $comment): void
    {
        $comment->setPost($this);
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
        }
    }

    public function removeComment(Comments $comment): void
    {
        $this->comments->removeElement($comment);
    }
}
