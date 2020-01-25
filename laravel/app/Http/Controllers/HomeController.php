<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjektPizza\Interfaces\FrontendRepositoryInterface;
use App\ProjektPizza\Gateways\FrontendGateway;
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
    public function __construct(FrontendRepositoryInterface $frontendRepository, FrontendGateway $frontendGateway)
    {
        $this->fR = $frontendRepository;
        $this->fG = $frontendGateway;
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
        $objects = $this->fR->getOrdersForChef();
        return view('PanelKucharza',['orderss'=>$objects]);
    }
    public function panelDostawcy()
    {
        $objects = $this->fR->getOrdersForSupplier();
        return view('PanelDostawcy',['orderss'=>$objects]);
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
    public function searchPizzeria(Request $request)
    {
        $results= $this->fG->searchPizza($request);

        return response()->json($results);
    }
    public function pizzeriasearch(Request $request)
    {
        if($city = $this->fG->getSearchResults($request))
        {

            return view('PizzeriaList',['objects'=>$city]);
        }
        else
        {
            if(!$request->ajax())
                return redirect('/')->with('nopizzeria', 'No offers were found matching the criteria');
        }
    }



    public function change_status_order_function(Request $request) {
        $order_id = $request->all()['order_id'];
        $status_id = $request->all()['status_id'];

        $order = Order::find($order_id);
        $order->status_id = $status_id;
        $order->save();

        return response()->json(['success'=>'sukcess']);


    }
    public function refresh_order_function() {
        $objects = $this->fR->getOrdersForChef();
        $return = '';
        foreach($objects as $order) {
           foreach($order->Order_Pizza as $Order_Pizza) {
           $return .= '<tr>';
               $return .= '<td>'.$order->id.'</td>';
               $return .= '<td>'.$order->status->name.'</td>';
               $return .= '<td>'.$order->pizzeria->name.'</td>';
               $return .= '<td>'.$Order_Pizza->pizzeria_pizza_id.'</td>';
               $return .= '<td>'.$this->fR->getPizzaComponents($Order_Pizza->pizzeria_pizza_id).'</td>';
               if($order->status->id == '1') {
                   $return .= '<td><button class="btn btn-primary btn-sm change-order-status" name="'.$order->id.'" value="2">Realizuj</button></td>';
                   $return .= '<td><button class="btn btn-warning btn-sm change-order-status" name="'.$order->id.'" value="3">Na produkcje</button></td>';
                   $return .= '<td><button class="btn btn-danger btn-sm change-order-status" name="'.$order->id.'" value="7">Anuluj</button></td>';
               } elseif($order->status->id == '2') {
                   $return .= '<td><button class="btn btn-warning btn-sm change-order-status" name="'.$order->id.'" value="3">Na produkcje</button></td>';
               } elseif($order->status->id == '3') {
                   $return .= '<td><button class="btn btn-info btn-sm change-order-status" name="'.$order->id.'" value="4">Czeka na dostawcę</button></td>';
               }                      
            $return .= '</tr>';
            }
        }
        $return .= '<script>$(".change-order-status").click(function(t){t.preventDefault();var e=$(this).attr("name"),a=$(this).attr("value");$.ajax({type:"POST",url:"/change_status_order",data:{order_id:e,status_id:a},success:function(t){console.log("status update"),$.ajax({type:"POST",url:"/refresh_order",success:function(t){$("#tabela_order").html(t.success),console.log("tabela update")}})}})});</script>';


        return response()->json(['success'=>$return]);


    }
}

