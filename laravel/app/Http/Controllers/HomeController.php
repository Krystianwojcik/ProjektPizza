<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjektPizza\Interfaces\FrontendRepositoryInterface;

class HomeController extends Controller
{

/*    public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __construct(FrontendRepositoryInterface $frontendRepository) /* Lecture 13 FrontendRepositoryInterface */
    {
        $this->fR = $frontendRepository;
    }

    public function index()
    {
        $objects = $this->fR->getObjectsForMainPage();
        return view('PizzeriaList',['objects'=>$objects]);
    }
    public function listOfUsers()
    {
        $objects = $this->fR->getAllUsers();
        return view('PanelKucharza',['objects'=>$objects]);
    }
    public function panelKucharza()
    {
        $objects = $this->fR->getAllOrders();
        return view('PanelKucharza',['orderss'=>$objects]);
    }
}
