<?php

namespace App\Entity;

use App\Repository\IngredientsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IngredientsRepository::class)
 */
class Ingredients
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
    private $ingredientsName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIngredientsName(): ?string
    {
        return $this->ingredientsName;
    }

    public function setIngredientsName(string $ingredientsName): self
    {
        $this->ingredientsName = $ingredientsName;

        return $this;
    }
}
