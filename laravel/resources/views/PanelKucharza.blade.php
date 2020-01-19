@extends('layouts.front2')
@section('content')
<div class="text-center">
    <b>Lista zamówień dla dostawcy</br><br></b>
</div>
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
                    @if($order->status->id == '1')
                        <button class="btn btn-primary btn change-order-status" name="{{$order->id}}" value="{{$order->status->id+1}}">Realizuj</button>
                        <button class="btn btn-primary btn change-order-status" name="{{$order->id}}" value="{{$order->status->id+2}}">Na produkcje</button>
                        <button class="btn btn-primary btn change-order-status" name="{{$order->id}}" value="7">Anuluj</button>
                    @elseif($order->status->id == '2')
                        <button class="btn btn-primary btn change-order-status" name="{{$order->id}}" value="{{$order->status->id+1}}">Na produkcje</button>
                    @elseif($order->status->id == '3')
                        <button class="btn btn-primary btn change-order-status" name="{{$order->id}}" value="{{$order->status->id+1}}">Czeka na dostawcę</button>
                    @endif
                </div>
            @endforeach
        </div>
    @endforeach





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

