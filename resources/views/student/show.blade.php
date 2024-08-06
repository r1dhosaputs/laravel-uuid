@extends('student.template')


@section('content')
    <div>
        <ul>
            <li>UUID {{ $data->id }}</li>
            <li>Name : {{ $data->name }}</li>
        </ul>
    </div>
@endsection
