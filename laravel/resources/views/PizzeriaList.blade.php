@extends('layouts.front2')
@section('head')
    <script>
        var base_url = '{{url('/pizzeriaList/')}}';
    </script>

    @endsection
@section('content')

    <form method="POST" action="{{ route('pizzeriasearch') }}" class="form-inline">
        <div class="form-group">
            <label class="sr-only" for="city">City</label>
            <input name="city" type="text" class="form-control autocomplete" id="city" placeholder="City">
        </div>
        <button type="submit" class="btn btn-warning">Search</button>
        {{ csrf_field() }}
    </form>


    @if(session('nopizzeria'))
        <p class="text-center red bolded">{{session('nopizzeria')}}</p>
    @endif

<table class="table">
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



</table>

<a class="btn btn-info" href="{{route('panelkucharza')}}">Panel kucharzy</a>
<a class="btn btn-info" href="{{route('paneldostawcy')}}">Panel dostawców</a>
<a class="btn btn-info" href="{{route('creator-pizzy')}}">Kreator pizzy</a>
@endsection

@section('scripts')
    <script>

        $(function () {
            $(".autocomplete").autocomplete({
                source: base_url + "/searchPizzeria",
                minLength: 2,
                select: function (event, ui) {

                    console.log(ui.item.value);
                }


            });
        });

    </script>


@endsection
