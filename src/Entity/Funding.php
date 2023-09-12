<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\FundingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FundingRepository::class)]
#[ApiResource]
class Funding
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $cost_name = null;

    #[ORM\Column]
    private ?int $amount_cost = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCostName(): ?string
    {
        return $this->cost_name;
    }

    public function setCostName(string $cost_name): static
    {
        $this->cost_name = $cost_name;

        return $this;
    }

    public function getAmountCost(): ?int
    {
        return $this->amount_cost;
    }

    public function setAmountCost(int $amount_cost): static
    {
        $this->amount_cost = $amount_cost;

        return $this;
    }
}
