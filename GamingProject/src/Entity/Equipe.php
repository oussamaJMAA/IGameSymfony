<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe")
 * @ORM\Entity(repositoryClass="App\Repository\EquipeRepository")
 */
class Equipe
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
     * @ORM\Column(name="nom_equipe", type="string", length=30, nullable=false)

     */
    private $nomEquipe;

    /**
     * @var int
     *
     * @ORM\Column(name="membres", type="integer", nullable=false)

     */
    private $membres;

    /**
     * @var int
     *
     * @ORM\Column(name="pts_exp", type="integer", nullable=true, options={"default"="NULL"})

     */
    private $ptsExp = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="tournois_gagne", type="integer", nullable=true, options={"default"="NULL"})


     */
    private $tournoisGagne = NULL;

    /**
     * @ORM\ManyToMany(targetEntity=Tournois::class, mappedBy="participations")
     * @ORM\JoinColumn(name="id", referencedColumnName="id",onDelete="cascade")
     */
    private $participation;

    public function __construct()
    {
        $this->participation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEquipe(): ?string
    {
        return $this->nomEquipe;
    }

    public function setNomEquipe(string $nomEquipe): self
    {
        $this->nomEquipe = $nomEquipe;

        return $this;
    }

    public function getMembres(): ?int
    {
        return $this->membres;
    }

    public function setMembres(int $membres): self
    {
        $this->membres = $membres;

        return $this;
    }

    public function getPtsExp(): ?int
    {
        return $this->ptsExp;
    }

    public function setPtsExp(?int $ptsExp): self
    {
        $this->ptsExp = $ptsExp;

        return $this;
    }

    public function getTournoisGagne(): ?int
    {
        return $this->tournoisGagne;
    }

    public function setTournoisGagne(?int $tournoisGagne): self
    {
        $this->tournoisGagne = $tournoisGagne;

        return $this;
    }

    /**
     * @return Collection<int, Tournois>
     */
    public function getParticipation(): Collection
    {
        return $this->participation;
    }

    public function addParticipation(Tournois $participation): self
    {
        if (!$this->participation->contains($participation)) {
            $this->participation[] = $participation;
            $participation->addParticipation($this);
        }

        return $this;
    }

    public function removeParticipation(Tournois $participation): self
    {
        if ($this->participation->removeElement($participation)) {
            $participation->removeParticipation($this);
        }

        return $this;
    }


}
