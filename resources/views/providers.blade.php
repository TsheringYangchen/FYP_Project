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
            <div style="text-align: center; font-weight: bold; font-size: 18px;">Create BIN/EIN Issuer</div>
            <hr>
            <div style="text-align: center;">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                        </ul>
                    </div>
                @endif
                @if(\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{Session::get('success')}}</p>
                    </div>
                    @endif
                <form method="post" action="{{route('providers')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                    Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="name" type="text" style="border:2px solid #3399ff; border-radius:6px;"><br><br>
                    </div>
                    <div class="form-group">
                        User Name: &nbsp;<input type="text" name="user" style="border:2px solid #3399ff; border-radius:6px;"><br><br>

                    </div>
                    <div class="form-group">
                        Occupation: &nbsp;<input type="text" name="occupation" style="border:2px solid #3399ff; border-radius:6px;"><br><br>
                    </div>

                <div>
                    <input type="reset" class="btn btn-outline-primary">
                    <input type="submit" class="btn btn-outline-primary" style="margin-left:100px;">
                </div>
                </form><br>

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
