<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table(name="game", uniqueConstraints={@ORM\UniqueConstraint(name="game_name", columns={"game_name"})})
 * @ORM\Entity
 */
class Game
{
    /**
     * @var int
     *
     * @ORM\Column(name="game_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gameId;

    /**
     * @var string
     *
     * @ORM\Column(name="game_name", type="string", length=30, nullable=false)
     */
    private $gameName;

    /**
     * @var int
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     */
    private $categoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="game_description", type="string", length=100, nullable=false)
     */
    private $gameDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="game_link", type="string", length=100, nullable=false)
     */
    private $gameLink;

    /**
     * @var string
     *
     * @ORM\Column(name="game_vid", type="string", length=100, nullable=false)
     */
    private $gameVid;

    /**
     * @var string
     *
     * @ORM\Column(name="game_addDate", type="string", length=20, nullable=false)
     */
    private $gameAdddate;

    public function getGameId(): ?int
    {
        return $this->gameId;
    }

    public function getGameName(): ?string
    {
        return $this->gameName;
    }

    public function setGameName(string $gameName): self
    {
        $this->gameName = $gameName;

        return $this;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getGameDescription(): ?string
    {
        return $this->gameDescription;
    }

    public function setGameDescription(string $gameDescription): self
    {
        $this->gameDescription = $gameDescription;

        return $this;
    }

    public function getGameLink(): ?string
    {
        return $this->gameLink;
    }

    public function setGameLink(string $gameLink): self
    {
        $this->gameLink = $gameLink;

        return $this;
    }

    public function getGameVid(): ?string
    {
        return $this->gameVid;
    }

    public function setGameVid(string $gameVid): self
    {
        $this->gameVid = $gameVid;

        return $this;
    }

    public function getGameAdddate(): ?string
    {
        return $this->gameAdddate;
    }

    public function setGameAdddate(string $gameAdddate): self
    {
        $this->gameAdddate = $gameAdddate;

        return $this;
    }


}
