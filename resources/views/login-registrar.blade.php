<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Registrar Monitoring System</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
  background: -webkit-linear-gradient(right,#3f4e4f,#c17f5e,#8b7e74,#dc8965);
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
         <header>Registrar Monitor System</header>
         <form method="post" action="{{url('log-registrars')}}">  
         @if(Session::has('success'))
             <div class="alert alert-sucess" role="alert">
                {{Session::get('success')}}
             </div>
             @endif
             @if(Session::has('failed'))
             <div class="alert alert-danger" role="alert">
                {{Session::get('failed')}}
             </div>
             @endif
         @csrf
         <br>
            <div class="input-field">
               <input type="email" required name="email" value="{{old('email')}}">
               <label>Email</label>
               @error('email')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="input-field">
               <input class="pswrd" type="password" required name="password" value="{{old('password')}}">
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
               <button> LOGIN  </button>
            </div>
         </form>  
         <div class="auth">
            Visit us 
         </div>
         <div class="links">
            <div class="facebook">
               <i class="fab fa-facebook-square"><span><a href="https://www.facebook.com/Midoyoki/">Facebook</a></span></i>
            </div>
            <div class="google">
               <i class="fab fa-instagram-square"><span><a href="https://www.instagram.com/Midoyoki/">Instagram</a></span></i>
            </div>
         </div>
         <div class="signup">
            Not a member? <a href="{{url('register-registrar')}}">Signup now</a>
         </div>
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