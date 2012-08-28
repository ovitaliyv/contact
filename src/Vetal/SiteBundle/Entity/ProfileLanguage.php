<?php

namespace Vetal\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vetal\SiteBundle\Entity\ProfileLanguage
 *
 * @ORM\Table(name="profile_language")
 * @ORM\Entity
 */
class ProfileLanguage
{
    /**
     * @var bigint $id
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean $proficiency
     *
     * @ORM\Column(name="proficiency", type="boolean", nullable=true)
     */
    private $proficiency;

    /**
     * @var Language
     *
     * @ORM\ManyToOne(targetEntity="Language")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_id", referencedColumnName="id")
     * })
     */
    private $language;

    /**
     * @var Profile
     *
     * @ORM\ManyToOne(targetEntity="Profile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     * })
     */
    private $profile;



    /**
     * Get id
     *
     * @return bigint 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set proficiency
     *
     * @param boolean $proficiency
     */
    public function setProficiency($proficiency)
    {
        $this->proficiency = $proficiency;
    }

    /**
     * Get proficiency
     *
     * @return boolean 
     */
    public function getProficiency()
    {
        return $this->proficiency;
    }

    /**
     * Set language
     *
     * @param Vetal\SiteBundle\Entity\Language $language
     */
    public function setLanguage(\Vetal\SiteBundle\Entity\Language $language)
    {
        $this->language = $language;
    }

    /**
     * Get language
     *
     * @return Vetal\SiteBundle\Entity\Language 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set profile
     *
     * @param Vetal\SiteBundle\Entity\Profile $profile
     */
    public function setProfile(\Vetal\SiteBundle\Entity\Profile $profile)
    {
        $this->profile = $profile;
    }

    /**
     * Get profile
     *
     * @return Vetal\SiteBundle\Entity\Profile 
     */
    public function getProfile()
    {
        return $this->profile;
    }
}