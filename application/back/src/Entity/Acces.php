<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AccesRepository")
 */
class Acces
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Responsable", inversedBy="acces")
     */
    private $responsable;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\OffreEmplois", inversedBy="acces")
     */
    private $offre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResponsable(): ?Responsable
    {
        return $this->responsable;
    }

    public function setResponsable(?Responsable $responsable): self
    {
        $this->responsable = $responsable;

        return $this;
    }

    public function getOffre(): ?OffreEmplois
    {
        return $this->offre;
    }

    public function setOffre(?OffreEmplois $offre): self
    {
        $this->offre = $offre;

        return $this;
    }
}
