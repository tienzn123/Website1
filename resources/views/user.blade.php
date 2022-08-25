<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Customer</title>
  </head>
  <body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Customer Infomation List</h2>
                @if (Session::has('success'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Pass</th>
                            <th>Full name</th>
                            <th>Address</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{$row->customerID}}</td>
                            <td>{{$row->customerPass}}</td>
                            <td>{{$row->customerFullname}}</td>
                            <td>{{$row->customerAddress}}</td>
                            <td>{{$row->customerEmail}}</td>
                            <td>
                                <a href="{{url('user_edit/' . $row->customerID)}}" class="btn btn-primary">Edit</a>
                                <a href="{{url('user_delete/' . $row->customerID)}}" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?');">Delete</a>
                            </td>
                        </tr>
                        @endforeach    
                    </tbody>

                </table>
            </div>
        </div>
    </div>  
  </body>
</html>