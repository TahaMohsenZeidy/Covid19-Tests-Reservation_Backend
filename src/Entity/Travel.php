<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TravelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TravelRepository::class)
 */
#[ApiResource]
class Travel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fly_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $destination;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFlyDate(): ?\DateTimeInterface
    {
        return $this->fly_date;
    }

    public function setFlyDate(\DateTimeInterface $fly_date): self
    {
        $this->fly_date = $fly_date;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }
}