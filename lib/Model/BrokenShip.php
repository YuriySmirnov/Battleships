<?php

/**
 * Created by Yuriy Smirnov.
 * Website: yuriysmirnov.ru
 * Email: yosmirn@gmail.com
 * Date: 12.10.17
 */
class BrokenShip extends AbstractShip
{
    public function getJediFactor(){
        return 0;
    }

    public function getType(){
        return 'Broken';
    }

    public function isFunctional(){
        return false;
    }
}