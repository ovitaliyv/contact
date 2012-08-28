<?php

namespace Vetal\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vetal\SiteBundle\Entity\Phone
 *
 * @ORM\Table(name="phone")
 * @ORM\Entity
 */
class Phone
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
     * @var string $phoneNumber
     *
     * @ORM\Column(name="phone_number", type="string", length=20, nullable=false)
     */
    private $phoneNumber;

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
     * Set phoneNumber
     *
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
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