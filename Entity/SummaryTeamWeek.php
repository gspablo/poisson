<?php

namespace bet\resultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SummaryTeamWeek
 *
 * @ORM\Table(name="summary_team_week")
 * @ORM\Entity
 */
class SummaryTeamWeek
{
    /**
     * @var integer
     *
     * @ORM\Column(name="h_Games", type="integer", nullable=true)
     */
    private $hGames;

    /**
     * @var integer
     *
     * @ORM\Column(name="h_Goals_for", type="integer", nullable=true)
     */
    private $hGoalsFor;

    /**
     * @var float
     *
     * @ORM\Column(name="h_Average_goals_for", type="float", nullable=true)
     */
    private $hAverageGoalsFor;

    /**
     * @var integer
     *
     * @ORM\Column(name="h_Goals_aga", type="integer", nullable=true)
     */
    private $hGoalsAga;

    /**
     * @var float
     *
     * @ORM\Column(name="h_Average_goals_aga", type="float", nullable=true)
     */
    private $hAverageGoalsAga;

    /**
     * @var float
     *
     * @ORM\Column(name="h_Attack_strength", type="float", nullable=true)
     */
    private $hAttackStrength;

    /**
     * @var float
     *
     * @ORM\Column(name="h_Defensive_strength", type="float", nullable=true)
     */
    private $hDefensiveStrength;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_Games", type="integer", nullable=true)
     */
    private $aGames;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_Goals_for", type="integer", nullable=true)
     */
    private $aGoalsFor;

    /**
     * @var float
     *
     * @ORM\Column(name="a_Average_goals_for", type="float", nullable=true)
     */
    private $aAverageGoalsFor;

    /**
     * @var integer
     *
     * @ORM\Column(name="a_Goals_aga", type="integer", nullable=true)
     */
    private $aGoalsAga;

    /**
     * @var float
     *
     * @ORM\Column(name="a_Average_goals_aga", type="float", nullable=true)
     */
    private $aAverageGoalsAga;

    /**
     * @var float
     *
     * @ORM\Column(name="a_Attack_strength", type="float", nullable=true)
     */
    private $aAttackStrength;

    /**
     * @var float
     *
     * @ORM\Column(name="a_Defensive_strength", type="float", nullable=true)
     */
    private $aDefensiveStrength;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_summary", type="boolean", nullable=true)
     */
    private $isSummary;

    /**
     * @var integer
     *
     * @ORM\Column(name="team_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $teamId;

    /**
     * @var integer
     *
     * @ORM\Column(name="week", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $week;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;



    /**
     * Set hGames
     *
     * @param integer $hGames
     * @return SummaryTeamWeek
     */
    public function setHGames($hGames)
    {
        $this->hGames = $hGames;
    
        return $this;
    }

    /**
     * Get hGames
     *
     * @return integer 
     */
    public function getHGames()
    {
        return $this->hGames;
    }

    /**
     * Set hGoalsFor
     *
     * @param integer $hGoalsFor
     * @return SummaryTeamWeek
     */
    public function setHGoalsFor($hGoalsFor)
    {
        $this->hGoalsFor = $hGoalsFor;
    
        return $this;
    }

    /**
     * Get hGoalsFor
     *
     * @return integer 
     */
    public function getHGoalsFor()
    {
        return $this->hGoalsFor;
    }

    /**
     * Set hAverageGoalsFor
     *
     * @param float $hAverageGoalsFor
     * @return SummaryTeamWeek
     */
    public function setHAverageGoalsFor($hAverageGoalsFor)
    {
        $this->hAverageGoalsFor = $hAverageGoalsFor;
    
        return $this;
    }

    /**
     * Get hAverageGoalsFor
     *
     * @return float 
     */
    public function getHAverageGoalsFor()
    {
        return $this->hAverageGoalsFor;
    }

    /**
     * Set hGoalsAga
     *
     * @param integer $hGoalsAga
     * @return SummaryTeamWeek
     */
    public function setHGoalsAga($hGoalsAga)
    {
        $this->hGoalsAga = $hGoalsAga;
    
        return $this;
    }

    /**
     * Get hGoalsAga
     *
     * @return integer 
     */
    public function getHGoalsAga()
    {
        return $this->hGoalsAga;
    }

    /**
     * Set hAverageGoalsAga
     *
     * @param float $hAverageGoalsAga
     * @return SummaryTeamWeek
     */
    public function setHAverageGoalsAga($hAverageGoalsAga)
    {
        $this->hAverageGoalsAga = $hAverageGoalsAga;
    
        return $this;
    }

    /**
     * Get hAverageGoalsAga
     *
     * @return float 
     */
    public function getHAverageGoalsAga()
    {
        return $this->hAverageGoalsAga;
    }

    /**
     * Set hAttackStrength
     *
     * @param float $hAttackStrength
     * @return SummaryTeamWeek
     */
    public function setHAttackStrength($hAttackStrength)
    {
        $this->hAttackStrength = $hAttackStrength;
    
        return $this;
    }

    /**
     * Get hAttackStrength
     *
     * @return float 
     */
    public function getHAttackStrength()
    {
        return $this->hAttackStrength;
    }

    /**
     * Set hDefensiveStrength
     *
     * @param float $hDefensiveStrength
     * @return SummaryTeamWeek
     */
    public function setHDefensiveStrength($hDefensiveStrength)
    {
        $this->hDefensiveStrength = $hDefensiveStrength;
    
        return $this;
    }

    /**
     * Get hDefensiveStrength
     *
     * @return float 
     */
    public function getHDefensiveStrength()
    {
        return $this->hDefensiveStrength;
    }

    /**
     * Set aGames
     *
     * @param integer $aGames
     * @return SummaryTeamWeek
     */
    public function setAGames($aGames)
    {
        $this->aGames = $aGames;
    
        return $this;
    }

    /**
     * Get aGames
     *
     * @return integer 
     */
    public function getAGames()
    {
        return $this->aGames;
    }

    /**
     * Set aGoalsFor
     *
     * @param integer $aGoalsFor
     * @return SummaryTeamWeek
     */
    public function setAGoalsFor($aGoalsFor)
    {
        $this->aGoalsFor = $aGoalsFor;
    
        return $this;
    }

    /**
     * Get aGoalsFor
     *
     * @return integer 
     */
    public function getAGoalsFor()
    {
        return $this->aGoalsFor;
    }

    /**
     * Set aAverageGoalsFor
     *
     * @param float $aAverageGoalsFor
     * @return SummaryTeamWeek
     */
    public function setAAverageGoalsFor($aAverageGoalsFor)
    {
        $this->aAverageGoalsFor = $aAverageGoalsFor;
    
        return $this;
    }

    /**
     * Get aAverageGoalsFor
     *
     * @return float 
     */
    public function getAAverageGoalsFor()
    {
        return $this->aAverageGoalsFor;
    }

    /**
     * Set aGoalsAga
     *
     * @param integer $aGoalsAga
     * @return SummaryTeamWeek
     */
    public function setAGoalsAga($aGoalsAga)
    {
        $this->aGoalsAga = $aGoalsAga;
    
        return $this;
    }

    /**
     * Get aGoalsAga
     *
     * @return integer 
     */
    public function getAGoalsAga()
    {
        return $this->aGoalsAga;
    }

    /**
     * Set aAverageGoalsAga
     *
     * @param float $aAverageGoalsAga
     * @return SummaryTeamWeek
     */
    public function setAAverageGoalsAga($aAverageGoalsAga)
    {
        $this->aAverageGoalsAga = $aAverageGoalsAga;
    
        return $this;
    }

    /**
     * Get aAverageGoalsAga
     *
     * @return float 
     */
    public function getAAverageGoalsAga()
    {
        return $this->aAverageGoalsAga;
    }

    /**
     * Set aAttackStrength
     *
     * @param float $aAttackStrength
     * @return SummaryTeamWeek
     */
    public function setAAttackStrength($aAttackStrength)
    {
        $this->aAttackStrength = $aAttackStrength;
    
        return $this;
    }

    /**
     * Get aAttackStrength
     *
     * @return float 
     */
    public function getAAttackStrength()
    {
        return $this->aAttackStrength;
    }

    /**
     * Set aDefensiveStrength
     *
     * @param float $aDefensiveStrength
     * @return SummaryTeamWeek
     */
    public function setADefensiveStrength($aDefensiveStrength)
    {
        $this->aDefensiveStrength = $aDefensiveStrength;
    
        return $this;
    }

    /**
     * Get aDefensiveStrength
     *
     * @return float 
     */
    public function getADefensiveStrength()
    {
        return $this->aDefensiveStrength;
    }

    /**
     * Set isSummary
     *
     * @param boolean $isSummary
     * @return SummaryTeamWeek
     */
    public function setIsSummary($isSummary)
    {
        $this->isSummary = $isSummary;
    
        return $this;
    }

    /**
     * Get isSummary
     *
     * @return boolean 
     */
    public function getIsSummary()
    {
        return $this->isSummary;
    }

    /**
     * Set teamId
     *
     * @param integer $teamId
     * @return SummaryTeamWeek
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;
    
        return $this;
    }

    /**
     * Get teamId
     *
     * @return integer 
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * Set week
     *
     * @param integer $week
     * @return SummaryTeamWeek
     */
    public function setWeek($week)
    {
        $this->week = $week;
    
        return $this;
    }

    /**
     * Get week
     *
     * @return integer 
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return SummaryTeamWeek
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}