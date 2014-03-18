<?php

namespace Jacquet\TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Troc
 *
 * @ORM\Table("troc")
 * @ORM\Entity(repositoryClass="Jacquet\TrocBundle\Entity\TrocRepository")
 */
class Troc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * @ORM\ManyToOne(targetEntity="Jacquet\UtilisateurBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;

    /**
     * @ORM\ManyToOne(targetEntity="Jacquet\TrocBundle\Entity\ObjetTroc")
     * @ORM\JoinColumn(nullable=false)
     */
    private $objetTroc;

    /**
     * @ORM\ManyToOne(targetEntity="Jacquet\TrocBundle\Entity\Statut")
     * @ORM\JoinColumn(nullable=false)
     */
    private $statut;

    /**
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }






    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Troc
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set utilisateur
     *
     * @param \Jacquet\UtilisateurBundle\Entity\Utilisateur $utilisateur
     * @return Troc
     */
    public function setUtilisateur(\Jacquet\UtilisateurBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Jacquet\UtilisateurBundle\Entity\Utilisateur 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set objetTroc
     *
     * @param \Jacquet\TrocBundle\Entity\ObjetTroc $objetTroc
     * @return Troc
     */
    public function setObjetTroc(\Jacquet\TrocBundle\Entity\ObjetTroc $objetTroc)
    {
        $this->objetTroc = $objetTroc;

        return $this;
    }

    /**
     * Get objetTroc
     *
     * @return \Jacquet\TrocBundle\Entity\ObjetTroc 
     */
    public function getObjetTroc()
    {
        return $this->objetTroc;
    }

    /**
     * Set statut
     *
     * @param \Jacquet\TrocBundle\Entity\Statut $statut
     * @return Troc
     */
    public function setStatut(\Jacquet\TrocBundle\Entity\Statut $statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return \Jacquet\TrocBundle\Entity\Statut 
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
