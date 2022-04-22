<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table(name="participation", indexes={@ORM\Index(name="fk_e", columns={"id_equipe"}), @ORM\Index(name="fk_t", columns={"id_tournois"})})
 * @ORM\Entity
 */
class Participation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Tournois
     *
     * @ORM\ManyToOne(targetEntity="Tournois")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tournois", referencedColumnName="id")
     * })
     */
    private $idTournois;

    /**
     * @var \Equipe
     *
     * @ORM\ManyToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipe", referencedColumnName="id")
     * })
     */
    private $idEquipe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTournois(): ?Tournois
    {
        return $this->idTournois;
    }

    public function setIdTournois(?Tournois $idTournois): self
    {
        $this->idTournois = $idTournois;

        return $this;
    }

    public function getIdEquipe(): ?Equipe
    {
        return $this->idEquipe;
    }

    public function setIdEquipe(?Equipe $idEquipe): self
    {
        $this->idEquipe = $idEquipe;

        return $this;
    }


}
