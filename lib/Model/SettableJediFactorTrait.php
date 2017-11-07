<?php
/**
 * Created by Yuriy Smirnov.
 * Website: yuriysmirnov.ru
 * Email: yosmirn@gmail.com
 * Date: 07.11.17
 */

namespace Model;


trait SettableJediFactorTrait
{
    private $jediFactor = 0;

    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }
}