<?php

namespace App\Entity;

use App\Repository\InfirmierRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfirmierRepository::class)]
class Infirmier extends User
{
   
    #[ORM\GeneratedValue]
    #[ORM\Column(length: 255)]
    private ?string $genre = null;

    public function getgenre(): ?string
    {
        return $this->genre;
    }

    public function setgenre(string $genre): static
    {
        $this->genre = $genre;

        return $this;
    }
}
