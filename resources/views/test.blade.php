@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="col-12 mx-auto">
    <form action="{{ url('/add-test') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="time"></label>
                    <input type="datetime-local" name="time" id="time" class="form-control">
                </div>
            </div>
        </div>
        <button type="submit">ส่ง</button>
    </form>
    </div>
</div>
@endsection