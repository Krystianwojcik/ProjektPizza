@extends('layouts.front2')
@section('content')

<div class="text-center">
<b>Lista zamówień dla dostawcy</b>
</div>
<div class="container">
    @foreach($orderss->chunk(4) as $chunked_order)
        <div class="row">
        @foreach($chunked_order as $order)
            <div class="zamowienie col-md-3 col-sm-6">
                <b>Id zamowienia: </b> {{$order->id}}<br>
                <b>Staus: </b>{{$order->status->name}}<br>
                <b>Imię: </b>{{$order->user->name}}<br>
                <b>Nazwisko: </b>{{$order->user->surname}}<br>
                <b>miasto: </b>{{$order->city}}<br>
                <b>Nazwa Pizzerii: </b>{{$order->pizzeria->name}}<br>
                <b>Z adresu: </b>{{$order->pizzeria->street}} {{$order->pizzeria->number}}<br>
                <b>Na adres: </b>{{$order->street}}<br>
                @if($order->status->id == '4')
                    <button class="btn btn-primary btn change-order-status" name="{{$order->id}}" value="{{$order->status->id+1}}">W drodze</button><br>
                @else
                    <button class="btn btn-primary btn change-order-status" name="{{$order->id}}" value="{{$order->status->id+1}}">Dostarczono</button><br>
                @endif
            </div>
        @endforeach
        </div>
            @endforeach

</div>
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



