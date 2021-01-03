<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TicketRepository::class)
 */
class Ticket
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
     * @ORM\Column(type="integer")
     */
    private $id_user_reception;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $object;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Message", mappedBy="ticket")
     */
    private $message;


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

    public function getIdUserReception(): ?int
    {
        return $this->id_user_reception;
    }

    public function setIdUserReception(int $id_user_reception): self
    {
        $this->id_user_reception = $id_user_reception;

        return $this;
    }

    public function getObject(): ?string
    {
        return $this->object;
    }

    public function setObject(string $object): self
    {
        $this->object = $object;

        return $this;
    }

    public function __construct()
    {
        $this->message = new ArrayCollection();
    }

    /**
     * @return Collection|Message[]
     */
    public function getMessage(): Collection
    {
        return $this->message;
    }


}
