@extends('layouts.app')

@section('title', 'Inserimento Vestito')
    
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
             </ul>
         </div>
    @endif

    <form action="{{ route('vestiti.update') }}" method="post">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="color">Color:</label>
            <input type="text" class="form-control" name="color" id="color">
        </div>
        <div class="form-group">
            <label for="size">Size:</label>
            <input type="text" class="form-control" name="size" id="size">
        </div>
        <div class="form-group">
            <label for="fabric">Fabric:</label>
            <input type="text" class="form-control" name="fabric" id="fabric">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" name="price" id="price">
        </div>
        <div class="form-group">
            <label for="season">Season:</label>
           <select name="season" id="season" class="form-control">
               <option value="">--Seleziona--</option>
               <option value="estivo">Estivo</option>
               <option value="Primaverile">Primaverile</option>
               <option value="Invernale">Invernale</option>
               <option value="Autunnale">Autunnale</option>
           </select>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
  
@endsection