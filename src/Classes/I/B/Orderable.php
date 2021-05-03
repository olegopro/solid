<?php


namespace App\I\B;


interface Orderable
{
    function getPaymentMethod();

    function getShipmentMethod();

    function getDiscount();

    function getTotalPrice();

    function getClientInfo();

    function getComment();
}
