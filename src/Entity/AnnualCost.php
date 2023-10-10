<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\AnnualCostRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnnualCostRepository::class)]
#[ApiResource]
class AnnualCost
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Year_AC = null;

    #[ORM\Column]
    private ?float $T_AC = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYearAC(): ?int
    {
        return $this->Year_AC;
    }

    public function setYearAC(int $Year_AC): static
    {
        $this->Year_AC = $Year_AC;

        return $this;
    }

    public function getTAC(): ?float
    {
        return $this->T_AC;
    }

    public function setTAC(float $T_AC): static
    {
        $this->T_AC = $T_AC;

        return $this;
    }
}
