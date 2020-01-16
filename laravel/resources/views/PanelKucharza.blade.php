<b>Lista zamówień</b>
<table>
    <tr>
        <td><b>ID Zamówienia</b></td>
        <td><b>Staus</b></td>
        <td><b>Imię</b></td>
            <td><b>Nazwisko</b></td>
            <td><b>miasto</b></td>
            <td><b>Nazwa Pizzerii</b></td>




    </tr>
    @foreach($orderss as $order)
    <tr>
        <td>{{$order->id}}</td>
        <td>{{$order->status->name}}</td>
        <td>{{$order->user->name}}</td>
        <td>{{$order->user->surname}}</td>
        <td>{{$order->city}}</td>
        <td>{{$order->pizzeria->name}}</td>

    </tr>


    @endforeach
</table>
