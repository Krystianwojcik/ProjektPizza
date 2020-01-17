<table>
    @foreach($objects as $object)
    <tr>
        <td>{{$object->name}}</td>
        <td>{{$object->street}}</td>
        <td>{{$object->city}}</td>
        <td>{{$object->zipcode}}</td>
        <td>{{$object->phone}}</td>
        <td>{{$object->city_slug}}</td>
        <td>{{$object->pizzeria_name_slug}}</td>
        <td><a href="{{route('pizzeria', ['city' => $object->city_slug, 'name' => $object->name_slug])}}">Link</a></td>
    </tr>
    @endforeach
        <td><a href="{{route('panelkucharza')}}">Panel kucharza</a></td>
        <td><a href="{{route('creator-pizzy')}}">Kreator pizzy</a></td>
</table>
