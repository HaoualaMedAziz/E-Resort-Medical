<?php

namespace App\Entity;

use App\Repository\ResidentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResidentRepository::class)]
class Resident extends User
{

    #[ORM\Column(length: 255)]
    private ?string $nbChambre = null;

    #[ORM\OneToOne(mappedBy: 'resident', cascade: ['persist', 'remove'])]
    private ?MembreFamille $membreFamille = null;

    #[ORM\OneToMany(targetEntity: Observation::class, mappedBy: 'resident')]
    private Collection $observations;

    public function __construct()
    {
        $this->observations = new ArrayCollection();
    }

    public function getNbChambre(): ?string
    {
        return $this->nbChambre;
    }

    public function setNbChambre(string $nbChambre): static
    {
        $this->nbChambre = $nbChambre;

        return $this;
    }

    public function getMembreFamille(): ?MembreFamille
    {
        return $this->membreFamille;
    }

    public function setMembreFamille(MembreFamille $membreFamille): static
    {
        // set the owning side of the relation if necessary
        if ($membreFamille->getResident() !== $this) {
            $membreFamille->setResident($this);
        }

        $this->membreFamille = $membreFamille;

        return $this;
    }

    /**
     * @return Collection<int, Observation>
     */
    public function getObservations(): Collection
    {
        return $this->observations;
    }

    public function addObservation(Observation $observation): static
    {
        if (!$this->observations->contains($observation)) {
            $this->observations->add($observation);
            $observation->setResident($this);
        }

        return $this;
    }

    public function removeObservation(Observation $observation): static
    {
        if ($this->observations->removeElement($observation)) {
            // set the owning side to null (unless already changed)
            if ($observation->getResident() === $this) {
                $observation->setResident(null);
            }
        }

        return $this;
    }
}
