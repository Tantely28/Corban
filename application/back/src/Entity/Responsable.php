<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ResponsableRepository")
 */
class Responsable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="responsables")
     */
    private $client;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $responabilite;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Acces", mappedBy="responsable")
     */
    private $acces;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Accesvideo", mappedBy="responsable")
     */
    private $accesvideos;

    public function __construct()
    {
        $this->acces = new ArrayCollection();
        $this->accesvideos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getResponabilite(): ?string
    {
        return $this->responabilite;
    }

    public function setResponabilite(string $responabilite): self
    {
        $this->responabilite = $responabilite;

        return $this;
    }

    /**
     * @return Collection|Acces[]
     */
    public function getAcces(): Collection
    {
        return $this->acces;
    }

    public function addAcce(Acces $acce): self
    {
        if (!$this->acces->contains($acce)) {
            $this->acces[] = $acce;
            $acce->setResponsable($this);
        }

        return $this;
    }

    public function removeAcce(Acces $acce): self
    {
        if ($this->acces->contains($acce)) {
            $this->acces->removeElement($acce);
            // set the owning side to null (unless already changed)
            if ($acce->getResponsable() === $this) {
                $acce->setResponsable(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Accesvideo[]
     */
    public function getAccesvideos(): Collection
    {
        return $this->accesvideos;
    }

    public function addAccesvideo(Accesvideo $accesvideo): self
    {
        if (!$this->accesvideos->contains($accesvideo)) {
            $this->accesvideos[] = $accesvideo;
            $accesvideo->setResponsable($this);
        }

        return $this;
    }

    public function removeAccesvideo(Accesvideo $accesvideo): self
    {
        if ($this->accesvideos->contains($accesvideo)) {
            $this->accesvideos->removeElement($accesvideo);
            // set the owning side to null (unless already changed)
            if ($accesvideo->getResponsable() === $this) {
                $accesvideo->setResponsable(null);
            }
        }

        return $this;
    }
}
