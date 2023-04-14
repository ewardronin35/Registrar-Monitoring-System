<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <style>
    .col-md-12 h2:first-child {
    border-top: 10px;
    border-bottom: 5px solid black;
}
.container {
    margin-top:20px;
}
.table-heading {
    margin-bottom: 20px;
}
.list {
    margin-bottom: 50px;
    width: 100%;
    border-collapse: collapse;
}

.list th, .list td {
    padding: 10px;
    text-align: center;
    border: 1px solid black;
}

.list th {
    background-color: #e8e8e8;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
             <div class="col-md-12">
             <h2 class="table-heading"> Add Student Project </h2>
             @if(Session::has('success'))
             <div class="alert alert-sucess" role="alert">
                {{Session::get('success')}}
             </div>
             @endif
             <form method="post" action="{{url('save-student')}}">  
             @csrf 
            <div class="md-3">
                <label class="form-lebel">First Name</label>
                <input type="text" class="form-control" name="firstname"
                placeholder="Enter your First Name" value="{{old('name')}}">
                @error('firstname')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="md-3">
                <label class="form-lebel">Sur Name</label>
                <input type="text" class="form-control" name="surname"
                placeholder="Enter your Surname" value="{{old('surname')}}">
                @error('surname')
                <div class="alert alert-danger" role="alert" >
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="md-3">
                <label class="form-lebel">Last Name</label>
                <input type="text" class="form-control" name="lastname"
                placeholder="Enter your Last Name" value="{{old('lastname')}}">
                @error('lastname')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="md-3">
                <label class="form-lebel">Email</label>
                <input type="email" class="form-control" name="email"
                placeholder="Enter your Email" value="{{old('email')}}">
                @error('email')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="md-3">
                <label class="form-lebel">Phone</label>
                <input type="number" class="form-control" name="phone"
                placeholder="Enter your Phone No." value="{{old('phone')}}">
                @error('phone')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="md-3">
                <label class="form-lebel">Address</label>
                <textarea class="form-control" name="address"
                placeholder="Enter your Address">{{old('address')}} </textarea>
                @error('address')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
              <br>
            </div>
            <div class="md-3">
                <label class="form-lebel">Form 137</label>
                <input type="text" class="form-control" name="form137"
                placeholder="Has Form 137?" value="{{old('form137')}}">
                @error('form137')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="md-3">
                <label class="form-lebel">Enrollment Form</label>
                <input type="text" class="form-control" name="enrollmentform"
                placeholder="Has Enrollment Form?" value="{{old('enrollmentform')}}">
                @error('enrollmentform')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="md-3">
                <label class="form-lebel">Tuition</label>
                <input type="text" class="form-control" name="paid"
                placeholder="Paid the tuition?" value="{{old('paid')}}">
                @error('paid')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <br>
            <button type="submit" class=btn btn-primary"> Submit </button>
            <a href="{{url('student-list')}}" class="btn btn-danger"> Back </a>
</form>
           
            </div>
        </div>
    </div>
</div>
</body>
</html>