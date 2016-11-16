<?php

namespace bet\resultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teams
 *
 * @ORM\Table(name="teams")
 * @ORM\Entity
 */
class Teams
{
    /**
     * @var string
     *
     * @ORM\Column(name="bet_name", type="string", length=50, nullable=true)
     */
    private $betName;

    /**
     * @var string
     *
     * @ORM\Column(name="team_name", type="string", length=50, nullable=true)
     */
    private $teamName;

    /**
     * @var integer
     *
     * @ORM\Column(name="league_id", type="integer", nullable=true)
     */
    private $leagueId;

    /**
     * @var integer
     *
     * @ORM\Column(name="team_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $teamId;



    /**
     * Set betName
     *
     * @param string $betName
     * @return Teams
     */
    public function setBetName($betName)
    {
        $this->betName = $betName;
    
        return $this;
    }

    /**
     * Get betName
     *
     * @return string 
     */
    public function getBetName()
    {
        return $this->betName;
    }

    /**
     * Set teamName
     *
     * @param string $teamName
     * @return Teams
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;
    
        return $this;
    }

    /**
     * Get teamName
     *
     * @return string 
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * Set leagueId
     *
     * @param integer $leagueId
     * @return Teams
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
     * Get teamId
     *
     * @return integer 
     */
    public function getTeamId()
    {
        return $this->teamId;
    }
}