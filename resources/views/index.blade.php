@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col-12 mx-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($times as $time)
                        <tr>
                            <td scope="row">{{$time['id']}}</td>
                            <td>{{$time['time']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection