<h1>Zamówienie</h1>




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

