<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\FundingRepository;
use Doctrine\DBAL\Types\Types;
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

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_cost = null;

    #[ORM\ManyToOne(inversedBy: 'cost_f')]
    private ?Biens $biens = null;

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

    public function getDateCost(): ?\DateTimeInterface
    {
        return $this->date_cost;
    }

    public function setDateCost(\DateTimeInterface $date_cost): static
    {
        $this->date_cost = $date_cost;

        return $this;
    }

    public function getBiens(): ?Biens
    {
        return $this->biens;
    }

    public function setBiens(?Biens $biens): static
    {
        $this->biens = $biens;

        return $this;
    }
}
