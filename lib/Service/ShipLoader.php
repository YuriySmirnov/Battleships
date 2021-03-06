<?php

/**
 * Created by Yuriy Smirnov.
 * Website: yuriysmirnov.ru
 * Email: yosmirn@gmail.com
 * Date: 18.09.17
 */

namespace Service;

use Model\BountyHunterShip;
use Model\RebelShip;
use Model\Ship;
use Model\AbstractShip;
use Model\ShipCollection;

class ShipLoader
{

    private $shipStorage;


    public function __construct(ShipStorageInterface $shipStorage)
    {
        $this->shipStorage = $shipStorage;
    }

    /**
     * @return ShipCollection
     */
    public function getShips()
    {
        try{
            $shipsData = $this->shipStorage->fetchAllShipsData();
        } catch (\PDOException $e){
            
            trigger_error('Database Exeption!' . $e->getMessage());
            $shipsData = [];
        }

        $ships = [];
        foreach ($shipsData as $shipData){
            $ships[] = $this->createShipFromData($shipData);
        }

        //Bobas Fett's ship
        $ships[] = new BountyHunterShip('Slave I');

        return new ShipCollection($ships);
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