<?php

/**
 * Created by Yuriy Smirnov.
 * Website: yuriysmirnov.ru
 * Email: yosmirn@gmail.com
 * Date: 17.10.17
 */

interface ShipStorageInterface
{
    /**
     * Returns an array of ship array, with keys id, name, weaponPower, defence.
     *
     * @return array
     */
    public function fetchAllShipsData();

    /**
     * @param integer $id
     * @return array
     */
    public function fetchSingleShipData($id);
}