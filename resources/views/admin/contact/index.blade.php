@extends('layouts.adminLayout')
@section('content')
            <!-- START PAGE CONTENT -->
            <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row"  style="padding: 0 30px 0 30px">
                            <h3 class="m-t-0 m-b-20">Contacts</h3>
                            <div class="row all-products">
                                <div class="table-responsive table-striped ">
                                    <table class="table m-0">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Message</th>
                                            <th>Email</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($contact as $contacts)
                                            <tr>
                                                <td>{{$contacts->name}}</td>
                                                <td>{{$contacts->message}}</td>
                                                <td>{{$contacts->email}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
            </div>
            <!-- End #page-right-content -->
            <div class="clearfix"></div>
{{--            @include('admin.includes.modals')--}}
@endsection
