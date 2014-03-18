<?php

namespace Jacquet\TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statut
 *
 * @ORM\Table("statut")
 * @ORM\Entity(repositoryClass="Jacquet\TrocBundle\Entity\StatutRepository")
 */
class Statut
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
     * @ORM\Column(name="nomStatut", type="string", length=255)
     */
    private $nomStatut;


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
     * Set nomStatut
     *
     * @param string $nomStatut
     * @return Statut
     */
    public function setNomStatut($nomStatut)
    {
        $this->nomStatut = $nomStatut;

        return $this;
    }

    /**
     * Get nomStatut
     *
     * @return string 
     */
    public function getNomStatut()
    {
        return $this->nomStatut;
    }
}
