<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <style>
 html,
body {
	height: 100%;
}

body {
	margin: 0;
	background: linear-gradient(45deg, #49a09d, #5f2c82);
	font-family: sans-serif;
	font-weight: 100;
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

table {
	width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: left;
}

thead {
	th {
		background-color: #55608f;
	}
}

tbody {
	tr {
		&:hover {
			background-color: rgba(255,255,255,0.3);
		}
	}
	td {
		position: relative;
		&:hover {
			&:before {
				content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
		}
	}
}
    </style>
    <title>Student Lists</title>
</head>
<body>
    <div class="container">
        <div class="row">
             <div class="col-md-12">
             <h2 class="table-heading"> Student Lists Project </h2>
             <a href="{{url('add-student')}}" class="btn btn-primary"> Add Student </a>
             <a href="{{url('login-registrar')}}" class="btn btn-primary"> Log Out </a>
             <br> </br>
             @if(Session::has('success'))
             <div class="alert alert-sucess" role="alert">
                {{Session::get('success')}}
             </div>
             @endif
            <table class="list">
            <thead> <tr style="border: 1px solid black;">
                <th>Student ID No.</th>
                <th>First Name</th>
                <th>Surname</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Form 137 </th>
                <th>Paid</th>
                <th>Created at </th>
                <th>Updated at </th>
                <th>Action</th>
                
</tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @foreach ($data as $stu)
                     <tr>
                            <td>{{$i++}}</td>
                            <td>{{$stu->firstname}}</td>
                            <td>{{$stu->surname}}</td>
                            <td>{{$stu->lastname}}</td>
                            <td>{{$stu->email}}</td>
                            <td>{{$stu->phone}}</td>
                            <td>{{$stu->address}}</td>
                            <td>{{$stu->form137}}</td>
                            <td>{{$stu->paid}}</td>
                            <td>{{$stu->created_at}}</td>
                            <td>{{$stu->updated_at}}</td>

                            <td><a href="{{url('edit-student/'.$stu->id)}}" class="btn btn-primary"> Edit </a>  | <a href="{{url('delete-student/'.$stu->id)}}" class="btn btn-danger"> Delete </a> </td>
                </tr>
                @endforeach
        
        </tbody>
</table>
            </div>
        </div>
    </div>
</div>
</body>
</html>