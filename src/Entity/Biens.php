<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\BiensRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToMany(mappedBy: 'biens', targetEntity: AnnuelSales::class)]
    private Collection $Amount;

    #[ORM\OneToMany(mappedBy: 'biens', targetEntity: Receipt::class)]
    private Collection $loyers;

    #[ORM\OneToMany(mappedBy: 'biens', targetEntity: AnnualCost::class)]
    private Collection $cost;

    #[ORM\OneToMany(mappedBy: 'biens', targetEntity: Funding::class)]
    private Collection $cost_f;

    #[ORM\ManyToMany(targetEntity: Users::class, mappedBy: 'Owners')]
    private Collection $users;

    #[ORM\OneToMany(mappedBy: 'biens', targetEntity: Location::class)]
    private Collection $loc;

    public function __construct()
    {
        $this->Amount = new ArrayCollection();
        $this->loyers = new ArrayCollection();
        $this->cost = new ArrayCollection();
        $this->cost_f = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->loc = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, AnnuelSales>
     */
    public function getAmount(): Collection
    {
        return $this->Amount;
    }

    public function addAmount(AnnuelSales $amount): static
    {
        if (!$this->Amount->contains($amount)) {
            $this->Amount->add($amount);
            $amount->setBiens($this);
        }

        return $this;
    }

    public function removeAmount(AnnuelSales $amount): static
    {
        if ($this->Amount->removeElement($amount)) {
            // set the owning side to null (unless already changed)
            if ($amount->getBiens() === $this) {
                $amount->setBiens(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Receipt>
     */
    public function getLoyers(): Collection
    {
        return $this->loyers;
    }

    public function addLoyer(Receipt $loyer): static
    {
        if (!$this->loyers->contains($loyer)) {
            $this->loyers->add($loyer);
            $loyer->setBiens($this);
        }

        return $this;
    }

    public function removeLoyer(Receipt $loyer): static
    {
        if ($this->loyers->removeElement($loyer)) {
            // set the owning side to null (unless already changed)
            if ($loyer->getBiens() === $this) {
                $loyer->setBiens(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AnnualCost>
     */
    public function getCost(): Collection
    {
        return $this->cost;
    }

    public function addCost(AnnualCost $cost): static
    {
        if (!$this->cost->contains($cost)) {
            $this->cost->add($cost);
            $cost->setBiens($this);
        }

        return $this;
    }

    public function removeCost(AnnualCost $cost): static
    {
        if ($this->cost->removeElement($cost)) {
            // set the owning side to null (unless already changed)
            if ($cost->getBiens() === $this) {
                $cost->setBiens(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Funding>
     */
    public function getCostF(): Collection
    {
        return $this->cost_f;
    }

    public function addCostF(Funding $costF): static
    {
        if (!$this->cost_f->contains($costF)) {
            $this->cost_f->add($costF);
            $costF->setBiens($this);
        }

        return $this;
    }

    public function removeCostF(Funding $costF): static
    {
        if ($this->cost_f->removeElement($costF)) {
            // set the owning side to null (unless already changed)
            if ($costF->getBiens() === $this) {
                $costF->setBiens(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection<int, Users>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(Users $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->addOwner($this);
        }

        return $this;
    }

    public function removeUser(Users $user): static
    {
        if ($this->users->removeElement($user)) {
            $user->removeOwner($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Location>
     */
    public function getLoc(): Collection
    {
        return $this->loc;
    }

    public function addLoc(Location $loc): static
    {
        if (!$this->loc->contains($loc)) {
            $this->loc->add($loc);
            $loc->setBiens($this);
        }

        return $this;
    }

    public function removeLoc(Location $loc): static
    {
        if ($this->loc->removeElement($loc)) {
            // set the owning side to null (unless already changed)
            if ($loc->getBiens() === $this) {
                $loc->setBiens(null);
            }
        }

        return $this;
    }
}
