<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjektPizza\Interfaces\FrontendRepositoryInterface;

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
        $Pizzerias = $this->fR->getPizzaComponents(6, 4);
        var_dump($Pizzerias);
        $components = $this->fR->getAllComponents();
        return view('Creator',['components'=>$components]);

    }
    
        
    public function creator_get_pizzerias_function(Request $request) {
       $return_no = $request->all()['return_no'];
 /*        $return_opcional = $request->all()['return_opcional'];*/
   /*     $return_yes = $request->all()['return_yes'];*/
        $Pizzerias = $this->fR->getAllPizzeriaWithPizza($return_no);
        return response()->json(['success'=>$Pizzerias, 'return_no'=>$return_no]);
        
        
    }
}
