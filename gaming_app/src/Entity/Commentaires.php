<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaires
 *
 * @ORM\Table(name="commentaires")
 * @ORM\Entity
 */
class Commentaires
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_com", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCom;

    /**
     * @var string
     *
     * @ORM\Column(name="description_com", type="text", length=65535, nullable=false)
     */
    private $descriptionCom;

    public function getIdCom(): ?int
    {
        return $this->idCom;
    }

    public function getDescriptionCom(): ?string
    {
        return $this->descriptionCom;
    }

    public function setDescriptionCom(string $descriptionCom): self
    {
        $this->descriptionCom = $descriptionCom;

        return $this;
    }


}
