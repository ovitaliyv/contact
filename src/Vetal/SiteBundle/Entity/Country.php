<?php

namespace Vetal\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vetal\SiteBundle\Entity\Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity
 */
class Country
{
    /**
     * @var boolean $id
     *
     * @ORM\Column(name="id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $shortName
     *
     * @ORM\Column(name="short_name", type="string", length=3, nullable=false)
     */
    private $shortName;



    /**
     * Get id
     *
     * @return boolean 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set shortName
     *
     * @param string $shortName
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
    }

    /**
     * Get shortName
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->shortName;
    }

}