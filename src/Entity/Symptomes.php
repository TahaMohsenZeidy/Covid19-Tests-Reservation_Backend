<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\SymptomesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     itemOperations={
 *          "get"={
 *              "normalization_context"={
 *                   "groups"={"get_rdvs_with_all"}
 *              }
 *         },
 *      },
 *     collectionOperations={
 *         "get",
 *         "post"
 *      }
 * )
 * @ORM\Entity(repositoryClass=SymptomesRepository::class)
 */
class Symptomes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"get_rdvs_with_all"})
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $cold;

    /**
     * @ORM\Column(type="float")
     * @Groups({"get_rdvs_with_all"})
     */
    private $fever;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"get_rdvs_with_all"})
     */
    private $cough;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"get_rdvs_with_all"})
     */
    private $fatigue;

    /**
     * @ORM\Column(type="boolean")
     */
    private $diarrhea;

    /**
     * @ORM\Column(type="boolean")
     */
    private $bleeding;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"get_rdvs_with_all"})
     */
    private $headache;

    /**
     * @ORM\Column(type="boolean")
     */
    private $muscle_pain;

    /**
     * @ORM\Column(type="boolean")
     */
    private $vomiting;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"get_rdvs_with_all"})
     */
    private $hard_breathing;

    /**
     * @ORM\Column(type="boolean")
     */
    private $abdominal_pain;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"get_rdvs_with_all"})
     */
    private $mass_gathering;

    /**
     * @ORM\Column(type="boolean")
     */
    private $case_contact;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Rdv", mappedBy="symptomes")
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

    public function getCold(): ?bool
    {
        return $this->cold;
    }

    public function setCold(bool $cold): self
    {
        $this->cold = $cold;

        return $this;
    }

    public function getFever(): ?float
    {
        return $this->fever;
    }

    public function setFever(float $fever): self
    {
        $this->fever = $fever;

        return $this;
    }

    public function getCough(): ?bool
    {
        return $this->cough;
    }

    public function setCough(bool $cough): self
    {
        $this->cough = $cough;

        return $this;
    }

    public function getFatigue(): ?bool
    {
        return $this->fatigue;
    }

    public function setFatigue(bool $fatigue): self
    {
        $this->fatigue = $fatigue;

        return $this;
    }

    public function getDiarrhea(): ?bool
    {
        return $this->diarrhea;
    }

    public function setDiarrhea(bool $diarrhea): self
    {
        $this->diarrhea = $diarrhea;

        return $this;
    }

    public function getBleeding(): ?bool
    {
        return $this->bleeding;
    }

    public function setBleeding(bool $bleeding): self
    {
        $this->bleeding = $bleeding;

        return $this;
    }

    public function getHeadache(): ?bool
    {
        return $this->headache;
    }

    public function setHeadache(bool $headache): self
    {
        $this->headache = $headache;

        return $this;
    }

    public function getMusclePain(): ?bool
    {
        return $this->muscle_pain;
    }

    public function setMusclePain(bool $muscle_pain): self
    {
        $this->muscle_pain = $muscle_pain;

        return $this;
    }

    public function getVomiting(): ?bool
    {
        return $this->vomiting;
    }

    public function setVomiting(bool $vomiting): self
    {
        $this->vomiting = $vomiting;

        return $this;
    }

    public function getHardBreathing(): ?bool
    {
        return $this->hard_breathing;
    }

    public function setHardBreathing(bool $hard_breathing): self
    {
        $this->hard_breathing = $hard_breathing;

        return $this;
    }

    public function getAbdominalPain(): ?bool
    {
        return $this->abdominal_pain;
    }

    public function setAbdominalPain(bool $abdominal_pain): self
    {
        $this->abdominal_pain = $abdominal_pain;

        return $this;
    }

    public function getMassGathering(): ?bool
    {
        return $this->mass_gathering;
    }

    public function setMassGathering(bool $mass_gathering): self
    {
        $this->mass_gathering = $mass_gathering;

        return $this;
    }

    public function getCaseContact(): ?bool
    {
        return $this->case_contact;
    }

    public function setCaseContact(bool $case_contact): self
    {
        $this->case_contact = $case_contact;

        return $this;
    }
    public function __toString()
    {
        return $this->fever;
    }

}
