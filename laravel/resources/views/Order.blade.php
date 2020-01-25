@extends('layouts.front2')
@section('content')
<h1>Zamówienie</h1>

@error('name')
<div class="alert alert-danger">Musisz wpisac swoje imie</div>
@enderror
@error('surname')
<div class="alert alert-danger">Musisz wpisac swoje nazwisko</div>
@enderror
@error('street')
<div class="alert alert-danger">Musisz wpisac swoją ulice</div>
@enderror
@error('street')
<div class="alert alert-danger">Musisz wpisac swój numer domu</div>
@enderror
@error('city')
<div class="alert alert-danger">Musisz wpisac swoje miasto</div>
@enderror
@error('zpicode')
<div class="alert alert-danger">Musisz wpisac swoj kod pocztowy</div>
@enderror

<!--
{!! Form::open(['url' => 'thankyou']) !!}

   <div>
    {!! Form::label('pizzeria_id', 'Pizzeria', ['class' => 'col-md-4 ']) !!}
    {!! Form::text('pizzeria_id', $id_pizzeria , ['class' => 'col-md-4 ']) !!}
   </div>
       <div>
        {!! Form::label('pizza_id', 'Pizza', ['class' => 'col-md-4 ']) !!}
    {!! Form::text('pizza_id', $id_pizza , ['class' => 'col-md-4 ']) !!}
   </div>
       <div>
        {!! Form::label('name', 'Imię', ['class' => 'col-md-4 ']) !!}
    {!! Form::text('name', '' , ['class' => 'col-md-4 ']) !!}
   </div>

    <div>
        {!! Form::label('surname', 'Nazwisko', ['class' => 'col-md-4 ']) !!}
    {!! Form::text('surname', '' , ['class' => 'col-md-4 ']) !!}
    </div>

<div>    {!! Form::label('street', 'Ulica', ['class' => 'col-md-4 ']) !!}
    {!! Form::text('street', '' , ['class' => 'col-md-4 ']) !!}</div>

  <div>
        {!! Form::label('city', 'Miasto', ['class' => 'col-md-4 ']) !!}
    {!! Form::text('city', '' , ['class' => 'col-md-4 ']) !!}
  </div>

    <div>
        {!! Form::label('zpicode', 'Kod pocztowy', ['class' => 'col-md-4 ']) !!}
    {!! Form::text('zpicode', '' , ['class' => 'col-md-4 ']) !!}
    </div>

    {!! Form::submit('Zamów'); !!}
{!! Form::close() !!}
-->

<form method="POST" action="{{ route('thankyou') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="form-group col-md-12">
        <h2>Pizzeria: {{$id_pizzeria}}</h2>
        <input type="hidden" name="pizzeria_id" class="form-control" id="pizzeria_id" aria-describedby="pizzeria_id" placeholder="pizzeria_id" value="{{$id_pizzeria}}" required readonly>
    </div>
    <div class="form-group col-md-12">
       @inject('pizza_name', 'App\ProjektPizza\Interfaces\FrontendRepositoryInterface')
       
        <h3>Pizza: {{ $pizza_name->get_pizza_name_by_id($id_pizza) }}</h3>
        <input type="hidden" name="pizza_id" class="form-control" id="pizza_id" placeholder="pizza_id" value="{{$id_pizza}}" required readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="name" id="name">Imię</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Twoje imię" @auth value="{{ Auth::user()->name }}" @endauth  required>
    </div>
    <div class="form-group col-md-4">
        <label for="surname" id="surname">Nazwisko</label>
        <input type="text" class="form-control" id="surname" name="surname" placeholder="Nazwisko" @auth value="{{ Auth::user()->surname }}" @endauth required>
    </div>
    <div class="form-group col-md-4">
        <label for="street">Ulica</label>
        <input type="text" class="form-control" name="street" id="street" placeholder="Ulica" required>
    </div>
    <div class="form-group col-md-4">
        <label for="numer">Numer</label>
        <input type="text" class="form-control" name="numer" id="numer" placeholder="numer" required>
    </div>
    <div class="form-group col-md-4">
        <label for="city">Miasto</label>
        <input type="text" class="form-control" name="city" id="city" placeholder="Miasto" value=""  required>
    </div>
    <div class="form-group col-md-4">
        <label for="zpicode">Kod pocztowy</label>
        <input type="text" class="form-control" name="zpicode" id="zpicode" placeholder="Kod pocztowy(12-345)" value=""  required >
    </div>
    </div>

    <button type="submit" class="btn btn-primary">Zamów</button>
</form>









@endsection



