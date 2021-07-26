<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\FilmRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=FilmRepository::class)
 */
class Film
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull(message="Veuillez entrer le titre")
     */
    private $titre;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotNull(message="Veuillez entrer la description")
     */
    private $desctription;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull(message="Veuillez entrer le nom du réalisateur")
     */
    private $realisateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDesctription(): ?string
    {
        return $this->desctription;
    }

    public function setDesctription(string $desctription): self
    {
        $this->desctription = $desctription;

        return $this;
    }

    public function getRealisateur(): ?string
    {
        return $this->realisateur;
    }

    public function setRealisateur(string $realisateur): self
    {
        $this->realisateur = $realisateur;

        return $this;
    }
}
