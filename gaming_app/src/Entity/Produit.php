<?php

namespace App\Entity;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("produit")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="le Nom est obligatoire")
     * @Assert\Length(
     *      min = 2,
     *      max = 10,
     * )
     * @Groups("produit")
     */
    private $Nom;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="le Prix est obligatoire")
     * @Groups("produit")
     */
    private $Prix;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("produit")
     */
    private $Image;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="la Quantite est obligatoire")
     * @Groups("produit")
     */
    private $Quantite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups("produit")
     */
    private $avis;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups("produit")
     */
    private $nbavis;




    /**
     * @ORM\ManyToMany(targetEntity=Commande::class, mappedBy="Produit")
     * @Groups("commande_produit")
     */
    private $commandes;



    public function __construct()
    {
        $this->Commande = new ArrayCollection();
        $this->commandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->Prix;
    }

    public function setPrix(float $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getImage()
    {
        return $this->Image;
    }

    public function setImage($Image)
    {
        $this->Image = $Image;
        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->Quantite;
    }

    public function setQuantite(int $Quantite): self
    {
        $this->Quantite = $Quantite;

        return $this;
    }

    public function getAvis(): ?int
    {
        return $this->avis;
    }

    public function setAvis(?int $avis): self
    {
        $this->avis = $avis;

        return $this;
    }
    public function getNbavis(): ?int
    {
        return $this->nbavis;
    }

    public function setNbavis(?int $nbavis): self
    {
        $this->nbavis = $nbavis;
        return $this;
    }


    /**
     * @return Collection|Commande[]
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->addProduit($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->removeElement($commande)) {
            $commande->removeProduit($this);
        }

        return $this;
    }


}
