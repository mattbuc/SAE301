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

    #[ORM\Column(length: 255)]
    private ?string $acces_libre = null;

    #[ORM\Column(length: 255)]
    private ?string $acces_handicape = null;

    #[ORM\Column(length: 255)]
    private ?string $reservation = null;

    #[ORM\Column(length: 255)]
    private ?string $jeune_public = null;

    #[ORM\Column(length: 255)]
    private ?string $organisateur = null;

    #[ORM\Column(length: 255)]
    private ?string $web = null;

    public function __construct()
    {
        $this->manifestation = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->lieu;
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

    public function getAccesLibre(): ?string
    {
        return $this->acces_libre;
    }

    public function setAccesLibre(string $acces_libre): self
    {
        $this->acces_libre = $acces_libre;

        return $this;
    }

    public function getAccesHandicape(): ?string
    {
        return $this->acces_handicape;
    }

    public function setAccesHandicape(string $acces_handicape): self
    {
        $this->acces_handicape = $acces_handicape;

        return $this;
    }

    public function getReservation(): ?string
    {
        return $this->reservation;
    }

    public function setReservation(string $reservation): self
    {
        $this->reservation = $reservation;

        return $this;
    }

    public function getJeunePublic(): ?string
    {
        return $this->jeune_public;
    }

    public function setJeunePublic(string $jeune_public): self
    {
        $this->jeune_public = $jeune_public;

        return $this;
    }

    public function getOrganisateur(): ?string
    {
        return $this->organisateur;
    }

    public function setOrganisateur(string $organisateur): self
    {
        $this->organisateur = $organisateur;

        return $this;
    }

    public function getWeb(): ?string
    {
        return $this->web;
    }

    public function setWeb(string $web): self
    {
        $this->web = $web;

        return $this;
    }

}
