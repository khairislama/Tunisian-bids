<?php

namespace App\Entity;

use App\Repository\MessagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MessagesRepository::class)
 */
class Message
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_user_envoie;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ticket", inversedBy="messages")
     */
    private $ticket;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $message;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $date_envoie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUserEnvoie(): ?int
    {
        return $this->id_user_envoie;
    }

    public function setIdUserEnvoie(int $id_user_envoie): self
    {
        $this->id_user_envoie = $id_user_envoie;

        return $this;
    }

    public function getTicket(): ?Ticket
    {
        return $this->ticket;
    }

    public function setTicket(Ticket $ticket): self
    {
        $this->ticket = $ticket;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;
        $this->date_envoie = new \DateTime('now');
        return $this;
    }
}
