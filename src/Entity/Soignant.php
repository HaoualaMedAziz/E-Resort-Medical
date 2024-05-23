<?php

namespace App\Entity;

use App\Repository\SoignantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SoignantRepository::class)]
class Soignant extends User
{
    

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $deuxiemeTelephone = null;


    public function getDeuxiemeTelephone(): ?string
    {
        return $this->deuxiemeTelephone;
    }

    public function setDeuxiemeTelephone(?string $deuxiemeTelephone): static
    {
        $this->deuxiemeTelephone = $deuxiemeTelephone;

        return $this;
    }
}
