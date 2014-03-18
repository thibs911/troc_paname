<?php

namespace Jacquet\TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objet
 *
 * @ORM\Table("objet")
 * @ORM\Entity(repositoryClass="Jacquet\TrocBundle\Entity\ObjetRepository")
 */
class Objet
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
     * @ORM\OneToMany(targetEntity="Jacquet\TrocBundle\Entity\ObjetTroc", mappedBy="objet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $objetTroc;


    /**
     * @ORM\ManyToOne(targetEntity="Jacquet\TrocBundle\Entity\Type")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="Jacquet\TrocBundle\Entity\Marque")
     * @ORM\JoinColumn(nullable=false)
     */
    private $marque;

    /**
     * @ORM\ManyToOne(targetEntity="Jacquet\TrocBundle\Entity\Model")
     * @ORM\JoinColumn(nullable=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;



    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

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
     * Set reference
     *
     * @param string $reference
     * @return Objet
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Objet
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
     * Constructor
     */
    public function __construct()
    {
        $this->objetTroc = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add objetTroc
     *
     * @param \Jacquet\TrocBundle\Entity\ObjetTroc $objetTroc
     * @return Objet
     */
    public function addObjetTroc(\Jacquet\TrocBundle\Entity\ObjetTroc $objetTroc)
    {
        $this->objetTroc[] = $objetTroc;

        return $this;
    }

    /**
     * Remove objetTroc
     *
     * @param \Jacquet\TrocBundle\Entity\ObjetTroc $objetTroc
     */
    public function removeObjetTroc(\Jacquet\TrocBundle\Entity\ObjetTroc $objetTroc)
    {
        $this->objetTroc->removeElement($objetTroc);
    }

    /**
     * Get objetTroc
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getObjetTroc()
    {
        return $this->objetTroc;
    }

    /**
     * Set type
     *
     * @param \Jacquet\TrocBundle\Entity\Type $type
     * @return Objet
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

    /**
     * Set marque
     *
     * @param \Jacquet\TrocBundle\Entity\Marque $marque
     * @return Objet
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
     * Set model
     *
     * @param \Jacquet\TrocBundle\Entity\Model $model
     * @return Objet
     */
    public function setModel(\Jacquet\TrocBundle\Entity\Model $model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return \Jacquet\TrocBundle\Entity\Model 
     */
    public function getModel()
    {
        return $this->model;
    }
}
