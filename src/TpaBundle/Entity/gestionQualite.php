<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * gestionQualite
 *
 * @ORM\Table(name="gestion_qualite")
 * @ORM\Entity(repositoryClass="TpaBundle\Repository\gestionQualiteRepository")
 */
class gestionQualite
{
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
     * @ORM\Column(name="systemGesQual", type="string", length=3, nullable=true)
     */
    private $systemGesQual;

    /**
     * @var string
     *
     * @ORM\Column(name="gestionInterne", type="string", length=3, nullable=true)
     */
    private $gestionInterne;

    /**
     * @var string
     *
     * @ORM\Column(name="consultant", type="string", length=3, nullable=true)
     */
    private $consultant;

    /**
     * @var string
     *
     * @ORM\Column(name="autre", type="string", length=3, nullable=true)
     */
    private $autre;

    /**
     * @var string
     *
     * @ORM\Column(name="noteAutre", type="string", length=25, nullable=true)
     */
    private $noteAutre;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set systemGesQual
     *
     * @param string $systemGesQual
     *
     * @return gestionQualite
     */
    public function setSystemGesQual($systemGesQual)
    {
        $this->systemGesQual = $systemGesQual;

        return $this;
    }

    /**
     * Get systemGesQual
     *
     * @return string
     */
    public function getSystemGesQual()
    {
        return $this->systemGesQual;
    }

    /**
     * Set gestionInterne
     *
     * @param string $gestionInterne
     *
     * @return gestionQualite
     */
    public function setGestionInterne($gestionInterne)
    {
        $this->gestionInterne = $gestionInterne;

        return $this;
    }

    /**
     * Get gestionInterne
     *
     * @return string
     */
    public function getGestionInterne()
    {
        return $this->gestionInterne;
    }

    /**
     * Set consultant
     *
     * @param string $consultant
     *
     * @return gestionQualite
     */
    public function setConsultant($consultant)
    {
        $this->consultant = $consultant;

        return $this;
    }

    /**
     * Get consultant
     *
     * @return string
     */
    public function getConsultant()
    {
        return $this->consultant;
    }

    /**
     * Set autre
     *
     * @param string $autre
     *
     * @return gestionQualite
     */
    public function setAutre($autre)
    {
        $this->autre = $autre;

        return $this;
    }

    /**
     * Get autre
     *
     * @return string
     */
    public function getAutre()
    {
        return $this->autre;
    }

    /**
     * Set noteAutre
     *
     * @param string $noteAutre
     *
     * @return gestionQualite
     */
    public function setNoteAutre($noteAutre)
    {
        $this->noteAutre = $noteAutre;

        return $this;
    }

    /**
     * Get noteAutre
     *
     * @return string
     */
    public function getNoteAutre()
    {
        return $this->noteAutre;
    }
}
