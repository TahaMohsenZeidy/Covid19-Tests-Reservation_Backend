<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TravelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     itemOperations={"get"},
 *     collectionOperations={"get"}
 * )
 * @ORM\Entity(repositoryClass=TravelRepository::class)
 */
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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Rdv", mappedBy="travel")
     */
    private $rdv;

    public function __construct()
    {
        $this->rdv = new ArrayCollection();
    }

    //--------------Getters and Setters --------------------

    /**
     * @return Collection|Rdv[]
     */
    public function getRdv(): ?Collection
    {
        return $this->rdv;
    }
    //--------------Getters and Setters --------------------


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

    public function __toString(): string
    {
//        return date_format($this->fly_date, 'Y-m-d H:i:s');
        return $this->destination;
    }
}
