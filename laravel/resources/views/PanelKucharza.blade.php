@extends('layouts.front2')
@section('content')
<div class="container">

<h1 class="text-center">Lista zamówień dla kucharza</h1>

   <table class="table table-sm">
   <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Status</th>
    
      <th scope="col">Adres</th>
      <th scope="col">Zmień status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orderss as $order)
        <tr>
             <td>{{$order->id}}</td>
                   <td>{{$order->status->name}}</td>

                   <td>{{$order->pizzeria->name}}</td>
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
        $(".change-order-status").click(function(e){
            e.preventDefault();
            var order_id = $(this).attr('name');
            var status_id = $(this).attr('value');
            $.ajax({
                type:'POST',
                url:'/change_status_order',
                data:{order_id: order_id, status_id: status_id},
                success:function(data){
                    alert(data.success);
                    console.log(data.success);
                }
            });
        });
    </script>
    @endsection

