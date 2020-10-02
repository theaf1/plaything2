@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="col-12 mx-auto">
    <form action="{{ url('/add-test') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <select class="form-control" name="test" id="test" size="6" multiple>
                        <option value="a">option1</option>
                        <option value="b">option2</option>
                        <option value="c">option3</option>
                        <option value="d">option4</option>
                        <option value="e">option5</option>
                        <option value="f">option6</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="time">เวลา&lt;</label>
                    <input class="form-control" type="time" name="time" id="time">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <Label for="url">URL</Label>
                    <input type="url" class="form-control" name="url" id="url">
                </div>
            </div>
        </div>
        <button type="submit">ส่ง</button>
    </form>
    </div>
</div>
@endsection