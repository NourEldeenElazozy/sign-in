
@section('css')
@endsection
    <style>
       
        @import url('https://fonts.googleapis.com/css?family=Cairo:1,1');
 

        /* dropdown */
        .topnav {
  background-color: #daae51;
  overflow: hidden;
  
}

/* Style the links inside the navigation bar */

/* Add an active class to highlight the current page */


/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}
.header-logo {
  margin-left: auto;
}
/* Dropdown container - needed to position the dropdown content */


/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
 
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #daae51;
  color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #daae51;
  color: rgb(255, 251, 251);
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: center;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: center;
  }
}

             /* dropdown */
 * {
     box-sizing: border-box;
 }
 *{
  margin:0;
  padding:0;

  font-family: 'Cairo', sans-serif;
  
}
.nav {
  direction: rtl; /* Add direction for menu */
  display: flex;
  list-style: none;
    display: inline-block;
    text-align: center;
}

.nav>li {
    direction: rtl; 
  padding: .5em;
  
}
#abc{
  width:100%;
  height:100vh;
  background-image: url(img2.jpg);
  background-size: cover;
  
  
}
nav{
  width: 100%;
  height: 50px;
  background-color: #0005;
  line-height: 50px;
  
}
nav ul{
  float: right;
  margin-right: 30px;
  direction: rtl; 
  
}
nav ul li{
  list-style-type: none;
  display: inline-block;
  transition: 0.7s all;
  direction: rtl; 

}
nav ul li:hover{
  background-color:#daae51;
}
nav ul li a{
  text-decoration: none;
  color: #fff;
  padding: 30px;
  
}
 body {
    background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
     display: flex;
     justify-content: center;
     align-items: center;
     flex-direction: column;
     font-family: 'Cairo', sans-serif;
     height: 100vh;
     margin: -20px 0 50px;
     
 }
 .placeholder{
    font-family: 'Cairo', sans-serif;
 }
 ::-webkit-input-placeholder { /* Chrome/Opera/Safari */

  font-family: 'Cairo', sans-serif;
}
::-moz-placeholder { /* Firefox 19+ */

  font-family: 'Cairo', sans-serif;
}
:-ms-input-placeholder { /* IE 10+ */
  
  font-family: 'Cairo', sans-serif;
}
:-moz-placeholder { /* Firefox 18- */
 
  font-family: 'Cairo', sans-serif;
}
 h1 {
     font-weight: bold;
     margin: 0;
  
 }
 
 h2 {
     text-align: center;
 }
 
 p {
     font-size: 14px;
     font-weight: 100;
     line-height: 20px;
     letter-spacing: 0.5px;
     margin: 20px 0 30px;
 }
 
 span {
     font-size: 12px;
 }
 
 a {
     color: #333;
     font-size: 14px;
     text-decoration: none;
     margin: 15px 0;
 }
 
 button {
     border-radius: 20px;
     border: 1px solid #FF4B2B;
     background-color: #FF4B2B;
     color: #FFFFFF;
     font-size: 12px;
     font-weight: bold;
     padding: 12px 45px;
     letter-spacing: 1px;
     text-transform: uppercase;
     transition: transform 80ms ease-in;
     font-family: 'Cairo', sans-serif;
 }
 
 button:active {
     transform: scale(0.95);
 }
 
 button:focus {
     outline: none;
 }
 
 button.ghost {
     background-color: transparent;
     border-color: #FFFFFF;
 }
 
 .login_form {
     background-color: #FFFFFF;
     display: flex;
     align-items: center;
     justify-content: center;
     flex-direction: column;
     padding: 0 50px;
     height: 100%;
     text-align: center;
 }
 
 input {
     background-color: #eee;
     border: none;
     padding: 12px 15px;
     margin: 8px 0;
     width: 100%;
     text-align: right; 
     border: none;"
     font-family: 'Cairo', sans-serif;
 }
 
 .container {
     background-color: #fff;
     border-radius: 10px;
       box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
             0 10px 10px rgba(0,0,0,0.22);
     position: sticky;
     overflow: hidden;
     width: 768px;
     max-width: 100%;
     min-height: 480px;
 }
 
 .form-container {
     position: absolute;
     top: 0;
     height: 100%;
     transition: all 0.6s ease-in-out;
 }
 
 .sign-in-container {
     left: 0;
     width: 50%;
     z-index: 2;
 }
 
 .container.right-panel-active .sign-in-container {
     transform: translateX(100%);
 }
 
 .sign-up-container {
     left: 0;
     width: 50%;
     opacity: 0;
     z-index: 1;
 }
 
 .container.right-panel-active .sign-up-container {
     transform: translateX(100%);
     opacity: 1;
     z-index: 5;
     animation: show 0.6s;
 }
 
 @keyframes show {
     0%, 49.99% {
         opacity: 0;
         z-index: 1;
     }
     
     50%, 100% {
         opacity: 1;
         z-index: 5;
     }
 }
 
 .overlay-container {
     position: absolute;
     top: 0;
     left: 50%;
     width: 50%;
     height: 100%;
     overflow: hidden;
     transition: transform 0.6s ease-in-out;
     z-index: 100;
 }
 
 .container.right-panel-active .overlay-container{
     transform: translateX(-100%);
 }
 
 .overlay {
     background: #FF416C;
     background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
     background: linear-gradient(to right, #FF4B2B, #FF416C);
     background-repeat: no-repeat;
     background-size: cover;
     background-position: 0 0;
     color: #FFFFFF;
     position: relative;
     left: -100%;
     height: 100%;
     width: 200%;
       transform: translateX(0);
     transition: transform 0.6s ease-in-out;
 }
 
 .container.right-panel-active .overlay {
       transform: translateX(50%);
 }
 
 .overlay-panel {
     position: absolute;
     display: flex;
     align-items: center;
     justify-content: center;
     flex-direction: column;
     padding: 0 40px;
     text-align: center;
     top: 0;
     height: 100%;
     width: 50%;
     transform: translateX(0);
     transition: transform 0.6s ease-in-out;
 }
 
 .overlay-left {
     transform: translateX(-20%);
 }
 
 .container.right-panel-active .overlay-left {
     transform: translateX(0);
 }
 
 .overlay-right {
     right: 0;
     transform: translateX(0);
 }
 
 .container.right-panel-active .overlay-right {
     transform: translateX(20%);
 }
 
 .social-container {
     margin: 20px 0;
 }
 
 .social-container a {
     border: 1px solid #DDDDDD;
     border-radius: 50%;
     display: inline-flex;
     justify-content: center;
     align-items: center;
     margin: 0 5px;
     height: 10px;
     width: 40px;
 }
 
 footer {
    
     color: #fff;
     font-size: 12px;
     bottom: 0;
     position: fixed;
     left: 0;
     right: 0;
     text-align: center;
     z-index: 999;
 }
 
 footer p {
     margin: 10px 0;
 }
 
 footer i {
     color: red;
 }
 
 footer a {
     color: #3c97bf;
     text-decoration: none;
 }
     </style>
 

 
     <!-- breadcrumb -->
     
     <!-- breadcrumb -->
 
 
 <br>
     <div id="abc">
        <nav>
            
            <ul>
              
                <li><a href="#">الرئيسية</a></li>
                <li>
                <div class="dropdown">
                    <a href="#" class="dropbtn">انشطة</a>
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="#">الأنشطة السابقة</a>
                      <a href="#">الأنشطة القادمة</a>
             
                    </div>
                  </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a href="#" class="dropbtn">احداث</a>
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                          <a href="#">اقسام الأحداث</a>
                          <a href="#">ابرز الأحداث</a>
                 
                        </div>
                      </div>
                    </li>
                <li><a href="#">من نحن</a></li>
            
            </ul>
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img class="img-responsive" src="{{URL::asset('EVENTAT.0.png')}}" style="width: 17%">
                </a>
            </div>
          
        </nav>
    </div>
 <div class="container" id="container">
     <div class="form-container sign-up-container"  style="height: 20%">
       
     </div>
     <div class="form-container sign-in-container">
         <form class="login_form" action="#">
             <h1 >تسجيل الدخول</h1>
             
            
           
             <input type="email" placeholder="اسم المستخدم" />
             <input type="password" placeholder="كلمة المرور" />
             <a href="#">نسيت كلمة المرور؟</a>
             <button >دخول</button>
         </form>
     </div>
     <div class="overlay-container">
         <div class="overlay">
             <div class="overlay-panel overlay-left">
              
                 <button class="ghost" id="signIn">Sign In</button>
             </div>
             <div class="overlay-panel overlay-right">
                 <h1>لست عضو؟</h1>
                 <p>
                    أدخل بياناتك الشخصية وابدأ الرحلة معنا</p>
               
                    <form class="signup_form" action="#">
                      
                        
                       
                      
                        <input type="text" placeholder="اسم المستخدم" />
                        <input type="email" placeholder="البريد الإلكتروني" />
                        <input type="password" placeholder="كلمة المرور" />
                      
                       
                    </form>
                 <button class="ghost" id="signUp">التسجيل</button>
             </div>
         </div>
     </div>
 </div>
 
 <footer class="footer footer-transparent">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  جميع الحقوق محفوظة لمنصة ايفنتات
 
  </div>
  <!-- Copyright -->
</footer>
 
 @section('js')
     <!--Internal  Chart.bundle js -->
     <script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
 
 
     <script type="text/javascript">
       const signUpButton = document.getElementById('signUp');
 const signInButton = document.getElementById('signIn');
 const container = document.getElementById('container');
 
 signUpButton.addEventListener('click', () => {
     container.classList.add("right-panel-active");
 });
 
 signInButton.addEventListener('click', () => {
     container.classList.remove("right-panel-active");
 });
     </script>
 
 
 @endsection