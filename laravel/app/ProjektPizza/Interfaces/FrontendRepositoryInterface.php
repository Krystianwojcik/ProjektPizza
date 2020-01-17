<?php

namespace App\ProjektPizza\Interfaces;

interface FrontendRepositoryInterface   {

    public function getObjectsForMainPage();
    public function getPizzeriaObject($city_slug, $name_slug);
    public function getAllUsers();
    public function getAllRoles();
    public function getAllOrders();
    public function getOrder($id);
    public function getOrdersForSupplier();
    public function getOrdersForChef();
}


