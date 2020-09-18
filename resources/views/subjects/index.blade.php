@extends('layouts.app')
@section('content')


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        @forelse($subjects as $subject)
        <tr>
            <th scope="row">{{ $subject->name }}</th>
            <td>{{ $subject->description }}</td>
            <td>{{ $subject->available }}</td>
            <td>Acciones</td>
        </tr>
        @empty
            <h3>No hay datos</h3>
        @endforelse
        </tbody>
    </table>





@endsection


