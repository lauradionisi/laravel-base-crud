@extends('layouts.app')

@section('title', 'Vestiti')
    
@section('content')
    <h1>Lista dei nostri vestiti</h1>

    <a href="{{ route('vestiti.create') }}" class="btn btn-primary">Nuovo Vestito</a>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Color</th>
            <th scope="col">Size</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($vestiti as $vestito)
                <tr>
                <th scope="row">{{ $vestito['id'] }}</th>
                <td>{{ $vestito['name'] }}</td>
                <td>{{ $vestito['color'] }}</td>
                <td>{{ $vestito['size'] }}</td>
                <td><a href="{{route('vestiti.show', ['vestiti' => $vestito -> id] )}}" class="btn btn-info">Detail</a></td>
                </tr>
            @endforeach        
        </tbody>
    </table>
@endsection