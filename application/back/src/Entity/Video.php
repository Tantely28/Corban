<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VideoRepository")
 */
class Video
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $video;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Candidat", inversedBy="temoignageCandidats")
     * @ORM\JoinColumn(nullable=false)
     */
    private $candidat;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Accesvideo", mappedBy="video")
     */
    private $accesvideos;

    public function __construct()
    {
        $this->accesvideos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(string $video): self
    {
        $this->video = $video;

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
            $accesvideo->setVideo($this);
        }

        return $this;
    }

    public function removeAccesvideo(Accesvideo $accesvideo): self
    {
        if ($this->accesvideos->contains($accesvideo)) {
            $this->accesvideos->removeElement($accesvideo);
            // set the owning side to null (unless already changed)
            if ($accesvideo->getVideo() === $this) {
                $accesvideo->setVideo(null);
            }
        }

        return $this;
    }
}
