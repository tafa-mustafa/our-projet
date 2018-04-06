<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProprietaireRepository")
 */
class Proprietaire
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
    private $nomComplet;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $numPiece;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $adress;

    /**
     * @ORM\Column(type="integer")
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $codebanque;

     /**
     * @ORM\Column(type="string", length=30)
     */
    private $passeword;

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

    public function getNomComplet(): ?string
    {
        return $this->nomComplet;
    }

    public function setNomComplet(string $nomComplet): self
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    public function getNumPiece(): ?string
    {
        return $this->numPiece;
    }

    public function setNumPiece(string $numPiece): self
    {
        $this->numPiece = $numPiece;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getCodebanque(): ?string
    {
        return $this->codebanque;
    }

    public function setCodebanque(string $codebanque): self
    {
        $this->codebanque = $codebanque;

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

    /**
     * Get the value of passeword
     */ 
    public function getPasseword()
    {
        return $this->passeword;
    }

    /**
     * Set the value of passeword
     *
     * @return  self
     */ 
    public function setPasseword($passeword)
    {
        $this->passeword = $passeword;

        return $this;
    }
}
