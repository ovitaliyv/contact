<?php

namespace Vetal\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vetal\SiteBundle\Entity\Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity
 */
class Event
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
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var text $content
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

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
     * @var boolean $type
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;


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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param text $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return text 
     */
    public function getContent()
    {
        return $this->content;
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
     * Set type
     *
     * @param boolean $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }

}