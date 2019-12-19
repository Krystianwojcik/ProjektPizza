<h1>Strona Pizzerii</h1>
<table>
    
        <tr><td>{{$object->name}}</td></tr>
        <tr><td>{{$object->street}}</td></tr>
        <tr><td>{{$object->city}}</td></tr>
        <tr><td>{{$object->zipcode}}</td></tr>
        <tr><td>{{$object->phone}}</td></tr>
        <tr><td>{{$object->city_slug}}</td></tr>
        <tr><td>{{$object->name_slug}}</td></tr>
</table>
<table>PizzeriaPizza
  
  
<form method="POST" action="{{ route('order') }}">
    @csrf
<input name="pizzeria" type="hidden" value="{{$object->id}}">

                    
                    
   @foreach($object->PizzeriaPizza()->get() as $pizza)
   
    <div class="row">
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{$pizza->name}}</label>
        </div>
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{$pizza->price}}</label>
        </div>
        <div class="col-md-4">
            <button name="pizzeria_pizza" value="{{$pizza->id}}" type="submit" class="btn btn-primary">Zamów</button>
        </div>
    </div>
    @endforeach
    </form>
</table>