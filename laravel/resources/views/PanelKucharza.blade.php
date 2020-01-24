@extends('layouts.front2')
@section('content')
<div class="container">

<h1 class="text-center">Lista zamówień dla kucharza</h1>

   <table class="table table-sm">
   <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Status</th>
    
      <th scope="col">Pizzeria</th>
      <th scope="col">Pizza</th>
      <th scope="col">Składniki</th>
      <th scope="col">Zmień status</th>
    </tr>
  </thead>
  <tbody id="tabela_order">
    @foreach($orderss as $order)
      @foreach($order->Order_Pizza as $Order_Pizza)
        <tr>
             <td>{{$order->id}}</td>
                   <td>{{$order->status->name}}</td>

                   <td>{{$order->pizzeria->name}}</td>
                   <td>{{$Order_Pizza->pizzeria_pizza_id}}</td>
                   <td>@inject('components', 'App\ProjektPizza\Interfaces\FrontendRepositoryInterface'){{ $components->getPizzaComponents($Order_Pizza->pizzeria_pizza_id) }}</td>
                    @if($order->status->id == '1')
                  <td><button class="btn btn-primary btn-sm change-order-status" name="{{$order->id}}" value="{{$order->status->id+1}}">Realizuj</button></td>
                  <td><button class="btn btn-primary btn-sm change-order-status" name="{{$order->id}}" value="{{$order->status->id+2}}">Na produkcje</button></td>
                  <td><button class="btn btn-primary btn-sm change-order-status" name="{{$order->id}}" value="7">Anuluj</button></td>
                 @elseif($order->status->id == '2')
                  <td><button class="btn btn-primary btn-sm change-order-status" name="{{$order->id}}" value="{{$order->status->id+1}}">Na produkcje</button></td>
                  @elseif($order->status->id == '3')
                  <td><button class="btn btn-primary btn-sm change-order-status" name="{{$order->id}}" value="{{$order->status->id+1}}">Czeka na dostawcę</button></td>
                  @endif
        </tr>
        @endforeach
    @endforeach


       </tbody>
</table>

@endsection

@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
           $('.change-order-status').click(function(e){
            e.preventDefault();
            var order_id = $(this).attr('name');
            var status_id = $(this).attr('value');
            $.ajax({
                type:'POST',
                url:'/change_status_order',
                data:{order_id: order_id, status_id: status_id},
                success:function(data){
                    console.log('status update');
                    $.ajax({
                    type:'POST',
                    url:'/refresh_order',
                    success:function(data){
                        $('#tabela_order').html(data.success);
                        console.log('tabela update');
                    }
                });
                }
            });
        });    
        
        var time = setInterval(function() {
            $.ajax({
                    type:'POST',
                    url:'/refresh_order',
             
                    success:function(data){
                        $('#tabela_order').html(data.success);
                        console.log('tabela update');
                    }
                });
      
 }, 10000);
       
          
        

    </script>
    @endsection

