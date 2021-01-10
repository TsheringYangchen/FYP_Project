@extends('layouts.app')

@section('content')
    <div>
        <div>
            <div style="width: 100%; border-radius: 2px; margin:0; border: 1px solid #f2f2f2; text-align: center;padding-top: 10px;padding-bottom: 10px; background: white">
            <h1 style="color: #3399ff">BEST-R SYSTEM</h1>
            </div>
        </div>
        <br>
        
        <div style="position: absolute; float:right; border-radius: 2px; margin:0; border: 1px solid #f2f2f2; margin-left:480px; width:42%; padding:10px;">
        <form style="padding-left: 15%">
                <input placeholder="Search Inbox"type="text" style="height: 35px;width:300px">
                <button class="btn btn-primary">Search</button>
            </form><hr><br>

            <div style="position:relative; margin-left:30px;">
                <div style="float:left; margin-top: 10px;"><i class="glyphicon glyphicon-user" style= "font-size: 80px;"></i></div>
                <div style="float:left; margin-top:10px; margin-left: 2px; height:50px; padding-top:25px; font-size:14px; font-weight: bold">
                    &nbsp;<i style='font-size:30px' class='fas'>&#xf007;</i>&nbsp;&nbsp;Cheki Dorji issued Lhamo bar with a BIN for dry day violation.</i>
                </div>
            </div>

            <div style="position:relative; margin-left:30px;">
                <div style="float:left; margin-top: 10px;"><i class="glyphicon glyphicon-user" style= "font-size: 80px;"></i></div>
                <div style="float:left; margin-top:10px; margin-left: 2px; height:50px; padding-top:25px; font-size:14px; font-weight: bold">
                &nbsp;<i style='font-size:30px' class='fas'>&#xf007;</i>&nbsp;&nbsp;Deki Dema issued Lhamo bar with a BIN for dry day violation.
                </div>
            </div>

            <div style="position:relative; margin-left:30px;">
                <div style="float:left; margin-top: 10px;"><i class="glyphicon glyphicon-user" style= "font-size: 80px;"></i></div>
                <div style="float:left; margin-top:10px; margin-left: 2px; height:50px; padding-top:25px; font-size:14px; font-weight: bold">
                &nbsp;<i style='font-size:30px' class='fas'>&#xf007;</i>&nbsp;&nbsp;Tsheten Dorji issued Lhamo bar with a BIN for dry day violation.
                </div>
            </div>

            <div style="position:relative; margin-left:30px;">
                <div style="float:left; margin-top: 10px;"><i class="glyphicon glyphicon-user" style= "font-size: 80px;"></i></div>
                <div style="float:left; margin-top:10px; margin-left: 2px; height:50px; padding-top:25px; font-size:14px; font-weight: bold">
                &nbsp;<i style='font-size:30px' class='fas'>&#xf007;</i>&nbsp;&nbsp;Tsheten Dorji issued Lhamo bar with a BIN for dry day violation.
                </div>
            </div>

            <div style="position:relative; margin-left:30px;">
                <div style="float:left; margin-top: 10px;"><i class="glyphicon glyphicon-user" style= "font-size: 80px;"></i></div>
                <div style="float:left; margin-top:10px; margin-left: 2px; height:50px; padding-top:25px; font-size:14px; font-weight: bold">
                &nbsp;<i style='font-size:30px' class='fas'>&#xf007;</i>&nbsp;&nbsp;Tsheten Dorji issued Lhamo bar with a BIN for dry day violation.
                </div>
            </div>

        </div>

        <div class="position-fixed" style="margin-top: 10px;">
            <div class="row justify-content-lg-start">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Menu</div>

                        <div class="card-body">
                            <nav class="navbar bg-light">
                                <ul class="navbar-nav" style="font-size: medium">
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{url('inbox2')}}"><i style='font-size:16px' class='fas'>&#xf27a;</i> &nbsp; Inbox</a>
                                    </li>
                                    <li class="nav-item">
                                   <a class="nav-link" href="{{url('licenseholders')}}"><i style='font-size:16px' class='fas'> &#xf2bb;</i>&nbsp; License Holders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('infringment')}}"><i style='font-size:16px' class='fas'>&#xf0aa;</i>&nbsp; Infringement Issuers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('applicants')}}"><i style='font-size:16 px' class='fas'>&#xf15c;</i> &nbsp; Applicants</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('providers')}}"><i style='font-size:24px' class='fas'>&#xf0c7;</i>&nbsp; Create Provider</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('feedback')}}"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('feedback')}}"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('feedback')}}"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('feedback')}}"></a>
                                    </li>
                                    <li class="nav-item">
                                    <button  class="btn btn-primary" href="{{url('http://127.0.0.1:8000/')}}" style="margin-left:20px;">Log Out</button>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
