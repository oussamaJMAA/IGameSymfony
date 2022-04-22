<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tournois
 *
 * @ORM\Table(name="tournois")
 * @ORM\Entity
 */
class Tournois
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
     * @var string
     *
     * @ORM\Column(name="nom_tournois", type="string", length=20, nullable=false)
     */
    private $nomTournois;

    /**
     * @var int
     *
     * @ORM\Column(name="capacite", type="integer", nullable=false)
     */
    private $capacite;

    /**
     * @var string
     *
     * @ORM\Column(name="platforme", type="string", length=30, nullable=false)
     */
    private $platforme;

    /**
     * @var string
     *
     * @ORM\Column(name="recompense", type="string", length=30, nullable=false)
     */
    private $recompense;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_tournois", type="date", nullable=true)
     */
    private $dateTournois;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pts_xp", type="integer", nullable=true)
     */
    private $ptsXp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time_t", type="time", nullable=true)
     */
    private $timeT;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTournois(): ?string
    {
        return $this->nomTournois;
    }

    public function setNomTournois(string $nomTournois): self
    {
        $this->nomTournois = $nomTournois;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getPlatforme(): ?string
    {
        return $this->platforme;
    }

    public function setPlatforme(string $platforme): self
    {
        $this->platforme = $platforme;

        return $this;
    }

    public function getRecompense(): ?string
    {
        return $this->recompense;
    }

    public function setRecompense(string $recompense): self
    {
        $this->recompense = $recompense;

        return $this;
    }

    public function getDateTournois(): ?\DateTimeInterface
    {
        return $this->dateTournois;
    }

    public function setDateTournois(?\DateTimeInterface $dateTournois): self
    {
        $this->dateTournois = $dateTournois;

        return $this;
    }

    public function getPtsXp(): ?int
    {
        return $this->ptsXp;
    }

    public function setPtsXp(?int $ptsXp): self
    {
        $this->ptsXp = $ptsXp;

        return $this;
    }

    public function getTimeT(): ?\DateTimeInterface
    {
        return $this->timeT;
    }

    public function setTimeT(?\DateTimeInterface $timeT): self
    {
        $this->timeT = $timeT;

        return $this;
    }


}
