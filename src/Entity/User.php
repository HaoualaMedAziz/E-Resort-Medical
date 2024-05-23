<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[ORM\InheritanceType("JOINED")]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
#[ORM\DiscriminatorColumn(name:'discr',type:'string')]
#[ORM\DiscriminatorMap(['user'=>User::class, 'resident'=>Resident::class, 'membreFamille'=>MembreFamille::class, 'infirmier'=>Infirmier::class, 'soignant'=>Soignant::class,])]

class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    private ?string $lastName = null;

    #[ORM\Column(length: 255)]
    private ?string $telephone = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(length: 255)]
    private ?string $zipCode = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    
    //public const ROLE_USER = 'ROLE_USER';
    public const ROLE_RESIDENT = 'RESIDENT';

    public const ROLE_MFAMILLE = 'MFAMILLE';
    
    public const ROLE_INFIRMIER = 'INFIRMIER';

    public const ROLE_SOIGNANT = 'SOIGNANT';

    //#[ORM\Column(type: 'boolean')]
   // private $isVerified = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        //$roles[] = 'ROLE_USER';

         // Ajouter le rôle "ROLE_USER" si ce n'est pas déjà fait
        //if (!in_array(self::ROLE_USER, $roles)) {
        //    $roles[] = self::ROLE_USER;
        //}

        // Ajouter le rôle "ROLE_RESIDENT" si l'entité est de type Resident
        if ($this instanceof Resident && !in_array(self::ROLE_RESIDENT, $roles)) {
            $roles[] = self::ROLE_RESIDENT;
        }
        if ($this instanceof MembreFamille && !in_array(self::ROLE_MFAMILLE, $roles)) {
            $roles[] = self::ROLE_MFAMILLE;
        }
        if ($this instanceof Infirmier && !in_array(self::ROLE_INFIRMIER, $roles)) {
            $roles[] = self::ROLE_INFIRMIER;
        }
        if ($this instanceof Soignant && !in_array(self::ROLE_SOIGNANT, $roles)) {
            $roles[] = self::ROLE_SOIGNANT;
        }

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }
    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(string $zipCode): static
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function __toString()
    {
        return $this->firstName;
    }

   // public function isVerified(): bool
   // {
   //     return $this->isVerified;
   // }

   // public function setIsVerified(bool $isVerified): static
   // {
   //     $this->isVerified = $isVerified;

   //     return $this;
   // }
}
