<?php

/**
 * Created by Yuriy Smirnov.
 * Website: yuriysmirnov.ru
 * Email: yosmirn@gmail.com
 * Date: 17.10.17
 */

abstract class AbstractShipStorage
{
    abstract public function fetchAllShipsData();
    
    abstract public function fetchSingleShipData($id);
}