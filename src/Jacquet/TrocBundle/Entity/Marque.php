<?php

namespace Jacquet\TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marque
 *
 * @ORM\Table("marque")
 * @ORM\Entity(repositoryClass="Jacquet\TrocBundle\Entity\MarqueRepository")
 */
class Marque
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
     * @ORM\Column(name="nomMarque", type="string", length=255)
     */
    private $nomMarque;


    /**
     * @ORM\OneToMany(targetEntity="Jacquet\TrocBundle\Entity\Objet", mappedBy="marque")
     * @ORM\JoinColumn(nullable=false)
     */
    private $objet;

    /**
     * @ORM\OneToMany(targetEntity="Jacquet\TrocBundle\Entity\Model", mappedBy="model")
     * @ORM\JoinColumn(nullable=false)
     */
    private $model;


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
     * Set nomMarque
     *
     * @param string $nomMarque
     * @return Marque
     */
    public function setNomMarque($nomMarque)
    {
        $this->nomMarque = $nomMarque;

        return $this;
    }

    /**
     * Get nomMarque
     *
     * @return string 
     */
    public function getNomMarque()
    {
        return $this->nomMarque;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->objet = new \Doctrine\Common\Collections\ArrayCollection();
        $this->model = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add objet
     *
     * @param \Jacquet\TrocBundle\Entity\Objet $objet
     * @return Marque
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
     * Add model
     *
     * @param \Jacquet\TrocBundle\Entity\Model $model
     * @return Marque
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
}
