<?php

namespace Vetal\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vetal\SiteBundle\Entity\LiveJournal
 *
 * @ORM\Table(name="live_journal")
 * @ORM\Entity
 */
class LiveJournal
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
     * @var text $event
     *
     * @ORM\Column(name="event", type="text", nullable=false)
     */
    private $event;

    /**
     * @var date $eventDate
     *
     * @ORM\Column(name="event_date", type="date", nullable=true)
     */
    private $eventDate;

    /**
     * @var time $eventTime
     *
     * @ORM\Column(name="event_time", type="time", nullable=true)
     */
    private $eventTime;


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
     * Set event
     *
     * @param text $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    /**
     * Get event
     *
     * @return text 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set eventDate
     *
     * @param date $eventDate
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;
    }

    /**
     * Get eventDate
     *
     * @return date 
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Set eventTime
     *
     * @param time $eventTime
     */
    public function setEventTime($eventTime)
    {
        $this->eventTime = $eventTime;
    }

    /**
     * Get eventTime
     *
     * @return time 
     */
    public function getEventTime()
    {
        return $this->eventTime;
    }

    /**
     * Set deletedAt
     *
     * @param datetime $deletedAt
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;
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