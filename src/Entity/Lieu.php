<?php

namespace App\Entity;

use App\Repository\LieuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LieuRepository::class)]
class Lieu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $lieu = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column]
    private ?int $capacite = null;

    #[ORM\OneToMany(mappedBy: 'lieu', targetEntity: Manifestation::class)]
    private Collection $manifestation;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    public function __construct()
    {
        $this->manifestation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

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

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * @return Collection<int, Manifestation>
     */
    public function getManifestation(): Collection
    {
        return $this->manifestation;
    }

    public function addManifestation(Manifestation $manifestation): self
    {
        if (!$this->manifestation->contains($manifestation)) {
            $this->manifestation->add($manifestation);
            $manifestation->setLieu($this);
        }

        return $this;
    }

    public function removeManifestation(Manifestation $manifestation): self
    {
        if ($this->manifestation->removeElement($manifestation)) {
            // set the owning side to null (unless already changed)
            if ($manifestation->getLieu() === $this) {
                $manifestation->setLieu(null);
            }
        }

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

}
