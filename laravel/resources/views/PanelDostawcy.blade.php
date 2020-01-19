@extends('layouts.front2')
@section('content')
<div class="container">

<h1 class="text-center">Lista zamówień dla dostawcy</h1>

   <table class="table table-sm">
   <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Status</th>
      <th scope="col">Imię</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Miasto</th>
      <th scope="col">Odbiór</th>
      <th scope="col">Adres</th>
      <th scope="col">Zmień status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orderss as $order)
           
    <tr>
      <th scope="row">{{$order->id}}</th>
      <td>{{$order->status->name}}</td>
      <td>{{$order->user->name}}</td>
      <td>{{$order->user->surname}}</td>
      <td>{{$order->city}}</td>
      <td>{{$order->pizzeria->name}}</td>
      <td>{{$order->pizzeria->street}} {{$order->pizzeria->number}}</td>
@if($order->status->id == '4')
                    <td><button class="btn btn-sm btn-warning text-white change-order-status" name="{{$order->id}}" value="{{$order->status->id+1}}">W drodze</button></td>
                @else
                    <td><button class="btn btn-sm btn-primary change-order-status" name="{{$order->id}}" value="{{$order->status->id+1}}">Dostarczono</button></td>
                @endif
    </tr>
          
    @endforeach
       </tbody>
</table>
</div>

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



