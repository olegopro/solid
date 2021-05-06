<?php


namespace App\I\B;


use Exception;

class QuickOrder implements Orderable
{
    function getPaymentMethod()
    {
        throw new Exception('Error payment');
    }

    function getShipmentMethod()
    {
         throw new Exception('Error shipment');
    }

    function getDiscount()
    {
         throw new Exception('Error discount');
    }

    function getTotalPrice()
    {
        return 100;
    }

    function getClientInfo()
    {
        return 'Phone';
    }

    function getComment()
    {
         throw new Exception('Error comment');
    }
}
