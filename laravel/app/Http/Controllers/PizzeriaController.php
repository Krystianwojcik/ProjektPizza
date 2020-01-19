<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjektPizza\Interfaces\FrontendRepositoryInterface;

class PizzeriaController extends Controller
{
    public function __construct(FrontendRepositoryInterface $PizzeriaRepository)
    {
        $this->fR = $PizzeriaRepository;
    }
    
    public function index($city_slug, $name_slug)
    {
        
        $return['object'] = $this->fR->getPizzeriaObject($city_slug, $name_slug);
            echo '<br />';
            echo '<br />';
            echo '<br />';
            echo '<br />';
            echo '<br />';
            echo '<br />';
        $return['components'] = array();
            foreach($return['object']->PizzeriaPizza()->get() as $pizza) {
             $return['components'][] = $this->fR->getPizzaComponents($pizza->id);
            }
        return view('PizzzeriaObject',['return'=>$return]);
    }
}
