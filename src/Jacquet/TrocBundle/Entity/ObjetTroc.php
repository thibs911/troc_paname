<?php

namespace Jacquet\TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjetTroc
 *
 * @ORM\Table("objetTroc")
 * @ORM\Entity(repositoryClass="Jacquet\TrocBundle\Entity\ObjetTrocRepository")
 */
class ObjetTroc
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
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;


    /**
     * @ORM\ManyToOne(targetEntity="Jacquet\TrocBundle\Entity\Objet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $objet;


    /**
     * @ORM\OneToMany(targetEntity="Jacquet\UtilisateurBundle\Entity\Vote", mappedBy="objetTroc")
     * @ORM\JoinColumn(nullable=false)
     */
    private $vote;


    /**
     * @ORM\ManyToOne(targetEntity="Jacquet\UtilisateurBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;



    /**
     * @ORM\ManyToOne(targetEntity="Jacquet\UtilisateurBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $vendeur;


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
     * Set titre
     *
     * @param string $titre
     * @return ObjetTroc
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return ObjetTroc
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return ObjetTroc
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }


    /**
     * @return mixed
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * @return mixed
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * @return mixed
     */
    public function getVote()
    {
        return $this->vote;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vote = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set objet
     *
     * @param \Jacquet\TrocBundle\Entity\Objet $objet
     * @return ObjetTroc
     */
    public function setObjet(\Jacquet\TrocBundle\Entity\Objet $objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Add vote
     *
     * @param \Jacquet\UtilisateurBundle\Entity\Vote $vote
     * @return ObjetTroc
     */
    public function addVote(\Jacquet\UtilisateurBundle\Entity\Vote $vote)
    {
        $this->vote[] = $vote;

        return $this;
    }

    /**
     * Remove vote
     *
     * @param \Jacquet\UtilisateurBundle\Entity\Vote $vote
     */
    public function removeVote(\Jacquet\UtilisateurBundle\Entity\Vote $vote)
    {
        $this->vote->removeElement($vote);
    }

    /**
     * Set utilisateur
     *
     * @param \Jacquet\UtilisateurBundle\Entity\Utilisateur $utilisateur
     * @return ObjetTroc
     */
    public function setUtilisateur(\Jacquet\UtilisateurBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Set vendeur
     *
     * @param \Jacquet\UtilisateurBundle\Entity\Utilisateur $vendeur
     * @return ObjetTroc
     */
    public function setVendeur(\Jacquet\UtilisateurBundle\Entity\Utilisateur $vendeur = null)
    {
        $this->vendeur = $vendeur;

        return $this;
    }

    /**
     * Get vendeur
     *
     * @return \Jacquet\UtilisateurBundle\Entity\Utilisateur 
     */
    public function getVendeur()
    {
        return $this->vendeur;
    }
}
