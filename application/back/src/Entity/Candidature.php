<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CandidatureRepository")
 */
class Candidature
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\OffreEmplois", inversedBy="candidatures")
     */
    private $offreEmplois;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Candidat", inversedBy="candidatures")
     */
    private $candidat;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cv;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lm;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOffreEmplois(): ?OffreEmplois
    {
        return $this->offreEmplois;
    }

    public function setOffreEmplois(?OffreEmplois $offreEmplois): self
    {
        $this->offreEmplois = $offreEmplois;

        return $this;
    }

    public function getCandidat(): ?Candidat
    {
        return $this->candidat;
    }

    public function setCandidat(?Candidat $candidat): self
    {
        $this->candidat = $candidat;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(string $cv): self
    {
        $this->cv = $cv;

        return $this;
    }

    public function getLm(): ?string
    {
        return $this->lm;
    }

    public function setLm(string $lm): self
    {
        $this->lm = $lm;

        return $this;
    }
}
