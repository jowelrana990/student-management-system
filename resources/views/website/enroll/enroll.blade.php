@extends('website.master')

@section('title')
    Course Enroll Page
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body h-100">
                        <h3>Course Enroll Form</h3>
                        <hr/>
                        <form action="{{route('enroll.confirm',['id'=>$id])}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name"/>
                                    <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email"/>
                                    <span class="text-danger">{{$errors->has('email')?$errors->first('email'):''}}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="mobile"/>
                                    <span class="text-danger">{{$errors->has('mobile')?$errors->first('mobile'):''}}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Payment</label>
                                <div class="col-md-9">
                                    <label class="me-3"><input type="radio" name="payment_type" checked value="1">Pay Later</label>
                                    <label><input type="radio" name="payment_type" value="1">Pay Now</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" value="Confirm Enroll"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

