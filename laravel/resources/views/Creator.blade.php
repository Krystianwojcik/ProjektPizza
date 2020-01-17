<table>
    @foreach($components as $component)
    <tr>
        <td>{{$component->name}}</td>
        <td>{{$component->price}}</td>
    </tr>
    @endforeach
</table>
