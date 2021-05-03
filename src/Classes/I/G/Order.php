<?php


namespace App\I\G;


class Order implements OrderInterface, PaymentInterface, ShipmentInterface, DiscountInterface
{

    function getTotalPrice()
    {
    }

    function getClientInfo()
    {
    }

    function getDiscount()
    {
    }

    function getPaymentMethod()
    {
    }

    function getShipmentMethod()
    {
    }
}
