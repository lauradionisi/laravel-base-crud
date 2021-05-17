@extends('layouts.app')

@section('title', 'Inserimento Vestito')
    
@section('content')

 
    <form action="{{ route('vestiti.update', $vestiti->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">EDIT Name:</label>
            <input type="text" class="form-control" name="name" id="name" value = "{{ $vestiti -> name }} ">
        </div>
        <div class="form-group">
            <label for="color">Color:</label>
            <input type="text" class="form-control" name="color" id="color" value = "{{ $vestiti -> color }} ">
        </div>
        <div class="form-group">
            <label for="size">Size:</label>
            <input type="text" class="form-control" name="size" id="size" value = "{{ $vestiti -> size }} ">
        </div>
        <div class="form-group">
            <label for="fabric">Fabric:</label>
            <input type="text" class="form-control" name="fabric" id="fabric" value = "{{ $vestiti -> fabric }} ">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" name="price" id="price" value = "{{ $vestiti -> price }} ">
        </div>
        <div class="form-group">
            <label for="season">Season:</label>
           <select name="season" id="season" class="form-control">
               <option value="">--Seleziona--</option>
               <option value="estivo" {{ $vestiti->season == "estivo" ? 'selected' : ''}}>Estivo</option>
               <option value="primaverile" {{ $vestiti->season == "primaverile" ? 'selected' : ''}}>Primaverile</option>
               <option value="invernale" {{ $vestiti->season == "invernale" ? 'selected' : ''}}>Invernale</option>
               <option value="autunnale" {{ $vestiti->season == "autunnale" ? 'selected' : ''}}>Autunnale</option>
           </select>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
  
@endsection