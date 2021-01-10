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
            <form style="padding-left: 15%" action="{{URL::to('/search')}}" method ="POST" role="search" >
                {{csrf_field()}}
                <div class="input-group">
                <input type="text" name="q" placeholder="Search license holders" style="height: 35px;width:300px">&nbsp;&nbsp;&nbsp;
                <button class="btn btn-primary" type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>Search</button>
                </div>
                
                
            </form>
            <br/>
             <br/>
            @if(isset($details))
            <p>The search results for your query <b>{{$query}}</b> are:</p>
                <h1>Searched License Holder </h1>
                    <table class="table table-stripped">
                       <thead>
                              <tr>
                                                <th>id</th>
                                                <th>Name</th>
                                                
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($details as $user)
                                                <tr>
                                                <td>{{$licenseholders->name}}</td>
                                                    <td>{{$licenseholders->email}}</td>
                                                    
                                                    

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        @endif
                                        </table>
            
            <hr><br>

            <div>
                <ul style="list-style-type: none; text-align: center">
                    <li>
                        <a class="nav-link" href="{{url('licenseholders')}}" style="float: left; font-weight: bold">ALL</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{url('licenseholders?r=BAR')}}" style="padding-left: 130px;float: left; font-weight: bold">BAR</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{url('licenseholders?r=EIN')}}" style="padding-left: 350px; font-weight: bold">ENTERTAINMENT
                        </a>
                    </li>
                </ul>
            </div>
            <hr>

            <?php
                $link = mysqli_connect("localhost", "root", "", "laravel");
 
// Check connection
                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
 
// Attempt select query execution
                $sql = $type1 ? "SELECT * FROM licenseholders WHERE type='".$type1."'" : "SELECT * FROM licenseholders";
                if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo "<table class='table'>";
                            echo "<tr align='center'>";
                                echo "<th>Id</th>";
                                echo "<th>Name</th>";
                                echo "<th>Type</th>";
                                echo "<th>Degree</th>";
                                echo "<th>Status</th>";
                            echo "</tr>";
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr align='center'>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['type'] . "</td>";
                                echo "<td>" . $row['degree'] . "</td>";
                                echo "<td>" . $row['status'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        // Close result set
                        mysqli_free_result($result);
                    } else{
                        echo "No records matching your query were found.";
                    }
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
                
                // Close connection
                mysqli_close($link);
            ?>

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
