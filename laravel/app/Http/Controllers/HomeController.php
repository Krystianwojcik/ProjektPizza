<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjektPizza\Interfaces\FrontendRepositoryInterface;
use App\Order;
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
    public function editos($id)
    {
        $order= Order::find($id);
        dd($id->all());
        return view('editos', compact('order'));
    }
    public function home()
    {
        return view('homepage');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function creator()
    {
        return view('creator');
    }



    public function change_status_order_function(Request $request) {
        $order_id = $request->all()['order_id'];
        $status_id = $request->all()['status_id'];

        $order = Order::find($order_id);
        $order->status_id = $status_id;
        $order->save();

        return response()->json(['success'=>'sukcess']);


    }
}
