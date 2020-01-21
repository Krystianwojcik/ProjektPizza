@extends('layouts.front2')
@section('head')
<?php
$object = $return['object'];
?>
<div class="container">

    <h1 class="text-center">{{$object->name}}</h1>
    <table>

            <tr><td></td></tr>
            <tr><td>{{$object->street}}</td></tr>
            <tr><td>{{$object->city}}</td></tr>
            <tr><td>{{$object->zipcode}}</td></tr>
            <tr><td>{{$object->phone}}</td></tr>
            <tr><td>{{$object->city_slug}}</td></tr>
            <tr><td>{{$object->name_slug}}</td></tr>
    </table>
    <table class="table table-sm">

    <form method="POST" action="{{ route('order') }}">
        @csrf
    <input name="pizzeria" type="hidden" value="{{$object->id}}">
<thead>
    <tr>
      <th scope="col">Nazwa Pizzy</th>
      <th scope="col">Składniki</th>
      <th scope="col">Cena</th>
      <th scope="col"></th>
    </tr>
</thead>
<tbody>
<?php $i=0;?>
       @foreach($object->PizzeriaPizza()->get() as $pizza)

        <tr>
            <td>{{$pizza->name}}</td>
            <td>
        {{$return['components'][$i]}}
           <?php $i++;?>
            </td>
            <td>{{$pizza->price}}</td>
            <td><button name="pizzeria_pizza" value="{{$pizza->id}}" type="submit" class="btn btn-sm btn-primary">Zamów</button></td>
        </tr>
        @endforeach
        </tbody>
        </form>
    </table>
</div>
@endsection