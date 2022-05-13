<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * Tournois
 *
 * @ORM\Table(name="tournois")
 * @ORM\Entity(repositoryClass="App\Repository\TournoisRepository")
 * 
 */
class Tournois
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_tournois", type="string", length=20, nullable=false)
     *  @Assert\Length(
     *      min = 3,
     *      max = 10,
     * )
     * @Assert\NotBlank()
     * @Groups("post:read")
     */
    private $nomTournois;

    /**
     * @var int
     *
     * @ORM\Column(name="capacite", type="integer", nullable=true)
     * @Groups("post:read")
     *
     */
    private $capacite;

   
    /**
     * @var string
     *
     * @ORM\Column(name="recompense", type="string", length=30, nullable=false)
     * @Assert\NotBlank()
     * @Groups("post:read")
     */
    private $recompense;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_tournois", type="date", nullable=true)
     * @Assert\NotNull
     * @Groups("post:read")
     */
    private $dateTournois;

    /**
     * @var int
     *
     * @ORM\Column(name="pts_xp", type="integer", nullable=true)
     * @Assert\NotBlank()
     * @Groups("post:read")
     */
    private $ptsXp = NULL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_t", type="time", nullable=true)
     * @Assert\NotNull
     * @Groups("post:read")
     */
    private $timeT;

    /**
     * 
     * @ORM\ManyToMany(targetEntity=Equipe::class, inversedBy="participation")
     * @ORM\JoinColumn(name="id", referencedColumnName="id",onDelete="cascade")
     */
    private $participations;

    public function __construct()
    {
        $this->participations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
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

    /**
     * @return Collection<int, equipe>
     */
    public function getParticipations(): Collection
    {
        return $this->participations;
    }

    public function addParticipation(equipe $participation): self
    {
        if (!$this->participations->contains($participation)) {
            $this->participations[] = $participation;
        }

        return $this;
    }

    public function removeParticipation(equipe $participation): self
    {
        $this->participations->removeElement($participation);

        return $this;
    }


}
