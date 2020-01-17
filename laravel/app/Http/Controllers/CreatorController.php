<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjektPizza\Interfaces\FrontendRepositoryInterface;
use App\Order;

class CreatorController extends Controller
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
        $components = $this->fR->getAllComponents();
        return view('Creator',['components'=>$components]);

    }
}
