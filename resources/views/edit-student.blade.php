<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <style>
 *{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background: rgba( 71, 147, 227, 1);
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
             <div class="col-md-12">
             <h2 class="table-heading"> Edit Student </h2>
             @if(Session::has('success'))
             <div class="alert alert-sucess" role="alert">
                {{Session::get('success')}}
             </div>
             @endif
             <form method="post" action="{{url('update-student')}}">  
             @csrf 
             <div class="md-3">
                <label class="form-lebel">ID no</label>
                <input type="number" class="form-control" name="id"
                placeholder="Enter your First Name" value="{{($data->id)}}">
                @error('id')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="md-3">
                <label class="form-lebel">First Name</label>
                <input type="text" class="form-control" name="firstname"
                placeholder="Enter your First Name" value="{{$data->firstname}}">
                @error('firstname')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="md-3">
                <label class="form-lebel">Sur Name</label>
                <input type="text" class="form-control" name="surname"
                placeholder="Enter your Surname" value="{{$data->surname}}">
                @error('surname')
                <div class="alert alert-danger" role="alert" >
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="md-3">
                <label class="form-lebel">Last Name</label>
                <input type="text" class="form-control" name="lastname"
                placeholder="Enter your Last Name" value="{{$data->lastname}}">
                @error('lastname')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="md-3">
                <label class="form-lebel">Email</label>
                <input type="email" class="form-control" name="email"
                placeholder="Enter your Email" value="{{$data->email}}">
                @error('email')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="md-3">
                <label class="form-lebel">Phone</label>
                <input type="number" class="form-control" name="phone"
                placeholder="Enter your Phone No." value="{{$data->phone}}">
                @error('phone')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="md-3">
                <label class="form-lebel">Address</label>
                <textarea class="form-control" name="address"
                placeholder="Enter your Address">{{$data->address}} </textarea>
                @error('address')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
              <br>
            </div>
            <button type="submit" class=btn btn-primary"> Submit </button>
            <a href="{{url('student-list')}}" class="btn btn-danger"> Back </a>
</form>
           
            </div>
        </div>
    </div>
</div>
</body>
</html>