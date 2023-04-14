<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Register Form</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style>
        
*{
  margin: 0;
  padding: 0;
  border-radius: 5px;
  box-sizing: border-box;
}
body{
  height: 100vh;
  display: flex;
  align-items: center;
  text-align: center;
  font-family: sans-serif;
  justify-content: center;
  background: url(bg.jpg);
  background-size: cover;
  background-position: center;
}
.container{
  position: relative;
  width: 400px;
  background: white;
  padding: 60px 40px;
}
header{
  font-size: 40px;
  margin-bottom: 60px;
  font-family: 'Montserrat', sans-serif;
}
.input-field, form .button{
  margin: 25px 0;
  position: relative;
  height: 50px;
  width: 100%;
}
.input-field input{
  height: 100%;
  width: 100%;
  border: 1px solid silver;
  padding-left: 15px;
  outline: none;
  font-size: 19px;
  transition: .4s;
}
input:focus{
  border: 1px solid #1DA1F2;
}
.input-field label, span.show{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.input-field label{
  left: 15px;
  pointer-events: none;
  color: grey;
  font-size: 18px;
  transition: .4s;
}
span.show{
  right: 20px;
  color: #111;
  font-size: 14px;
  font-weight: bold;
  cursor: pointer;
  user-select: none;
  visibility: hidden;
  font-family: 'Open Sans', sans-serif;
}
input:valid ~ span.show{
  visibility: visible;
}
input:focus ~ label,
input:valid ~ label{
  transform: translateY(-33px);
  background: white;
  font-size: 16px;
  color: #1DA1F2;
}
form .button{
  margin-top: 30px;
  overflow: hidden;
  z-index: 111;
}
.button .inner{
  position: absolute;
  height: 100%;
  width: 300%;
  left: -100%;
  z-index: -1;
  transition: all .4s;
  background: -webkit-linear-gradient(right,#00dbde,#fc00ff,#00dbde,#fc00ff);
}
.button:hover .inner{
  left: 0;
}
.button button{
  width: 100%;
  height: 100%;
  border: none;
  background: none;
  outline: none;
  color: white;
  font-size: 20px;
  cursor: pointer;
  font-family: 'Montserrat', sans-serif;
}
.container .auth{
  margin: 35px 0 20px 0;
  font-size: 19px;
  color: grey;
}
.links{
  display: flex;
  cursor: pointer;
}
.facebook, .google{
  height: 40px;
  width: 100%;
  border: 1px solid silver;
  border-radius: 3px;
  margin: 0 10px;
  transition: .4s;
}
.facebook:hover{
  border: 1px solid #4267B2;
}
.google:hover{
  border: 1px solid #dd4b39;
}
.facebook i, .facebook span{
  color: #4267B2;
}
.google i, .google span{
  color: #dd4b39;
}
.links i{
  font-size: 23px;
  line-height: 40px;
  margin-left: -90px;
}
.links span{
  position: absolute;
  font-size: 17px;
  font-weight: bold;
  padding-left: 8px;
  font-family: 'Open Sans', sans-serif;
}
.signup{
  margin-top: 50px;
  font-family: 'Noto Sans', sans-serif;
}
.signup a{
  color: #3498db;
  text-decoration: none;
}
.signup a:hover{
  text-decoration: underline;
}
        </style>
   </head>
   <body>
      <div class="container">
         <header>Edit Registrar Form </header>
         @if(Session::has('success'))
             <div class="alert alert-sucesss" role="alert">
                {{Session::get('success')}}
             </div>
             @endif
             <form method="post" action="{{url('update-registrar')}}">  
             @csrf 
            <div class="input-field">
               <input type="number" required name="id" value="{{$data->id}}">
               @error('id')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
               <label>Registrar ID</label>
            </div>
            <div class="input-field">
               <input type="text" required name="username" value="{{$data->username}}">
               <label>Username </label>
               @error('username')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="input-field">
               <input type="text" required name="firstname" value="{{$data->firstname}}">
               <label> First Name</label>
               @error('firstname')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="input-field">
               <input type="text" required name="lastname" value="{{$data->lastname}}">
               <label> Last Name</label>
               @error('lastname')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="input-field">
               <input type="email" required name="email" value="{{$data->email}}">
               <label> Email</label>
               @error('email')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="input-field">
               <input class="pswrd" type="password" required name="password" value="{{$data->password}}">
               <span class="show">SHOW</span>
               <label>Password</label>
               @error('password')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="button">
               <div class="inner"></div>
               <button type="submit" class=btn btn-primary"> Update</button>
               @if(Session::has('successs'))
             <div class="alert alert-sucess" role="alert">
                {{Session::get('successs')}}
             </div>
             @endif
            </div>
            <div class="button">
               <div class="inner"></div>
               <button type="submit" class=btn btn-primary"> <a href="{{url('admin-list')}}"> Go Back </a> </button>
            </div>
         </form>
      <script>
         var input = document.querySelector('.pswrd');
         var show = document.querySelector('.show');
         show.addEventListener('click', active);
         function active(){
           if(input.type === "password"){
             input.type = "text";
             show.style.color = "#1DA1F2";
             show.textContent = "HIDE";
           }else{
             input.type = "password";
             show.textContent = "SHOW";
             show.style.color = "#111";
           }
         }
      </script>
   </body>
</html>