<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dateEvenement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'evenements')]
    private ?TypeEvenement $typeEvenement = null;

    #[ORM\ManyToMany(targetEntity: Resident::class, inversedBy: 'agenda')]
    private Collection $resident;

    public function __construct()
    {
        $this->resident = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateEvenement(): ?\DateTimeImmutable
    {
        return $this->dateEvenement;
    }

    public function setDateEvenement(\DateTimeImmutable $dateEvenement): static
    {
        $this->dateEvenement = $dateEvenement;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getTypeEvenement(): ?TypeEvenement
    {
        return $this->typeEvenement;
    }

    public function setTypeEvenement(?TypeEvenement $typeEvenement): static
    {
        $this->typeEvenement = $typeEvenement;

        return $this;
    }

    /**
     * @return Collection<int, Resident>
     */
    public function getResident(): Collection
    {
        return $this->resident;
    }

    public function addResident(Resident $resident): static
    {
        if (!$this->resident->contains($resident)) {
            $this->resident->add($resident);
        }

        return $this;
    }

    public function removeResident(Resident $resident): static
    {
        $this->resident->removeElement($resident);

        return $this;
    }
    
    
}
