<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\AnnuelSalesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnnuelSalesRepository::class)]
#[ApiResource]
class AnnuelSales
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Year_AS = null;

    #[ORM\Column]
    private ?int $T_AS = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYearAS(): ?int
    {
        return $this->Year_AS;
    }

    public function setYearAS(int $Year_AS): static
    {
        $this->Year_AS = $Year_AS;

        return $this;
    }

    public function getTAS(): ?int
    {
        return $this->T_AS;
    }

    public function setTAS(int $T_AS): static
    {
        $this->T_AS = $T_AS;

        return $this;
    }
}
