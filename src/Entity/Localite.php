<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocaliteRepository")
 */
class Localite
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $libelet;

    public function getId()
    {
        return $this->id;
    }

    public function getLibelet(): ?string
    {
        return $this->libelet;
    }

    public function setLibelet(string $libelet): self
    {
        $this->libelet = $libelet;

        return $this;
    }
}
