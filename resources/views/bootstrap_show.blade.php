@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col-12 mx-auto">
            <div class="card mt-5">
                <div class="card-header card-background text-black">
                    <h2>ทดสอบ</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <h4>TEST</h4>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="form-group">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="form-group">
                                <input type="time" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="form-group">
                                <input type="time" class="form-control">
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-sm btn-primary">ปุ่ม</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection