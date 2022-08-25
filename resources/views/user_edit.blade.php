<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update Product</title>
  </head>
  <body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Update Information</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>                    
                @endif
                <form action="{{url('user_update')}}" method="POST">
                    @csrf
                    <div class="md-3">
                        <label for="id" class="form-label">Customer ID</label>
                        <input type="text" class="form-control" name="id" 
                               value="{{$data->customerID}}" readonly>
                    </div>
                    <div class="md-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pass" 
                               value="{{$data->customerPass}}">
                    </div>
                    <div class="md-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" 
                               value="{{$data->customerFullname}}">
                    </div>
                    <div class="md-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" 
                               value="{{$data->customerAddress}}">
                    </div>
                    <div class="md-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email"
                               value="{{$data->customerEmail}} ">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{url('user')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>