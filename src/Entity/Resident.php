<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ResidentRepository;
use Doctrine\DBAL\Types\Types;
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

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_naiss = null;

    #[ORM\Column(length: 255)]
    private ?string $ville_naiss = null;

    #[ORM\Column(length: 255)]
    private ?string $situation = null;

    #[ORM\Column]
    private ?int $nb_enfant = null;

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

    public function getDateNaiss(): ?\DateTimeInterface
    {
        return $this->date_naiss;
    }

    public function setDateNaiss(\DateTimeInterface $date_naiss): static
    {
        $this->date_naiss = $date_naiss;

        return $this;
    }

    public function getVilleNaiss(): ?string
    {
        return $this->ville_naiss;
    }

    public function setVilleNaiss(string $ville_naiss): static
    {
        $this->ville_naiss = $ville_naiss;

        return $this;
    }

    public function getSituation(): ?string
    {
        return $this->situation;
    }

    public function setSituation(string $situation): static
    {
        $this->situation = $situation;

        return $this;
    }

    public function getNbEnfant(): ?int
    {
        return $this->nb_enfant;
    }

    public function setNbEnfant(int $nb_enfant): static
    {
        $this->nb_enfant = $nb_enfant;

        return $this;
    }
}
