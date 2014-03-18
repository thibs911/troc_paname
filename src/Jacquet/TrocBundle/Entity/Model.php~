<?php

namespace Jacquet\TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Model
 *
 * @ORM\Table("model")
 * @ORM\Entity(repositoryClass="Jacquet\TrocBundle\Entity\ModelRepository")
 */
class Model
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
     * @ORM\Column(name="modele", type="string", length=255)
     */
    private $modele;


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
     * @ORM\OneToMany(targetEntity="Jacquet\TrocBundle\Entity\Objet", mappedBy="marque")
     * @ORM\JoinColumn(nullable=false)
     */
    private $objet;

    /**
     * Set modele
     *
     * @param string $modele
     * @return Model
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Jacquet\TrocBundle\Entity\Marque")
     * @ORM\JoinColumn(nullable=false)
     */
    private $marque;

    /**
     * @ORM\ManyToOne(targetEntity="Jacquet\TrocBundle\Entity\Type")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * Get modele
     *
     * @return string 
     */
    public function getModele()
    {
        return $this->modele;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->objet = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add objet
     *
     * @param \Jacquet\TrocBundle\Entity\Objet $objet
     * @return Model
     */
    public function addObjet(\Jacquet\TrocBundle\Entity\Objet $objet)
    {
        $this->objet[] = $objet;

        return $this;
    }

    /**
     * Remove objet
     *
     * @param \Jacquet\TrocBundle\Entity\Objet $objet
     */
    public function removeObjet(\Jacquet\TrocBundle\Entity\Objet $objet)
    {
        $this->objet->removeElement($objet);
    }

    /**
     * Get objet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set marque
     *
     * @param \Jacquet\TrocBundle\Entity\Marque $marque
     * @return Model
     */
    public function setMarque(\Jacquet\TrocBundle\Entity\Marque $marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return \Jacquet\TrocBundle\Entity\Marque 
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set type
     *
     * @param \Jacquet\TrocBundle\Entity\Type $type
     * @return Model
     */
    public function setType(\Jacquet\TrocBundle\Entity\Type $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Jacquet\TrocBundle\Entity\Type 
     */
    public function getType()
    {
        return $this->type;
    }
}
