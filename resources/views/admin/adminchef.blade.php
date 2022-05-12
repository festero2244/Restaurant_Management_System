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
        <form action="{{ url('/uploadchef') }}" method="post" enctype="multipart/form-data">

            @csrf

               <div>
                   <label>Name</label>
                   <input style="color:blue;" type="text" name="name" required placeholder="Enter name">
               </div>

               <div>
                <label>Speciality</label>
                <input style="color:blue;" type="text" name="speciality" required placeholder="Enter the speciality">
            </div>

            <div>
                <label>Image</label>
                <input type="file" name="image">
            </div>

            <div>
            
                <input type="submit" value="Save">
            </div>
        </form>

        <table bgcolor="black" align="right">
            <tr>
                <th style="padding: 30px;">Chef Name</th>
                <th style="padding: 30px;">Speciality</th>
                <th style="padding: 30px;">Images</th>
                <th style="padding: 30px;">Action</th>
                <th style="padding: 30px;">Action2</th>
                
            </tr>
            @foreach ($data as $data)
            <tr align="center">
                <td>{{ $data->name }}</td>
                <td>{{ $data->speciality }}</td>
                <td><img height="100" width="100" src="/chefimage/{{ $data->image }}"</td>
                <td><a href="{{ url('updatechef',$data->id) }}"> Update</a></td>
                <td><a href="{{ url('deletechef',$data->id) }}"> Delete</a></td>

            </tr>
            @endforeach
        </table>
    </div>

  </div>
  <!--   Core JS Files   -->
  @include("admin.adminjs");
</body>

</html>