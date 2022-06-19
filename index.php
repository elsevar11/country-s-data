<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clock</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap">
    <style>
           
      
      * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
   
html {
    font-size: 16px;
    font-family: 'Roboto', sans-serif;
    
}

li {
    list-style: none;
}

a {
    text-decoration: none;
}
.header{
    border-bottom: 1px solid #E2E8F0;
  /* background:#333333; */
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 1.5rem;
}
.hamburger {
    display: none;
}

.bar {
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px auto;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    background-color: #101010;
}
.nav-menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-item {
    margin-left: 5rem;
}

.nav-link{
    font-size: 17px;
    font-weight: 400;
    color: #475569;
}

.nav-link:hover{
    color: #482ff7;
}

.nav-logo {
    font-size: 30px;
    font-weight: 500;
    color: #482ff7;
}
@media only screen and (max-width: 768px) {
    .nav-menu {
        position: fixed;
        left: -100%;
        top: 5rem;
        flex-direction: column;
        background-color: #fff;
        width: 100%;
        border-radius: 10px;
        text-align: center;
        transition: 0.3s;
        box-shadow:
            0 10px 27px rgba(0, 0, 0, 0.05);
    }

    .nav-menu.active {
        left: 0;
        z-index: 1000;
    }

    .nav-item {
        margin: 2.5rem 0;
    }

    .hamburger {
        display: block;
        cursor: pointer;
    }
    .hamburger.active .bar:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active .bar:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
    }

    .hamburger.active .bar:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
    }


}
#contact {
  background: #24262b;
  padding: 70px 0;
}

#contact .container-footer {
  max-width: 1170px;
  margin: auto;
}

#contact .container-footer .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

#contact .container-footer .row .col {
  width: 25%;
  padding: 0 15px;
}

#contact .container-footer .row .col h5 {
  color: #fff;
  font-size: 18px;
  margin-bottom: 35px;
  text-transform: capitalize;
  font-weight: 500;
  position: relative;
}

#contact .container-footer .row .col ul {
  list-style-type: none;
}

#contact .container-footer .row .col ul li a {
  text-decoration: none;
  color: #bbbbbb;
  font-size: 16px;
  text-transform: capitalize;
  font-weight: 300;
  display: block;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

#contact .container-footer .row .col ul li a:hover {
  color: #fff;
  padding-left: 10px;
}

#contact .container-footer .row .col ul li:not(:last-child) {
  margin-bottom: 10px;
}

#contact .container-footer .row .col .social-links a {
  display: inline-block;
  height: 40px;
  width: 40px;
  background-color: rgba(255, 255, 255, 0.2);
  margin: 0 10px 10px 0;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: #fff;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#contact .container-footer .row .col .social-links a:hover {
  color: #24262b;
  background-color: #fff;
}

#contact .container-footer .row .col p {
  color: #fff;
  font-size: 15px;
  padding: 10px 10px 10px 0;
}

#contact .container-footer .row .col p span {
  font-size: 13px;
  color: #bbbbbb;
}

#contact .container-footer .row .col h5::before {
  content: '';
  position: absolute;
  left: 0;
  bottom: -10px;
  background-color: #e91e63;
  height: 2px;
  width: 50px;
}

@media (max-width: 500px) {
  #contact .container-footer .row .col {
    width: 100%;
    padding: 15px 15px;
  }
}
#hov {
    position: absolute;
    top: 0;
    left: 0;
    background: url(/gfx/free-logo.png) rgba(255,255,255,0.8);
    background: url(/gfx/free-logo.svg),linear-gradient(rgba(255,255,255,0.8),rgba(255,255,255,0.8));
    background-size: cover;
    background-repeat: no-repeat;
    display: none !important;
}
.menu{
  display:flex;
  align-items:center;
  justify-content:space-around;
  background:#176DB3;
  height:100px;
}
.menu h3,p{
  color:#fff;
}
.menu h3{
  font-size:33px;
}
.searchTerm{
    height:30px;
    width:300px;
    border:1px solid #fff;

    padding-left:10px;
    outline:none;
}
.searchButton{
  height:32px;
  width:30px;
  background:#2275D7;
  border:none;
color:#fff;
}
.contanier{
  display:flex;
 justify-content:space-evenly;
  align-items:center;
  margin-left:50px;
  margin-right:50px;
  margin-top:50px;
  margin-bottom:50px;
  
}
.contanier h4{
  font-size:24px;
}
.contanier .display-box{
  border:none;
}
.contanier p{
  color:#5582CF;
  margin-top:2px;
  font-size:14px
}
.contanier .card{
 
  /* width:300px; */
  
}
.display-box{
  font-size:20px;

}
.contanier iframe{
  margin-top:10px;
}
.qites ul{
  display:flex;
  justify-content:space-evenly;
}
.qites ul li a{


  appearance: none;
  background-color: #FFFFFF;
  border-width: 0;
  box-sizing: border-box;
  color: #000000;
  cursor: pointer;
  display: inline-block;
  font-family: Clarkson,Helvetica,sans-serif;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 0;
  line-height: 1em;
  margin: 0;
  opacity: 1;
  outline: 0;
  padding: 1.5em 2.2em;
  position: relative;
  text-align: center;
  text-decoration: none;
  text-rendering: geometricprecision;
  text-transform: uppercase;
  transition: opacity 300ms cubic-bezier(.694, 0, 0.335, 1),background-color 100ms cubic-bezier(.694, 0, 0.335, 1),color 100ms cubic-bezier(.694, 0, 0.335, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  white-space: nowrap;
}

.qites ul li a:before {
  animation: opacityFallbackOut .5s step-end forwards;
  backface-visibility: hidden;
  background-color: #EBEBEB;
  clip-path: polygon(-1% 0, 0 0, -25% 100%, -1% 100%);
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  transform: translateZ(0);
  transition: clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1), -webkit-clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1);
  width: 100%;
}

.qites ul li a:hover:before {
  animation: opacityFallbackIn 0s step-start forwards;
  clip-path: polygon(0 0, 101% 0, 101% 101%, 0 101%);
}

.qites ul li a:after {
  background-color: #FFFFFF;
}

.qites ul li a span {
  z-index: 1;
  position: relative;
 
}
.countries1,.countries2,.countries3,.countries4,.countries5,.countries6{
  display:none;

}
h2{
  text-align:center;
}
table tr{
  text-align:center;


}
select option{
  padding:10px;

}
select{
  border:none;
  overflow-y: auto;
}
 .table{
  display:flex;
  justify-content:center;

}
.box{
  margin:10px auto;
  display:flex;
  flex-direction:column;
}
tr{
  width:200px;
}
/* input[type=radio] {
  opacity: 0;
} */
.data{
  display:block;
  margin: 50px 100px;
}
.data div p{
  color:#000;
  margin-top:10px;
  
}


.nts{
  position: relative;
  display: inline-flex;
  width: 180px;
  height: 55px;
  margin: 50px 100px;
  perspective: 1000px;
  cursor:pointer;
}
.nts a{
  font-size: 19px;
  letter-spacing: 1px;
  transform-style: preserve-3d;
  transform: translateZ(-25px);
  transition: transform .25s;
  font-family: 'Montserrat', sans-serif;
  
}
.nts a:before,
.nts a:after{

  content:'BACK';
  height: 55px;
  width: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 5px solid #176DB3;
  box-sizing: border-box;
  border-radius: 5px;
}
.nts a:before{
  color: #fff;
  background: #176DB3;
  transform: rotateY(0deg) translateZ(25px);
}
.nts a:after{
  color: #176DB3;
  transform: rotateX(90deg) translateZ(25px);
}
.nts a:hover{
  transform: translateZ(-25px) rotateX(-90deg);
}
.data i{
  color:#176DB3;
}

.data .span{
  color:red;
}
    </style>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <a href="index.html" class="nav-logo">Elsever</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="./clock.html" class="nav-link">country'clock</a>
                </li>
                <li class="nav-item">
                    <a href="countdown.html" class="nav-link">coundown</a>
                </li>
                <li class="nav-item">
                    <a href="sa.php" class="nav-link">weather</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
</header>




    <section>


  <div class="menu">
    <div class="wordl">
    <h3>The World Clock — Worldwide</h3>
    <p>Find current time, weather, sun, moon, and much more...</p>
    </div>
    <div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>  
  </div>
        <div class="contanier">
            <div class="card">
                <h4>Current  Time</h4><div> <img src="https://ipdata.co/flags/az.png" alt="France Flag"></div>
                <p><input class = "display-box" type="text" name="display" value="<?php 
             date_default_timezone_set('Asia/Baku');
               
                echo date('l');
                ?>" /></p>
                  <p><input class = "display-box" type="text" name="display" value="<?php 
             date_default_timezone_set('Europe/Paris');
               
                echo date("F j y");
                ?>" /></p>
                <p>Baku, Azerbaijan</p>
               <iframe src="https://free.timeanddate.com/clock/i8c3kdcy/n369/szw140/szh140/hbw0/cf100/hgr0" frameborder="0" width="140" height="140"></iframe>

            
               
           
            </div>
            
        <div class="card">
                <h4>Paris/France</h4><div> <img src="https://ipdata.co/flags/fr.png" alt="France Flag"></div>
                <p><input class = "display-box" type="text" name="display" value="<?php 
             date_default_timezone_set('Europe/Paris');
               
                echo date('l');
                ?>" /></p>
                  <p><input class = "display-box" type="text" name="display" value="<?php 
             date_default_timezone_set('Europe/Paris');
               
                echo date("F j y");
                ?>" /></p>
                <p>Europe/Paris</p>
                <iframe src="https://free.timeanddate.com/clock/i8c3otmp/n195/szw140/szh140/hbw0/cf100/hncfff" frameborder="0" width="140" height="140"></iframe>


            
               
           
            </div>
            <div class="card">
                <h4>Intanbul/Turkey</h4><div> <img src="https://ipdata.co/flags/tr.png" alt="France Flag"></div>
                <p><input class = "display-box" type="text" name="display" value="<?php 
             date_default_timezone_set('Europe/Istanbul');
               
                echo date('l');
                ?>" /></p>
                  <p><input class = "display-box" type="text" name="display" value="<?php 
             date_default_timezone_set('Europe/Istanbul');
               
                echo date("F j y");
                ?>" /></p>
                <p>Europe/Istanbul</p>
                <iframe src="https://free.timeanddate.com/clock/i8c3otmp/n107/szw140/szh140/hbw0/cf100/hncfff" frameborder="0" width="140" height="140"></iframe>


            
               
           
            </div>
            <div class="card">
                <h4>Chicago/America</h4><div> <img src="https://ipdata.co/flags/us.png" alt="France Flag"></div>
                <p><input class = "display-box" type="text" name="display" value="<?php 
             date_default_timezone_set('America/Chicago');
               
                echo date('l');
                ?>" /></p>
                  <p><input class = "display-box" type="text" name="display" value="<?php 
             date_default_timezone_set('America/Chicago');
               
                echo date("F j y");
                ?>" /></p>
                <p>Baku, Azerbaijan</p>
                <iframe src="https://free.timeanddate.com/clock/i8c3otmp/n64/szw140/szh140/hbw0/cf100/hncfff" frameborder="0" width="140" height="140"></iframe>


            
               
           
            </div>

    </section>

<section class="data">
                    <div>
                      <h3><i class="fa-solid fa-globe"></i>  <span class="span">Country: </span> <?php 
                     
                   
                     
                     
                      echo  $_POST['asia']; 
                     
                      
                    
                      ?></h3>
                      <p><i class="fa-solid fa-clock"></i>  <span class="span">Time: </span><?php 
                    
                      date_default_timezone_set($_POST["asia"]);
               
                      echo date('h:i:s a');
                       ?></p>
                      <p><i class="fa-solid fa-calendar-week"></i>  <span class="span">Week Day: </span><?php 
                  
                      date_default_timezone_set($_POST["asia"]);
               
                      echo date('l');
                       ?></p>
                       <p><i class="fa-solid fa-calendar-day"></i>  <span class="span">Day: </span><?php 
                  
                  date_default_timezone_set($_POST["asia"]);
                 
                   echo date("d");
                ?></p>
                <p><i class="fa-solid fa-calendar-days"></i>  <span class="span">Month: </span><?php 
                  
                  date_default_timezone_set($_POST["asia"]);
                 
                   echo date("F");
                ?></p>
                <p><i class="fa-solid fa-calendar"></i>  <span class="span">Year: </span><?php 
                  
                  date_default_timezone_set($_POST["asia"]);
                 
                   echo date("Y");  
                ?></p>
                  <p><i class="fa-solid fa-calendar-check"></i>  <span class="span">Day / Month / Year: </span><?php 
                  
                   date_default_timezone_set($_POST["asia"]);
                  
                    echo date("F j y");
                 ?></p>
          

                    </div>
                               
</section>


<div >
   
  <span class="nts"> <a href="./clock.php"></a></span> 
</div>
                

    <footer id="contact">

        <div class="container-footer">
        <div class="row">
          <div class="col">
            <h5>
            Company
            </h5>
             <ul>
               <li><a href="">About us</a></li>
               <li><a href="">Our services</a></li>
               <li><a href="">Privacy</a></li>
               <li><a href="">Contact</a></li>
              </ul>
          </div>
          <div class="col">
            <h5>Quick links</h5>
            <ul>
            <li><a href="/gallery/index.html">Home</a></li>
            <li><a href="/gallery/photos/design.html">Photo</a></li>
            <li><a href="#designs">Designs</a></li>
            <li><a href="contact">Contact</a></li>
          </ul>
          </div>
          <div class="col">
            <h5>
           Social media
            </h5>
            <div class="social-links">
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-discord"></i></a>
              <a href="#"><i class="fab fa-telegram"></i></a>
            </div>
          </div>
          <div class="col">
            <h5>
              Contact us 
            </h5>
            <p> 
              Call :  <span>+9940702334457</span>
            </p>
           
            <p>
              Email : <span>
                qasimovelsever11@gmail.com
              </span>
            </p>
            <p>
              Skype : <span>Elsever Qasimov</span>
            </p>
          </div>
        </div>
      </div>
      </footer>
      <script>
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");
        
        hamburger.addEventListener("click", mobileMenu);
        
        function mobileMenu() {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        }




        const country1=document.querySelector(".countries1");
        const qite1=document.querySelector(".text1");
        qite1.addEventListener("click",function(){
          country1.style.display="block";
          country2.style.display="none";
          country3.style.display="none";
          country4.style.display="none";
          country5.style.display="none";
          country6.style.display="none";
          
          console.log("Helolo")
        });
        const qite2=document.querySelector(".text2");
        const country2=document.querySelector(".countries2");
        qite2.addEventListener("click",function(){
          country2.style.display="block";
          country1.style.display="none";
         
          country3.style.display="none";
          country4.style.display="none";
          country5.style.display="none";
          country6.style.display="none";
          
        });
        const qite3=document.querySelector(".text3");
        const country3=document.querySelector(".countries3");
        qite3.addEventListener("click",function(){
          country3.style.display="block";
          country2.style.display="none";
          country1.style.display="none";
          country4.style.display="none";
          country5.style.display="none";
          country6.style.display="none";

        });
        const qite4=document.querySelector(".text4");
        const country4=document.querySelector(".countries4");
        qite4.addEventListener("click",function(){
          country4.style.display="block";
          country2.style.display="none";
          country3.style.display="none";
          country1.style.display="none";
          country5.style.display="none";
          country6.style.display="none";

        });
        const qite5=document.querySelector(".text5");
        const country5=document.querySelector(".countries5");
        qite5.addEventListener("click",function(){
          country5.style.display="block";
         
          country2.style.display="none";
          country3.style.display="none";
          country4.style.display="none";
          
          country1.style.display="none";
          country6.style.display="none";
        });

        const qite6=document.querySelector(".text6");
        const country6=document.querySelector(".countries6");
        qite6.addEventListener("click",function(){
          country6.style.display="block";
          country2.style.display="none";
          country3.style.display="none";
          country4.style.display="none";
          country5.style.display="none";
          country1.style.display="none";

        });
        // data=document.querySelector(".data");
        // btn=document.querySelectorAll(".btn");
        // for (var i = 0; i < btn.length; i++){
        // btn.addEventListener("click",function(e){
        //   console.log("Hello data")
        //   data.style.display="block";
        //   e.preventDefault();
        //   }
        // });

            </script>
            <script type="text/javascript">
        //        data=document.querySelector(".data");
        //   btn=document.querySelectorAll(".btn");
        // for (var i = 0; i < btn.length; i++){
        // btn.addEventListener("click",function(e){
        //   console.log("Hello data");
        //   data.style.display="block";
        //   e.preventDefault();
        //   }
        // });
                     data=document.querySelector(".data");
          btn=document.querySelector(".btn");
          btn.addEventListener("click",function(e){
            console.log("Hello data");
            data.style.display="block";
            e.preventDefault();
            }
          );
        
          

            </script>









</body>
</html>