<x-app-layout>
    
</x-app-layout>


<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
</head>

<body>
  
    <div class="container-scroller">
        
     
    @include("admin.navbar")
     
     
    <div style="position: relative; top: -400px; right: -250px ">
      <table bgcolor:grey; border: 3px;>
        <tr>
        <th style="padding: 30px">Name</th>
        <th style="padding: 30px">Email</th>
        <th style="padding: 30px">Action</th>
        </tr>

        @foreach($data as $data)
        <tr align="center">
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>

          @if ($data->usertype=="0")            
          <td><a href="{{ url('/deleteuser', $data->id) }}">Delete</a></td>
          @else
          <td><a>Not Allowed</a></td>

          @endif
        </tr>
        @endforeach

      </table>
    </div>
    </div>

  <!--   Core JS Files   -->
  @include("admin.adminjs");
</body>

</html>