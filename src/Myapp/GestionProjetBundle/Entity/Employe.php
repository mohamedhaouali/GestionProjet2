<?php

namespace Myapp\GestionProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employe
 *
 * @ORM\Table(name="employe")
 * @ORM\Entity(repositoryClass="Myapp\GestionProjetBundle\Repository\EmployeRepository")
 */
class Employe {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @ORM\ManyToOne(targetEntity="Departement")
     */
    private $departement;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Employe
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Employe
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Employe
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Employe
     */
    public function setSexe($sexe) {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe() {
        return $this->sexe;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Employe
     */
    public function setPays($pays) {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays() {
        return $this->pays;
    }


    /**
     * Set departement
     *
     * @param \Myapp\GestionProjetBundle\Entity\Departement $departement
     *
     * @return Employe
     */
    public function setDepartement(\Myapp\GestionProjetBundle\Entity\Departement $departement = null)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \Myapp\GestionProjetBundle\Entity\Departement
     */
    public function getDepartement()
    {
        return $this->departement;
    }
    
    public function __toString()
    {
        return $this->nom.' '.$this->prenom; 
    }
    
}

