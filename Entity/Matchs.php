<?php

namespace bet\resultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matchs
 *
 * @ORM\Table(name="matchs")
 * @ORM\Entity
 */
class Matchs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="league_id", type="integer", nullable=true)
     */
    private $leagueId;

    /**
     * @var string
     *
     * @ORM\Column(name="m_week", type="string", length=50, nullable=true)
     */
    private $mWeek;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="m_date", type="datetime", nullable=true)
     */
    private $mDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="h_team_id", type="integer", nullable=true)
     */
    private $hTeamId;

    /**
     * @var integer
     *
     * @ORM\Column(name="h_goals", type="integer", nullable=true)
     */
    private $hGoals;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_team_id", type="integer", nullable=true)
     */
    private $aTeamId;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_goals", type="integer", nullable=true)
     */
    private $aGoals;

    /**
     * @var integer
     *
     * @ORM\Column(name="match_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matchId;



    /**
     * Set leagueId
     *
     * @param integer $leagueId
     * @return Matchs
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

    /**
     * Set mWeek
     *
     * @param string $mWeek
     * @return Matchs
     */
    public function setMWeek($mWeek)
    {
        $this->mWeek = $mWeek;
    
        return $this;
    }

    /**
     * Get mWeek
     *
     * @return string 
     */
    public function getMWeek()
    {
        return $this->mWeek;
    }

    /**
     * Set mDate
     *
     * @param \DateTime $mDate
     * @return Matchs
     */
    public function setMDate($mDate)
    {
        $this->mDate = $mDate;
    
        return $this;
    }

    /**
     * Get mDate
     *
     * @return \DateTime 
     */
    public function getMDate()
    {
        return $this->mDate;
    }

    /**
     * Set hTeamId
     *
     * @param integer $hTeamId
     * @return Matchs
     */
    public function setHTeamId($hTeamId)
    {
        $this->hTeamId = $hTeamId;
    
        return $this;
    }

    /**
     * Get hTeamId
     *
     * @return integer 
     */
    public function getHTeamId()
    {
        return $this->hTeamId;
    }

    /**
     * Set hGoals
     *
     * @param integer $hGoals
     * @return Matchs
     */
    public function setHGoals($hGoals)
    {
        $this->hGoals = $hGoals;
    
        return $this;
    }

    /**
     * Get hGoals
     *
     * @return integer 
     */
    public function getHGoals()
    {
        return $this->hGoals;
    }

    /**
     * Set aTeamId
     *
     * @param integer $aTeamId
     * @return Matchs
     */
    public function setATeamId($aTeamId)
    {
        $this->aTeamId = $aTeamId;
    
        return $this;
    }

    /**
     * Get aTeamId
     *
     * @return integer 
     */
    public function getATeamId()
    {
        return $this->aTeamId;
    }

    /**
     * Set aGoals
     *
     * @param integer $aGoals
     * @return Matchs
     */
    public function setAGoals($aGoals)
    {
        $this->aGoals = $aGoals;
    
        return $this;
    }

    /**
     * Get aGoals
     *
     * @return integer 
     */
    public function getAGoals()
    {
        return $this->aGoals;
    }

    /**
     * Get matchId
     *
     * @return integer 
     */
    public function getMatchId()
    {
        return $this->matchId;
    }
}