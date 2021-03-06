<?php

namespace App\Entity;
use Symfony\Component\Serializer\Annotation\Groups;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\ExecutionContext;
use Symfony\Component\Finder\Comparator\DateComparator;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("commande")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="le numero est obligatoire")
     * @Groups("commande")
     */
    private $Nbproduit;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="la date est obligatoire")
     * @Assert\GreaterThan("today")
     * @Groups("commande")
     */
    private $Date;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="la methode de paiement est obligatoire")
     * @Groups("commande")
     */
    private $Methodedepaiement;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("commande")
     */
    private $Etat;

    /**
     * @ORM\Column(type="float")
     * @Groups("commande")
     */
    private $Prixtotale;

    /**
     * @ORM\ManyToMany(targetEntity=Produit::class, inversedBy="commandes")
     */
    private $Produit;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="commandes")
     * @ORM\JoinColumn(onDelete="CASCADE") 
     */
    private $user;



    public function __construct()
    {
        $this->Produit = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbproduit(): ?int
    {
        return $this->Nbproduit;
    }

    public function setNbproduit(int $Nbproduit): self
    {
        $this->Nbproduit = $Nbproduit;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getMethodedepaiement(): ?string
    {
        return $this->Methodedepaiement;
    }

    public function setMethodedepaiement(string $Methodedepaiement): self
    {
        $this->Methodedepaiement = $Methodedepaiement;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->Etat;
    }

    public function setEtat(string $Etat): self
    {
        $this->Etat = $Etat;

        return $this;
    }

    public function getPrixtotale(): ?float
    {
        return $this->Prixtotale;
    }

    public function setPrixtotale(float $Prixtotale): self
    {
        $this->Prixtotale = $Prixtotale;

        return $this;
    }

    /**
     * @return Collection|Produit[]
     */
    public function getProduit(): Collection
    {
        return $this->Produit;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->Produit->contains($produit)) {
            $this->Produit[] = $produit;
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        $this->Produit->removeElement($produit);

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



}
