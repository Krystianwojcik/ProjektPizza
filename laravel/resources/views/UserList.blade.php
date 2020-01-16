<table>
    @foreach($objects as $object)
        <tr>
            <td>{{$object->name}}</td>
            <td>{{$object->surname}}</td>
            <td>{{$object->email}}</td>
            <td>{{$object->phone}}</td>
            <td>{{$object->phone}}</td>
            <td>{{$object->role()->get()}}</td>

        @foreach($object->orders()->get() as $order)
            <tr>
                @foreach($order->status()->get() as $status)
                    @if($status->id == 1)
                        <td>{{$status->name}}</td>
                    @endif
                @endforeach

                @foreach($order->pizzeria()->get() as $pizzeria)

                    <td>{{$pizzeria->name}}</td>

                @endforeach

            </tr>
            @endforeach

            </tr>

        @endforeach
</table>
