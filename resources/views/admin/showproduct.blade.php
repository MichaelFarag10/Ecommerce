<!DOCTYPE html>
<html lang="en">
  <head>
 2  @include('admin.css')
  </head>
  <body>
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
       
        <div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">
        <div class="container" align ="center">

        @if(session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
                </div>
                @endif

            <table>
              <tr style="background-color: gray;">
                  <td style="padding:20px;">Title</td>
                  <td style="padding:20px;">Description</td>
                  <td style="padding:20px;">Quntity</td>
                  <td style="padding:20px;">Price</td>
                  <td style="padding:20px;">Image</td>
                  <td style="padding:20px;">Update</td>
                  <td style="padding:20px;">Delete</td>
              </tr>  
                @foreach($data as $product)
              <tr align="center" style="background-color: black;">
                  <td>{{$product->title}}</td>
                  <td>{{$product->description}}</td>
                  <td>{{$product->quntity}}</td>
                  <td>{{$product->price}}</td>
                  <td><img height="100px" width="100px" src="/productimage/{{$product->image}}" alt=""></td>
                  <td><a class="btn btn-primary" href="{{url('updateview',$product->id)}}">Update</a></td>  
                  <td><a class="btn btn-danger" onclick="return confirm('Are you sure')" href="{{url('deleteproduct',$product->id)}}">Delete</a></td>  

                </tr>  
               @endforeach 

            </table>

        </div>
        </div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>