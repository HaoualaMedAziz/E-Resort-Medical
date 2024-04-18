<?php

namespace App\Entity;

use App\Repository\MembreFamilleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MembreFamilleRepository::class)]
class MembreFamille extends User
{

    #[ORM\Column(length: 255)]
    private ?string $numPassport = null;

    #[ORM\OneToOne(inversedBy: 'membreFamille')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Resident $resident = null;

    #[ORM\OneToMany(targetEntity: Visite::class, mappedBy: 'membreFamille')]
    private Collection $visites;

    public function __construct()
    {
        $this->visites = new ArrayCollection();
    }

    public function getNumPassport(): ?string
    {
        return $this->numPassport;
    }

    public function setNumPassport(string $numPassport): static
    {
        $this->numPassport = $numPassport;

        return $this;
    }

    public function getResident(): ?Resident
    {
        return $this->resident;
    }

    public function setResident(Resident $resident): static
    {
        $this->resident = $resident;

        return $this;
    }

    /**
     * @return Collection<int, Visite>
     */
    public function getVisites(): Collection
    {
        return $this->visites;
    }

    public function addVisite(Visite $visite): static
    {
        if (!$this->visites->contains($visite)) {
            $this->visites->add($visite);
            $visite->setMembreFamille($this);
        }

        return $this;
    }

    public function removeVisite(Visite $visite): static
    {
        if ($this->visites->removeElement($visite)) {
            // set the owning side to null (unless already changed)
            if ($visite->getMembreFamille() === $this) {
                $visite->setMembreFamille(null);
            }
        }

        return $this;
    }

    


    
}
