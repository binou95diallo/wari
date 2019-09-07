<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\BankAccountRepository")
 */
class BankAccount
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"compte"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"compte"})
     */
    private $numeroCompte;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"compte"})
     * @Assert\NotBlank()
     * @Assert\Range(min="0",minMessage="La valeur minimum autorisée est {{ limit }}")
     */
    private $solde;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Partenaire", inversedBy="bankAccount")
     * @ORM\JoinColumn(nullable=false)
     */
    private $partenaire;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="bankAccount")
     */
    private $users;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Depot", mappedBy="bankAccount")
     */
    private $depots;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $nombreUsers;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->depots = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroCompte(): ?string
    {
        return $this->numeroCompte;
    }

    public function setNumeroCompte(string $numeroCompte): self
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }

    public function getSolde(): ?int
    {
        return $this->solde;
    }

    public function setSolde(int $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

    public function getPartenaire(): ?Partenaire
    {
        return $this->partenaire;
    }

    public function setPartenaire(?Partenaire $partenaire): self
    {
        $this->partenaire = $partenaire;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setBankAccount($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getBankAccount() === $this) {
                $user->setBankAccount(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->numeroCompte;
    }

    /**
     * @return Collection|Depot[]
     */
    public function getDepots(): Collection
    {
        return $this->depots;
    }

    public function addDepot(Depot $depot): self
    {
        if (!$this->depots->contains($depot)) {
            $this->depots[] = $depot;
            $depot->setBankAccount($this);
        }

        return $this;
    }

    public function removeDepot(Depot $depot): self
    {
        if ($this->depots->contains($depot)) {
            $this->depots->removeElement($depot);
            // set the owning side to null (unless already changed)
            if ($depot->getBankAccount() === $this) {
                $depot->setBankAccount(null);
            }
        }

        return $this;
    }

    public function getNombreUsers(): ?int
    {
        return $this->nombreUsers;
    }

    public function setNombreUsers(int $nombreUsers): self
    {
        $this->nombreUsers = $nombreUsers;

        return $this;
    }


}
