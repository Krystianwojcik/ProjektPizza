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
        $object = $this->fR->getPizzeriaObject($city_slug, $name_slug);
        return view('PizzzeriaObject',['object'=>$object]);
    }
}
