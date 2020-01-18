<?php

namespace App\ProjektPizza\Interfaces;

interface FrontendRepositoryInterface   {

    public function getObjectsForMainPage();
    public function getAllComponents();
    public function getPizzeriaObject($city_slug, $name_slug);
    public function getAllUsers();
    public function getAllRoles();
    public function getAllOrders();
    public function getOrder($id);
    public function getAllPizzeriaWithPizza($return_no);
    public function getAllPizzasWithPizzeria($id, $return_no);
    public function getPizzaComponents($id, $return_no);
    public function getPizzaComponents_Component($id);
}


