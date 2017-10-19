<?php

/**
 * Created by Yuriy Smirnov.
 * Website: yuriysmirnov.ru
 * Email: yosmirn@gmail.com
 * Date: 18.09.17
 */
class BattleResult
{
    private $useJediPower;
    private $winningShip;
    private $losingShip;

    public function __construct($useJediPower, AbstractShip $winningShip = null, AbstractShip $losingShip = null)
    {
        $this->useJediPower = $useJediPower;
        $this->winningShip  = $winningShip;
        $this->losingShip  = $losingShip;
    }

    /**
     * @return boolean
     */
    public function whereJediPowerUsed()
    {
        return $this->useJediPower;
    }

    /**
     * @return Ship|null
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    /**
     * @return Ship|null
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }

    public function isThereAWinner(){
        return $this->getLosingShip() !== null;
    }

}