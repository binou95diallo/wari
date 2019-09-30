<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\TransactionRepository")
 */
class Transaction
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"transact"})
     */
    private $code;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateEnvoie;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateRetrait;

    /**
     * @ORM\Column(type="integer",nullable=true)
     * @Groups({"transact"})
     */
    private $frais;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"transact"})
     */
    private $montant;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $gain;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $taxeEtat;

    /**
     * @ORM\Column(type="integer")
     */
    private $commissionPartenaire;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="transactions")
     * @Groups({"transact"})
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Expediteur", inversedBy="transactions")
     * @Groups({"transact"})
     */
    private $expediteur;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Recepteur", inversedBy="transaction")
     * @Groups({"transact"})
     */
    private $recepteur;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"transact"})
     */
    private $dateTransaction;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getDateEnvoie(): ?\DateTimeInterface
    {
        return $this->dateEnvoie;
    }

    public function setDateEnvoie(?\DateTimeInterface $dateEnvoie): self
    {
        $this->dateEnvoie = $dateEnvoie;

        return $this;
    }

    public function getDateRetrait(): ?\DateTimeInterface
    {
        return $this->dateRetrait;
    }

    public function setDateRetrait(?\DateTimeInterface $dateRetrait): self
    {
        $this->dateRetrait = $dateRetrait;

        return $this;
    }

    public function getFrais(): ?int
    {
        return $this->frais;
    }

    public function setFrais(int $frais): self
    {
        $this->frais = $frais;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getGain(): ?int
    {
        return $this->gain;
    }

    public function setGain(int $gain): self
    {
        $this->gain = $gain;

        return $this;
    }

    public function getTaxeEtat(): ?int
    {
        return $this->taxeEtat;
    }

    public function setTaxeEtat(int $taxeEtat): self
    {
        $this->taxeEtat = $taxeEtat;

        return $this;
    }

    public function getCommissionPartenaire(): ?int
    {
        return $this->commissionPartenaire;
    }

    public function setCommissionPartenaire(int $commissionPartenaire): self
    {
        $this->commissionPartenaire = $commissionPartenaire;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getExpediteur(): ?Expediteur
    {
        return $this->expediteur;
    }

    public function setExpediteur(?Expediteur $expediteur): self
    {
        $this->expediteur = $expediteur;

        return $this;
    }

    public function getRecepteur(): ?Recepteur
    {
        return $this->recepteur;
    }

    public function setRecepteur(?Recepteur $recepteur): self
    {
        $this->recepteur = $recepteur;

        return $this;
    }

    public function getDateTransaction(): ?\DateTimeInterface
    {
        return $this->dateTransaction;
    }

    public function setDateTransaction(\DateTimeInterface $dateTransaction): self
    {
        $this->dateTransaction = $dateTransaction;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

}
