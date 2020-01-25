<?php

namespace App\ProjektPizza\Interfaces;

interface FrontendRepositoryInterface   {

    public function getObjectsForMainPage();

    public function getPizzeria($id);
    public function getAllComponents();
    public function getPizzeriaObject($city_slug, $name_slug);
    public function getAllUsers();
    public function getAllRoles();
    public function getAllOrders();
    public function getOrder($id);

    public function getOrdersForSupplier();
    public function getOrdersForChef();

    public function addOrder($request);
    public function addOrderPizza($order_id, $pizza_id);

    public function getAllPizzeriaWithPizza($return_no, $return_yes);
    public function getAllPizzasWithPizzeria($id, $return_no, $return_yes);
    public function getPizzaComponents($id, $return_no, $return_yes);
    public function getPizzaComponents_Component($id);
    
    public function get_pizza_name_by_id($id);

}


