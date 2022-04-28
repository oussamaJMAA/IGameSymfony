<?php

namespace App\Entity;

use App\Repository\TrashRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TrashRepository::class)
 */
class Trash
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
    private $senderId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $recipientId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $message;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $deletedFrom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSenderId(): ?string
    {
        return $this->senderId;
    }

    public function setSenderId(string $senderId): self
    {
        $this->senderId = $senderId;

        return $this;
    }

    public function getRecipientId(): ?string
    {
        return $this->recipientId;
    }

    public function setRecipientId(string $recipientId): self
    {
        $this->recipientId = $recipientId;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDeletedFrom(): ?int
    {
        return $this->deletedFrom;
    }

    public function setDeletedFrom(?int $deletedFrom): self
    {
        $this->deletedFrom = $deletedFrom;

        return $this;
    }
}
