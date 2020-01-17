<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
 
<b>Lista zamówień</b>
<table>
    <tr>
        <td><b>ID Zamówienia</b></td>
        <td><b>Staus</b></td>
        <td><b>Imię</b></td>
            <td><b>Nazwisko</b></td>
            <td><b>miasto</b></td>
            <td><b>Nazwa Pizzerii</b></td>
            <td><b>Z adresu</b></td>
            <td><b>Na adres</b></td>





    </tr>
    @foreach($orderss as $order)
    <tr>
        <td>{{$order->id}}</td>
        <td>{{$order->status->name}}</td>
        <td>{{$order->user->name}}</td>
        <td>{{$order->user->surname}}</td>
        <td>{{$order->city}}</td>
        <td>{{$order->pizzeria->name}}</td>
        <td>{{$order->pizzeria->street}} {{$order->pizzeria->number}}</td>
        <td>{{$order->street}}</td>
        <td><button class="btn change-order-status" name="{{$order->id}}" value="2">Przyjęto do realizacji</button></td>
        <td><button class="btn change-order-status" name="{{$order->id}}" value="3">W trakcie produkcji</button></td>
        <td><button class="btn change-order-status" name="{{$order->id}}" value="4">W drodze</button></td>




    </tr>


    @endforeach

</table>


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

   
</body>
</html>
