<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 * @UniqueEntity(fields={"email"},message="Email already exists")
 * @UniqueEntity(fields={"username"},message="Username already exists")
 *
 * @author Florian Saint-Lezer <floriansl.webdev@gmail.com>
 *
 * @Vich\Uploadable
 */
class Users implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min=5,
     *      max=15,
     *      minMessage="Username too short",
     *      maxMessage="Username too long"
     * )
     * @Assert\NotBlank()
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\Email(
     *      message = "The email '{{ value }}' is not a valid email."
     * )
     * @Assert\NotBlank()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min=6,
     *      minMessage="Password too short"
     * )
     */
    private $password;

    /**
     * @Assert\NotBlank()
     * @Assert\EqualTo(
     *      propertyPath="password",
     *      message="passwords don't match"
     * )
     */
    private $verificationPassword;

    /**
     * @ORM\Column(type="string", length=255, nullable=true )
     */
    private $image;

    /**
     * @Vich\UploadableField(
     *      mapping="users_image",
     *      fileNameProperty="image"
     * )
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    // /**
    //  * @ORM\ManyToOne(targetEntity=Roles::class)
    //  * @ORM\JoinColumn(nullable=false)
    //  */
    // private $roles;

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

    ////////// Username

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    ////////// Email

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    ////////// Password

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    ////////// Verify password

    public function getVerificationPassword(): ?string
    {
        return $this->verificationPassword;
    }

    public function setVerificationPassword(string $verificationPassword): self
    {
        $this->verificationPassword = $verificationPassword;

        return $this;
    }

    ////////// Image

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
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

    ////////// Updated At

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    ////////// Role

    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    // public function getRoles(): ?Roles
    // {
    //     return $this->roles;
    // }

    // public function setRole(?Roles $roles): self
    // {
    //     $this->roles = $roles;

    //     return $this;
    // }

    // public function getRole()
    // {
    //     return ['ROLE_USER'];
    // }

    ////////// Pas encore tout compris l'utilité de ce truc

    public function getSalt()
    {
    }

    public function eraseCredentials()
    {
    }
}
