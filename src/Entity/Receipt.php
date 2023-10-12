<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ReceiptRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReceiptRepository::class)]
#[ApiResource]
class Receipt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $Payements = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Date_payments = null;

    #[ORM\Column(length: 255)]
    private ?string $Type_peyments = null;

    #[ORM\ManyToOne(inversedBy: 'loyers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Biens $biens = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPayements(): ?float
    {
        return $this->Payements;
    }

    public function setPayements(float $Payements): static
    {
        $this->Payements = $Payements;

        return $this;
    }

    public function getDatePayments(): ?\DateTimeInterface
    {
        return $this->Date_payments;
    }

    public function setDatePayments(\DateTimeInterface $Date_payments): static
    {
        $this->Date_payments = $Date_payments;

        return $this;
    }

    public function getTypePeyments(): ?string
    {
        return $this->Type_peyments;
    }

    public function setTypePeyments(string $Type_peyments): static
    {
        $this->Type_peyments = $Type_peyments;

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
