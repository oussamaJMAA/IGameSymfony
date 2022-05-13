<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity
 */
class Promotion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("promotion")
     * @Groups("posts:read")
     */
    private $id;

    /**
     * @var string
     **@Assert\NotBlank(message="nom titre doit etre non vide")
     * @Assert\Length(
     * min=5, 
     * max=15,
     * minMessage="doit etre >=5",
     * maxMessage="doit etre <=15")
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     * @Groups("promotion")
     * @Groups("posts:read")
     */
    
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=true, options={"default"="NULL"})
     * @Groups("promotion")
     * @Groups("posts:read")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_pro", type="integer", nullable=true)
     * @Groups("posts:read")
     */
    private $prixPro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="datef", type="string", length=255, nullable=true, options={"default"="NULL"})
     * @Groups("promotion")
     * @Groups("posts:read")
     */
    private $datef;



    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     *
     * @return  string
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param  string  $nom
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of date
     *
     * @return  string|null
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @param  string|null  $date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return int
     */
    public function getPrixPro(): ?int
    {
        return $this->prixPro;
    }

    /**
     * @param int $prixPro
     */
    public function setPrixPro(int $prixPro): void
    {
        $this->prixPro = $prixPro;
    }



    /**
     *
     * @return  string|null
     */ 
    public function getDatef()
    {
        return $this->datef;
    }

    /**
     * Set the value of datef
     *
     * @param  string|null  $datef
     *
     * @return  self
     */ 
    public function setDatef($datef)
    {
        $this->datef = $datef;

        return $this;
    }
}
