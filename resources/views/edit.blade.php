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
                <h2>Update product</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>                    
                @endif
                <form action="{{url('update')}}" method="POST">
                    @csrf
                    <div class="md-3">
                        <label for="id" class="form-label">Product ID</label>
                        <input type="text" class="form-control" name="id" 
                               value="{{$data->productID}}" readonly>
                    </div>
                    <div class="md-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" 
                               value="{{$data->productName}}">
                    </div>
                    <div class="md-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" 
                               value="{{$data->productPrice}}">
                    </div>
                    <div class="md-3">
                        <label for="details" class="form-label">Details</label>
                        <textarea name="details" class="form-control">
                            {{$data->productDetails}}
                        </textarea>
                    </div>
                    <div class="md-3">
                        <label for="image1" class="form-label">Image 1</label>
                        <input type="file" class="form-control" name="image1">
                    </div>
                    <div class="md-3">
                        <label for="producer" class="form-label">Producer</label>
                        <select name="producer" class="form-control">
                            @foreach ($producers as $row)
                                <option value="{{$row->producerID}}" {{$row->producerID == $data->producerID ? 'selected' : ''}}>
                                    {{$row->producerName}}
                                </option>
                            @endforeach
                        </select>
                    </div> <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{url('list')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>