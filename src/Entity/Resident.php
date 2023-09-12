<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ResidentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResidentRepository::class)]
#[ApiResource]
class Resident
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name_loc = null;

    #[ORM\Column(length: 255)]
    private ?string $firstname_loc = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameLoc(): ?string
    {
        return $this->name_loc;
    }

    public function setNameLoc(?string $name_loc): static
    {
        $this->name_loc = $name_loc;

        return $this;
    }

    public function getFirstnameLoc(): ?string
    {
        return $this->firstname_loc;
    }

    public function setFirstnameLoc(string $firstname_loc): static
    {
        $this->firstname_loc = $firstname_loc;

        return $this;
    }
}
