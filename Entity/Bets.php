<?php

namespace bet\resultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bets
 *
 * @ORM\Table(name="bets")
 * @ORM\Entity
 */
class Bets
{
    /**
     * @var string
     *
     * @ORM\Column(name="ods", type="text", nullable=true)
     */
    private $ods;

    /**
     * @var integer
     *
     * @ORM\Column(name="match_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matchId;



    /**
     * Set ods
     *
     * @param string $ods
     * @return Bets
     */
    public function setOds($ods)
    {
        $this->ods = $ods;
    
        return $this;
    }

    /**
     * Get ods
     *
     * @return string 
     */
    public function getOds()
    {
        return $this->ods;
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