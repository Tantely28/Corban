<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CandidatRepository")
 */
class Candidat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="date")
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $situationFamilier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $sex;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Video", mappedBy="candidat")
     */
    private $temoignageCandidats;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\CV", mappedBy="candidat", cascade={"persist", "remove"})
     */
    private $cv;

    public function __construct()
    {
        $this->temoignageCandidats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getSituationFamilier(): ?string
    {
        return $this->situationFamilier;
    }

    public function setSituationFamilier(string $situationFamilier): self
    {
        $this->situationFamilier = $situationFamilier;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(string $sex): self
    {
        $this->sex = $sex;

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

    /**
     * @return Collection|Video[]
     */
    public function getTemoignageCandidats(): Collection
    {
        return $this->temoignageCandidats;
    }

    public function addTemoignageCandidat(Video $temoignageCandidat): self
    {
        if (!$this->temoignageCandidats->contains($temoignageCandidat)) {
            $this->temoignageCandidats[] = $temoignageCandidat;
            $temoignageCandidat->setCandidat($this);
        }

        return $this;
    }

    public function removeTemoignageCandidat(Video $temoignageCandidat): self
    {
        if ($this->temoignageCandidats->contains($temoignageCandidat)) {
            $this->temoignageCandidats->removeElement($temoignageCandidat);
            // set the owning side to null (unless already changed)
            if ($temoignageCandidat->getCandidat() === $this) {
                $temoignageCandidat->setCandidat(null);
            }
        }

        return $this;
    }

    public function getCv(): ?CV
    {
        return $this->cv;
    }

    public function setCv(?CV $cv): self
    {
        $this->cv = $cv;

        // set (or unset) the owning side of the relation if necessary
        $newCandidat = $cv === null ? null : $this;
        if ($newCandidat !== $cv->getCandidat()) {
            $cv->setCandidat($newCandidat);
        }

        return $this;
    }
}
