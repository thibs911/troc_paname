<?php

namespace Jacquet\TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table("type")
 * @ORM\Entity(repositoryClass="Jacquet\TrocBundle\Entity\TypeRepository")
 */
class Type
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
     * @ORM\Column(name="nomType", type="string", length=255)
     */
    private $nomType;


    /**
     * @ORM\OneToMany(targetEntity="Jacquet\TrocBundle\Entity\Model", mappedBy="type")
     * @ORM\JoinColumn(nullable=false)
     */
    private $model;

    /**
     * @ORM\OneToMany(targetEntity="Jacquet\TrocBundle\Entity\Objet", mappedBy="type")
     * @ORM\JoinColumn(nullable=false)
     */
    private $objet;

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
     * Set nomType
     *
     * @param string $nomType
     * @return Type
     */
    public function setNomType($nomType)
    {
        $this->nomType = $nomType;

        return $this;
    }

    /**
     * Get nomType
     *
     * @return string 
     */
    public function getNomType()
    {
        return $this->nomType;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->model = new \Doctrine\Common\Collections\ArrayCollection();
        $this->objet = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add model
     *
     * @param \Jacquet\TrocBundle\Entity\Model $model
     * @return Type
     */
    public function addModel(\Jacquet\TrocBundle\Entity\Model $model)
    {
        $this->model[] = $model;

        return $this;
    }

    /**
     * Remove model
     *
     * @param \Jacquet\TrocBundle\Entity\Model $model
     */
    public function removeModel(\Jacquet\TrocBundle\Entity\Model $model)
    {
        $this->model->removeElement($model);
    }

    /**
     * Get model
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Add objet
     *
     * @param \Jacquet\TrocBundle\Entity\Objet $objet
     * @return Type
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
}
