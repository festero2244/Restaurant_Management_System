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

    <div style="position: relative;  " align="center">
    
        <form action="{{ url('/uploadfood') }}" method="post"   enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" name="title" placeholder="Write a title " required>
            </div>
       
   

                <div>
                <label>Price</label>
                <input type="num" name="price" placeholder="Food price " required>
            </div>
        

            <div>
                <label>Image</label>
                <input style="color:black" type="file" name="image"  required>
            </div>
        

    
            <div>
                <label>Description</label>
                <input type="text" name="description" placeholder="Food description " required>
            </div>

            <input type="submit" value="Save">
        
        </form>
    </div>

    <div>
        <form>
            <table bgcolor="orange">
                <tr>
                    <th style="padding: 30px">Food Name</th>
                    <th style="padding: 30px">Price</th>
                    <th style="padding: 30px">Description</th>
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">Action</th>
                    <th style="padding: 30px">Action2</th>
                    
                </tr>

                @foreach ($data as $data)
                    
                <tr align="center">
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->price }}</td>
                    <td>{{ $data->description }}</td>
                    <td><img height="200" width="200" src="/foodimage/{{ $data->image }}"></td>
                    <td><a href="{{ url('/deletemenu',$data->id) }}">Delete</a></td>
                    <td><a href="/updateview/{{ $data->id }}">Update</a></td>
                </tr>

                @endforeach
            </table>
        </form>
    </div>

  <!--   Core JS Files   -->
  @include("admin.adminjs");

    
</body>

</html>