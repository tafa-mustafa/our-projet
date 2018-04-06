<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContratRepository")
 */
class Contrat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateContrat;

    /**
     * @ORM\Column(type="integer")
     */
    private $caution;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $duree;
    /**
         * @var \Client
         *
         * @ORM\ManyToOne(targetEntity="Client")
         * @ORM\JoinColumns({
         *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
         * })
         */
        private $client;

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

    public function getDateContrat(): ?\DateTimeInterface
    {
        return $this->dateContrat;
    }

    public function setDateContrat(\DateTimeInterface $dateContrat): self
    {
        $this->dateContrat = $dateContrat;

        return $this;
    }

    public function getCaution(): ?int
    {
        return $this->caution;
    }

    public function setCaution(int $caution): self
    {
        $this->caution = $caution;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

        /**
         * Get the value of client
         *
         * @return  \Client
         */ 
        public function getClient()
        {
                return $this->client;
        }

        /**
         * Set the value of client
         *
         * @param  \Client  $client
         *
         * @return  self
         */ 
        public function setClient(\Client $client)
        {
                $this->client = $client;

                return $this;
        }
}
