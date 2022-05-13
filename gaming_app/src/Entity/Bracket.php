<?php

namespace App\Entity;

use App\Repository\BracketRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BracketRepository::class)
 */
class Bracket
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $equipe1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $equipe2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statusTeam1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statusTeam2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEquipe1(): ?string
    {
        return $this->equipe1;
    }

    public function setEquipe1(string $equipe1): self
    {
        $this->equipe1 = $equipe1;

        return $this;
    }

    public function getEquipe2(): ?string
    {
        return $this->equipe2;
    }

    public function setEquipe2(string $equipe2): self
    {
        $this->equipe2 = $equipe2;

        return $this;
    }

    public function getStatusTeam1(): ?string
    {
        return $this->statusTeam1;
    }

    public function setStatusTeam1(string $statusTeam1): self
    {
        $this->statusTeam1 = $statusTeam1;

        return $this;
    }

    public function getStatusTeam2(): ?string
    {
        return $this->statusTeam2;
    }

    public function setStatusTeam2(string $statusTeam2): self
    {
        $this->statusTeam2 = $statusTeam2;

        return $this;
    }
}
