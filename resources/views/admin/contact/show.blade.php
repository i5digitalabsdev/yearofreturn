@extends('layouts.adminLayout')
@section('content')
    <!-- START PAGE CONTENT -->
    <div>
        <div id="page-right-content">
            <div class="container">
                <div class="row main-content"  style="padding: 0 30px 0 30px">
                    <span><i class="ti ti-angle-left"></i><a href="{{url('admin/contact')}}">Go back</a></span>
                    <br>
                    <h5>Name: {{$contact->name}}</h5>
                    <h5>Company Name: {{$contact->company_name}}</h5>
                    <h5>Phone Number: {{$contact->contact_number}}</h5>
                    <h5>Email: {{$contact->email}}</h5>
                    <h5>Enquiry Type: {{$contact->enquiry_type}}</h5>
                    <h5>Message: {{$contact->message}}</h5>
                </div> <!-- end row -->
            </div>
            <!-- end container -->
        </div>
    </div>
    <!-- End #page-right-content -->
    <div class="clearfix"></div>
@endsection