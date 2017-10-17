<?php

/**
 * Created by Yuriy Smirnov.
 * Website: yuriysmirnov.ru
 * Email: yosmirn@gmail.com
 * Date: 18.09.17
 */
class ShipLoader
{

    private $shipStorage;


    public function __construct(AbstractShipStorage $shipStorage)
    {
        $this->shipStorage = $shipStorage;
    }

    /**
     * @return AbstractShip[]
     */
    public function getShips()
    {

        $shipsData = $this->shipStorage->fetchAllShipsData();

        foreach ($shipsData as $shipData){
            $ships[] = $this->createShipFromData($shipData);
        }

        return $ships;
    }

    private function createShipFromData(array $shipData){

        if ($shipData['team'] == 'rebel') {
            $ship = new RebelShip($shipData['name']);
        } else {
            $ship = new Ship($shipData['name']);
            $ship->setJediFactor($shipData['jedi_factor']);
        }

        $ship->setId($shipData['id']);
        $ship->setWeaponPower($shipData['weapon_power']);

        $ship->setStrength($shipData['strength']);

        return $ship;
    }

    /**
     * @param $id
     * @return null|AbstractShip
     */
    public function findOneById($id){

        $shipArray = $this->shipStorage->fetchSingleShipData($id);

        return $this->createShipFromData($shipArray);

    }

}