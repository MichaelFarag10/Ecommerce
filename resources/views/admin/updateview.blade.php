<!DOCTYPE html>
<html lang="en">
  <head>
  <style type="text/css">
        .title{
            color:white;
            padding-top:25px;
            font-size:17px;
        }

        label{
            display: inline-block;
            width: 200px;
        }

    </style>
      <base href="/public">
 2  @include('admin.css')
  </head>
  <body>
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

        <div class="container" align ="center">

            <h1 class="title">Update product</h1>

            @if(session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
                </div>
                @endif

            <form action="{{url('updateproduct',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding: 15px;">
                <label for=""> Product title</label>
                <input style="color:black;"  type="text" name="title" value="{{$data->title}}" required="">
            </div>

            <div style="padding: 15px;">
                <label for=""> Price</label>
                <input style="color:black;" type="number" name="price" value="{{$data->price}}" required="">
            </div>

            <div style="padding: 15px;">
                <label for=""> Description</label>
                <input style="color:black;" type="text" name="des" value="{{$data->description}}" required="">
            </div>

            <div style="padding: 15px;">
                <label for=""> Quantity</label>
                <input style="color:black;" type="text" name="quantity" value="{{$data->quantity}}" required="">
            </div>

            <div style="padding: 15px;">
                <label for=""> Old Image</label>
            
                <img height="100px" width="100px" src="/productimage/{{$data->image}}" alt="">
            </div>

            

            <div style="padding: 15px;">
                <label for="">Chane The Image</label>
                <input type="file" name="file" id="">

            </div>
            <div style="padding: 15px;">
                <input class="btn btn-success" type="submit">
            </div>
            </form>
        </div>

    
        </div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>