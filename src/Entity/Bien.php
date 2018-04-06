<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BienRepository")
 */
class Bien
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
    private $nomBien;

    /**
     * @ORM\Column(type="boolean")
     */
    private $etat;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $description;

 /**
     * @ORM\Column(type="integer")
     */
    private $prixLocation;

    /**
    * @var \Bien
    *
    * @ORM\ManyToOne(targetEntity="Bien")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="bien_parent_id", referencedColumnName="id")
    * })
    */
   private $bienParent;

   /**
    * @var \Localite
    *
    * @ORM\ManyToOne(targetEntity="Localite")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="localite_id", referencedColumnName="id")
    * })
    */
   private $localite;

   /**
    * @var \TypeBien
    *
    * @ORM\ManyToOne(targetEntity="TypeBien")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="type_bien_id", referencedColumnName="id")
    * })
    */
   private $typeBien;


    public function getId()
    {
        return $this->id;
    }

    public function getNomBien(): ?string
    {
        return $this->nomBien;
    }

    public function setNomBien(string $nomBien): self
    {
        $this->nomBien = $nomBien;

        return $this;
    }

    public function getEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of prixLocation
     */ 
    public function getPrixLocation()
    {
        return $this->prixLocation;
    }

    /**
     * Set the value of prixLocation
     *
     * @return  self
     */ 
    public function setPrixLocation($prixLocation)
    {
        $this->prixLocation = $prixLocation;

        return $this;
    }
}
