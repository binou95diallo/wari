<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\RecepteurRepository")
 */
class Recepteur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCompletR;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseR;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephoneR;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $numeroPieceR;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Transaction", mappedBy="recepteur")
     */
    private $transaction;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $typePiece;

    public function __construct()
    {
        $this->transaction = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCompletR(): ?string
    {
        return $this->nomCompletR;
    }

    public function setNomCompletR(string $nomCompletR): self
    {
        $this->nomCompletR = $nomCompletR;

        return $this;
    }

    public function getAdresseR(): ?string
    {
        return $this->adresseR;
    }

    public function setAdresseR(string $adresseR): self
    {
        $this->adresseR = $adresseR;

        return $this;
    }

    public function getTelephoneR(): ?string
    {
        return $this->telephoneR;
    }

    public function setTelephoneR(string $telephoneR): self
    {
        $this->telephoneR = $telephoneR;

        return $this;
    }

    public function getNumeroPieceR(): ?string
    {
        return $this->numeroPieceR;
    }

    public function setNumeroPieceR(string $numeroPieceR): self
    {
        $this->numeroPieceR = $numeroPieceR;

        return $this;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getTransaction(): Collection
    {
        return $this->transaction;
    }

    public function addTransaction(Transaction $transaction): self
    {
        if (!$this->transaction->contains($transaction)) {
            $this->transaction[] = $transaction;
            $transaction->setRecepteur($this);
        }

        return $this;
    }

    public function removeTransaction(Transaction $transaction): self
    {
        if ($this->transaction->contains($transaction)) {
            $this->transaction->removeElement($transaction);
            // set the owning side to null (unless already changed)
            if ($transaction->getRecepteur() === $this) {
                $transaction->setRecepteur(null);
            }
        }

        return $this;
    }

    public function getTypePiece(): ?string
    {
        return $this->typePiece;
    }

    public function setTypePiece(string $typePiece): self
    {
        $this->typePiece = $typePiece;

        return $this;
    }
}
