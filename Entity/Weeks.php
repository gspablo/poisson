<?php

namespace bet\resultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Weeks
 *
 * @ORM\Table(name="weeks")
 * @ORM\Entity
 */
class Weeks
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="datetime", nullable=false)
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="datetime", nullable=false)
     */
    private $dateEnd;

    /**
     * @var boolean
     *
     * @ORM\Column(name="poisson_done", type="boolean", nullable=false)
     */
    private $poissonDone;

    /**
     * @var integer
     *
     * @ORM\Column(name="week_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $weekId;

    /**
     * @var integer
     *
     * @ORM\Column(name="league_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $leagueId;



    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return Weeks
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    
        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime 
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return Weeks
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    
        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set poissonDone
     *
     * @param boolean $poissonDone
     * @return Weeks
     */
    public function setPoissonDone($poissonDone)
    {
        $this->poissonDone = $poissonDone;
    
        return $this;
    }

    /**
     * Get poissonDone
     *
     * @return boolean 
     */
    public function getPoissonDone()
    {
        return $this->poissonDone;
    }

    /**
     * Set weekId
     *
     * @param integer $weekId
     * @return Weeks
     */
    public function setWeekId($weekId)
    {
        $this->weekId = $weekId;
    
        return $this;
    }

    /**
     * Get weekId
     *
     * @return integer 
     */
    public function getWeekId()
    {
        return $this->weekId;
    }

    /**
     * Set leagueId
     *
     * @param integer $leagueId
     * @return Weeks
     */
    public function setLeagueId($leagueId)
    {
        $this->leagueId = $leagueId;
    
        return $this;
    }

    /**
     * Get leagueId
     *
     * @return integer 
     */
    public function getLeagueId()
    {
        return $this->leagueId;
    }
}