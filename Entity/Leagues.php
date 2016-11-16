<?php

namespace bet\resultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Leagues
 *
 * @ORM\Table(name="leagues")
 * @ORM\Entity
 */
class Leagues
{
    /**
     * @var string
     *
     * @ORM\Column(name="league_name", type="string", length=50, nullable=true)
     */
    private $leagueName;

    /**
     * @var integer
     *
     * @ORM\Column(name="league_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $leagueId;



    /**
     * Set leagueName
     *
     * @param string $leagueName
     * @return Leagues
     */
    public function setLeagueName($leagueName)
    {
        $this->leagueName = $leagueName;
    
        return $this;
    }

    /**
     * Get leagueName
     *
     * @return string 
     */
    public function getLeagueName()
    {
        return $this->leagueName;
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