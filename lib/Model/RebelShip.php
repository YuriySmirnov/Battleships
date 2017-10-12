<?php

/**
 * Created by Yuriy Smirnov.
 * Website: yuriysmirnov.ru
 * Email: yosmirn@gmail.com
 * Date: 01.10.17
 */
class RebelShip extends AbstractShip
{

    public function getFavoriteJedi(){

        $coolJedis = array('Joda', 'Ben Kenobi');
        $key = array_rand($coolJedis);

        return $coolJedis[$key];


    }

    public function getType()
    {
        return 'Rebel';
    }

    public function isFunctional()
    {
        return true;
    }

    public function getNameAndSpecs($useShortFormat = false)
    {
        $val = parent::getNameAndSpecs($useShortFormat);
        $val .= ' (Rabel)';

        return $val;
    }

    public function getJediFactor()
    {
        return rand(10, 30);
    }

}