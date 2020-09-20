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
            

            <div class="col-md-8 m-auto">
              <div class="card">
                  <div class="card-header">
                      Update Student Info
                  </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-primary" role="alert">
                           {{session('success')}}
                        </div>
                      @endif
                    <form action={{url('student/update/'.$result->id)}} method="post">
                        @csrf
                        <div class="form-group">
                          <label for="name">Name</label>
                        <input type="text" name="name" value="{{$result->name}}" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp">

                          @error('name')
                          <strong class="text-danger">{{$message}}</strong>
                          @enderror
                        </div>

                        <div class="form-group">
                            <label for="class">Class</label>
                            <input type="text" name="class" value="{{$result->class}}" class="form-control @error('class') is-invalid @enderror" id="class" aria-describedby="emailHelp">

                            @error('class')
                          <strong class="text-danger">{{$message}}</strong>
                          @enderror
                          </div>

                          <div class="form-group">
                            <label for="roll">Roll</label>
                            <input type="number" name="roll" value="{{$result->roll}}" class="form-control @error('roll') is-invalid @enderror" id="roll" aria-describedby="emailHelp">
                            @error('roll')
                          <strong class="text-danger">{{$message}}</strong>
                          @enderror
                          </div>
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                </div>
              </div>
            </div>
        
          </div>
    </div>

</body>
</html>