<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 */
class Image
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="blob")
     */
    private $image;

    /**
    * @var \Bien
    *
    * @ORM\ManyToOne(targetEntity="Bien")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="bien_id", referencedColumnName="id")
    * })
    */
   private $bien;


    public function getId()
    {
        return $this->id;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

   /**
    * Get the value of bien
    *
    * @return  \Bien
    */ 
   public function getBien()
   {
      return $this->bien;
   }

   /**
    * Set the value of bien
    *
    * @param  \Bien  $bien
    *
    * @return  self
    */ 
   public function setBien(\Bien $bien)
   {
      $this->bien = $bien;

      return $this;
   }
}
