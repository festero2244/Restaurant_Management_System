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
    @include("admin.admincss");
</head>

<body class="">
  
  <div class="container-scroller">
    @include("admin.navbar");

    <div align="center">
        <table bgcolor="grey" border="1px">
            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">Phone</th>
                <th style="padding: 30px">Date</th>
                <th style="padding: 30px">Time</th>
                <th style="padding: 30px">Message</th>
            </tr>
            @foreach ($data as $data)
                
            
            <tr align="center">
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->date }}</td>
                <td>{{ $data->time }}</td>
                <td>{{ $data->message }}</td>
            </tr>
            @endforeach
        </table>

    </div>

  </div>
  <!--   Core JS Files   -->
  @include("admin.adminjs");
</body>

</html>