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
    <base href="/public">
    @include("admin.admincss");
</head>

<body class="">
  
  <div class="container-scroller">
    @include("admin.navbar");

    <form action="{{ url('updatefoodchef',$data->id) }}" method="Post" enctype="multipart/form-data">

        @csrf

        <div align="center">
            <label>Chef Name</label>
            <input style="color:blue;" type="text" name="name" value="{{ $data->name }}">
        </div>

        <div align="center">
            <label>Speciality</label>
            <input style="color:blue;" type="text" name="speciality" value="{{ $data->speciality }}">
        </div>

        <div align="center">
            <label>Old Image</label>
            <img height="300" width="300" href="/chefimage/{{ $data->image }}">
        </div>

        <div align="center">
            <label>New Image</label>
            <input type="file" name="image">
        </div>

        <div align="center">
            <input style="color: blue;" type="submit" value="Update chef" name="image">
        </div>


    </form>



  </div>
  <!--   Core JS Files   -->
  @include("admin.adminjs");
</body>

</html>