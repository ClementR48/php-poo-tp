<?php

final class Voiture implements VehiculeInterface, TransportInterface
{
    private $vitesse = 90; // Error
    protected $carburant = 'diesel';
    public function rouler()
    {
        echo 'Voiture '.$this->carburant.', roulant à '.$this->vitesse.' KM/h avec '.
            self::NB_ROUES.' roues';
    }

    public static function getNbPortes()
    {
        // TODO: Implement getNbPortes() method.
    }

    public function __construct()
    {
    }

    public function voyager(Voyageur $voyageur) {
        return $voyageur->getNom().' voyage en voiture' ;
    }
}