@extends('layouts.app')

@section('title', 'Inserimento Vestito')
    
@section('content')

    <form action="{{ route('vestiti.store') }}" method="POST">
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
            <input type="text" class="form-control" name="season" id="season">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
  
@endsection