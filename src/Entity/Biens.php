<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\BiensRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BiensRepository::class)]
#[ApiResource]
class Biens
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $adress_biens = null;

    #[ORM\Column]
    private ?int $code_post_biens = null;

    #[ORM\Column(length: 255)]
    private ?string $ville_biens = null;

    #[ORM\Column(length: 255)]
    private ?string $type_biens = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdressBiens(): ?string
    {
        return $this->adress_biens;
    }

    public function setAdressBiens(string $adress_biens): static
    {
        $this->adress_biens = $adress_biens;

        return $this;
    }

    public function getCodePostBiens(): ?int
    {
        return $this->code_post_biens;
    }

    public function setCodePostBiens(int $code_post_biens): static
    {
        $this->code_post_biens = $code_post_biens;

        return $this;
    }

    public function getVilleBiens(): ?string
    {
        return $this->ville_biens;
    }

    public function setVilleBiens(string $ville_biens): static
    {
        $this->ville_biens = $ville_biens;

        return $this;
    }

    public function getTypeBiens(): ?string
    {
        return $this->type_biens;
    }

    public function setTypeBiens(string $type_biens): static
    {
        $this->type_biens = $type_biens;

        return $this;
    }
}
