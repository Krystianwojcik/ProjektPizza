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

    @auth
        @if($orderedPizza)
            <table class="table">
        <tr>
            <td>Twoja ostatnio zamówiona pizza</td>
            <td> Pizzeria </td>
            <td> Nazwa pizzy </td>
            <td> Składniki</td>
        </tr>
                <tr>
                    <td></td>
                    <td> {{$orderedPizzeria->name}}</td>
                    <td> {{$orderedPizza->name}}</td>
                    <td> {{$orderedPizzaComponents}}</td>
                </tr>
            </table>





        @endif
        @endauth

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
        <td><a class="btn btn-sm btn-primary" href="{{route('pizzeria', ['city' => $object->city_slug, 'name' => $object->name_slug])}}">Przejdz do pizzerii</a></td>
    </tr>
    @endforeach



</table>


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
