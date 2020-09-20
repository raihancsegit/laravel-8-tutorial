<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>

    <div style="padding:40px"></div>
    
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2">
           
            <div class="col-md-8">
                @if(session('update'))
                <div class="alert alert-primary" role="alert">
                   {{session('update')}}
                </div>
              @endif
              @if(session('delete'))
              <div class="alert alert-primary" role="alert">
                 {{session('delete')}}
              </div>
            @endif
              <div class="card">
                <div class="card-header">
                    View Student Info
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Class</th>
                            <th scope="col">Roll</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($result as $row)
                          <tr>
                          <th scope="row">{{$row->id}}</th>
                            <td>{{$row->name}}</td>
                            <td>{{$row->class}}</td>
                            <td>{{$row->roll}}</td>
                            <td>
                            <a href="{{url('student/delete/'.$row->id)}}" class="btn btn-danger">Delete</a>

                            <a href="{{url('student/edit/'.$row->id)}}" class="btn btn-info">Edit</a>
                                
                            
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                  <div class="card-header">
                      Add Student Info
                  </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-primary" role="alert">
                           {{session('success')}}
                        </div>
                      @endif
                    <form action={{url('student/add')}} method="post">
                        @csrf
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp">

                          @error('name')
                          <strong class="text-danger">{{$message}}</strong>
                          @enderror
                        </div>

                        <div class="form-group">
                            <label for="class">Class</label>
                            <input type="text" name="class" class="form-control @error('class') is-invalid @enderror" id="class" aria-describedby="emailHelp">

                            @error('class')
                          <strong class="text-danger">{{$message}}</strong>
                          @enderror
                          </div>

                          <div class="form-group">
                            <label for="roll">Roll</label>
                            <input type="number" name="roll" class="form-control @error('roll') is-invalid @enderror" id="roll" aria-describedby="emailHelp">
                            @error('roll')
                          <strong class="text-danger">{{$message}}</strong>
                          @enderror
                          </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
              </div>
            </div>
        
          </div>
    </div>

</body>
</html>