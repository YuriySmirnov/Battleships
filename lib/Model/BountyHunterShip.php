<?php
/**
 * Created by Yuriy Smirnov.
 * Website: yuriysmirnov.ru
 * Email: yosmirn@gmail.com
 * Date: 07.11.17
 */

namespace Model;


class BountyHunterShip extends AbstractShip
{

    use SettableJediFactorTrait;

    public function getType()
    {
        return 'Bounty Hunter';
    }

    public function isFunctional()
    {
        return true;
    }

}