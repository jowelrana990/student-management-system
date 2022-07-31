@extends('website.master')

@section('title')
    Contact
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body h-100">
                        <h3>Contact with us</h3>
                        <hr/>
                        <p>Address: </p>
                        <p>Phone One: </p>
                        <p>Phone Two: </p>
                        <p>Contact Email: info@contact.com</p>
                        <p>Support Email: info@support.com</p>
                        <p>Fax No: 12312312</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body h-100">
                        <h3>Give Us Your Message</h3>
                        <hr/>
                        <form action="" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Your Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="number"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Message</label>
                                <div class="col-md-9">
                                    <textarea name="message" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" name="btn" value="Send Message"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.876060967028!2d90.38900928613609!3d23.751798703113476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8983f79fa27%3A0xeddafd73d038bc2f!2sKawran%20Bazar%2C%20Dhaka%201215!5e0!3m2!1sen!2sbd!4v1655308020225!5m2!1sen!2sbd" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
