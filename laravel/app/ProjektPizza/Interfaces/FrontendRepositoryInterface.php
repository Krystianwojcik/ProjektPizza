<?php

namespace App\ProjektPizza\Interfaces;

interface FrontendRepositoryInterface   {
    
    public function getObjectsForMainPage();
    public function getPizzeriaObject($city_slug, $name_slug);
    
}


