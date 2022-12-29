@extends('layouts.app')
@section('content')

    <body >

    <table class="table" style="width: 800px; margin-left: 250px; text-align: center">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
        </tr>
        </thead>

                @foreach($allweaknesses as $weak)
        <tbody>
        <tr>
                <th scope="row">{{$weak->id}}</th>
                <td>{{$weak->name}}</td>
                <td><a href="{{route('edit_weakness',$weak->id)}}" class="btn btn-success btn-sm">edit</a></td>
                <td><a href="{{route('delete_weakness',$weak->id)}}" class="btn btn-danger btn-sm">delete</a></td>
                @endforeach
        </tr>
        </tbody>
    </table>
    <a href="{{route('index')}}" class="btn btn-primary btn-sm" style="margin-left: 250px" > Home </a>
@endsection
