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

    <div class="container"> 

    <h1 align="center">Customer Orders</h1>


    <form action="{{ url('/search') }}" method="get" align="center">
      @csrf

      <input type="text" name="search" style="color: blue;">

      <input type="submit" value="Search" class="btn btn-success">
    </form>

    <table align="center">

        <tr>
            <td style="padding: 30px;">Name</td>
            <td style="padding: 30px;">Phone</td>
            <td style="padding: 30px;">Address</td>
            <td style="padding: 30px;">Foodname</td>
            <td style="padding: 30px;">Price</td>
            <td style="padding: 30px;">Quantity</td>
            <td style="padding: 30px;">Total Price</td>
        </tr>
        @foreach ($data as $data)
            
        <tr style="background-color: black">
            <td>{{ $data->name }}</td>
            <td>{{ $data->phone }}</td>
            <td>{{ $data->address }}</td>
            <td>{{ $data->foodname }}</td>
            <td>{{ $data->price }}$</td>
            <td>{{ $data->quantity }}</td>
            <td>{{ $data->price * $data->quantity }}$</td>
        </tr>
        @endforeach



    </table>
  </div>
  </div>
  <!--   Core JS Files   -->
  @include("admin.adminjs");
</body>

</html>