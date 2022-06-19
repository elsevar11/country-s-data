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
  /* <!-- HTML !-->
<button class="button-48" role="button"><span class="text">Button 48</span></button> */

/* CSS */

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
input[type=radio] {
  opacity: 0;
}
.data{
  display:none;
}
.data div p{
  color:#000;
  margin-top:10px;
  
}





.btn
{
  
  margin: 40px 40px;
  width: 200px;
  height: 50px;
  border: none;
  background-color: #176DB3;
  color: #fff;
  font-size: 18px;
  border-radius: 6px;
  outline: none;
  cursor: pointer;
  transition: .3s linear;
}

.btn1:hover {
  transform: rotateX(15deg);
  box-shadow: 0 15px 15px #176DB3;
}
.buttons{
  display:flex;
  justify-content:center;
  align-items:center;
}
    </style>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <a href="index.html" class="nav-logo">Elsever</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">country'clock</a>
                </li>
                <li class="nav-item">
                    <a href="countdown.html" class="nav-link">coundown</a>
                </li>
                <li class="nav-item">
                    <a href="sa.php" class="nav-link">weather</a>
                </li>
                <li class="nav-item">
                    <a href="contact.html" class="nav-link">Contact</a>
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
     <form action="index.php" method="post">
      <input type="text" class="searchTerm" name="asia" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
     </form>
   </div>
</div>  
  </div>
        <div class="contanier">
            <div class="card">
                <h4>Current  Time </h4><div> <img src="https://ipdata.co/flags/az.png" alt="AZE Flag"></div>
                <p><input class = "display-box" type="text" name="display" value="<?php 
             date_default_timezone_set('Asia/Baku');
               
                echo date('l');
                ?>" /></p>
                  <p><input class = "display-box" type="text" name="display" value="<?php 
             date_default_timezone_set('Asia/Baku');
               
                echo date("F j y");
                ?>" /></p>
                <p>Baku, Azerbaijan</p>
               <iframe src="https://free.timeanddate.com/clock/i8c3kdcy/n369/szw140/szh140/hbw0/cf100/hgr0" frameborder="0" width="140" height="140"></iframe>

            
               
           
            </div>
           
        <div class="card">
                <h4>Paris/France</h4> <div> <img src="https://ipdata.co/flags/fr.png" alt="France Flag"></div>
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
                <h4>Istanbul/Turkey</h4><div> <img src="https://ipdata.co/flags/tr.png" alt="tr Flag"></div>
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
                <h4>Chicago/America</h4><div> <img src="https://ipdata.co/flags/us.png" alt="us Flag"></div>
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

<!-- <section class="data">
                    <div>
                      <h3><i class="fa-solid fa-globe"></i><?php 
                      // $name= isset($_POST["asia"]);
                      // echo $name;
                   
                      // if(isset($_POST["asia"])){
                     
                      // echo  $name = $_POST['asia']; 
                      // };
                      
                    
                      ?></h3>
                      <p><?php 
                    
                      // date_default_timezone_set($_POST["asia"]);
               
                      // echo date('h:i:sa');
                       ?></p>
                      <p><?php 
                  
                      // date_default_timezone_set($_POST["asia"]);
               
                      // echo date('l');
                       ?></p>
                  <p><?php 
                  
                  //  date_default_timezone_set($_POST["asia"]);
                  
                  //   echo date("F j y");
                 ?></p>
          

                    </div>
                               
</section> -->
<section class="qites">
            <ul class="qite">
                 <li class="text1" ><a href="#"><span class="text1">Africa</span></a></li>
                <li class="text2"><a href="#"><span class="text2">America</span></a></li>
                <li class="text3"><a href="#"><span class="text3">Asia</span></a></li>
                <li class="text4"><a href="#"><span class="text4">Europe</span></a></li>
                <li class="text5"><a href="#"><span class="text5">Antarctica</span></a></li>
                <li class="text6"><a href="#"><span class="text6">Australia</span></a></li>

            </ul> 

</section>
<form action="index.php"  method="post">
              <section class="countries1">
                <h2>Africa</h2>
                <div class="table">
                    <div class="box">
                    <input type="radio" value="Africa/Abidjan" id="Africa/Abidjan" name="asia">
                    <label for="Africa/Abidjan">Africa/Abidjan</label>
                    <input type="radio" value="Africa/Accra" id="Africa/Accra" name="asia">
                    <label for="Africa/Accra">Africa/Accra</label>
                    <input type="radio" value="Africa/Addis_Ababa" id="Africa/Addis_Ababa" name="asia">
                    <label for="Africa/Addis_Ababa">Africa/Addis_Ababa</label>
                    <input type="radio" value="Africa/Algiers" id="Africa/Algiers" name="asia">
                    <label for="Africa/Algiers">Africa/Algiers</label>
                    <input type="radio" value="Africa/Asmara" id="Africa/Asmara" name="asia">
                    <label for="Africa/Asmara">Africa/Asmara</label>
                    <input type="radio" value="Africa/Bamako" id="Africa/Bamako" name="asia">
                    <label for="Africa/Bamako">Africa/Bamako</label>
                    <input type="radio" value="Africa/Bangui" id="Africa/Bangui" name="asia">
                    <label for="Africa/Bangui">Africa/Bangui</label>

                    <input type="radio" value="Africa/Banjul" id="Africa/Banjul" name="asia">
                    <label for="Africa/Banjul">Africa/Banjul</label>
                    <input type="radio" value="Africa/Bissau" id="Africa/Bissau" name="asia">
                    <label for="Africa/Bissau">Africa/Bissau</label>
                    <input type="radio" value="Africa/Blantyre" id="Africa/Blantyre" name="asia">
                    <label for="Africa/Blantyre">Africa/Blantyre</label>
                    </div>
                    <div class="box">
                    <input type="radio" value="Africa/Brazzaville" id="Africa/Brazzaville" name="asia">
                    <label for="Africa/Brazzaville">Africa/Brazzaville</label>
                    <input type="radio" value="Africa/Bujumbura" id="Africa/Bujumbura" name="asia">
                    <label for="Africa/Bujumbura">Africa/Bujumbura</label>
                    <input type="radio" value="Africa/Cairo" id="Africa/Cairo" name="asia">
                    <label for="Africa/Cairo">Africa/Cairo</label>
                    <input type="radio" value="Africa/Casablanca" id="Africa/Casablanca" name="asia">
                    <label for="Africa/Casablanca">Africa/Casablanca</label>
                    <input type="radio" value="Africa/Ceuta" id="Africa/Ceuta" name="asia">
                    <label for="Africa/Ceuta">Africa/Ceuta</label>
                    <input type="radio" value="Africa/Conakry" id="Africa/Conakry" name="asia">
                    <label for="Africa/Conakry">Africa/Conakry</label>
                    <input type="radio" value="Africa/Dakar" id="Africa/Dakar" name="asia">
                    <label for="Africa/Dakar">Africa/Dakar</label>
                    <input type="radio" value="Africa/Dar_es_Salaam" id="Africa/Dar_es_Salaam" name="asia">
                    <label for="Africa/Dar_es_Salaam">Africa/Dar_es_Salaam</label>
                    <input type="radio" value="Africa/Djibouti" id="Africa/Djibouti" name="asia">
                    <label for="Africa/Djibouti">Africa/Djibouti</label>
                    </div>
                    <div class="box">
                    <input type="radio" value="Africa/Douala" id="Africa/Douala" name="asia">
                    <label for="Africa/Douala">Africa/Douala</label>
                    <input type="radio" value="Africa/El_Aaiun" id="Africa/El_Aaiun" name="asia">
                    <label for="Africa/El_Aaiun">Africa/El_Aaiun</label>
                    <input type="radio" value="Africa/Freetown" id="Africa/Freetown" name="asia">
                    <label for="Africa/Freetown">Africa/Freetown</label>
                    <input type="radio" value="Africa/Gaborone" id="Africa/Gaborone" name="asia">
                    <label for="Africa/Gaborone">Africa/Gaborone</label>
                    <input type="radio" value="Africa/Harare" id="Africa/Harare" name="asia">
                    <label for="Africa/Harare">Africa/Harare</label>
                    <input type="radio" value="Africa/Johannesburg" id="Africa/Johannesburg" name="asia">
                    <label for="Africa/Johannesburg">Africa/Johannesburg</label>
                    <input type="radio" value="Africa/Juba" id="Africa/Juba" name="asia">
                    <label for="Africa/Juba">Africa/Juba</label>
                    <input type="radio" value="Africa/Kampala" id="Africa/Kampala" name="asia">
                    <label for="Africa/Kampala">Africa/Kampala</label>
                    <input type="radio" value="Africa/Khartoum" id="Africa/Khartoum" name="asia">
                    <label for="Africa/Khartoum">Africa/Khartoum</label>
                    </div>
                    </div>
                    

                </div>
              </section>
              <section class="countries2">
              <h2>America</h2>
              <div class="table">
              <div class="box">
                <input type="radio" value="America/Adak" id="America/Adak" name="asia">
                <label for="America/Adak">America/Adak</label>
                <input type="radio" value="America/Anchorage" id="America/Anchorage" name="asia">
                <label for="America/Anchorage">America/Anchorage</label>
                <input type="radio" value="America/Anguilla" id="America/Anguilla" name="asia">
                <label for="America/Anguilla">America/Anguilla</label>
                <input type="radio" value="America/Antigua" id="America/Antigua" name="asia">
                <label for="America/Antigua">America/Antigua</label>
                <input type="radio" value="America/Araguaina" id="America/Araguaina" name="asia">
                <label for="America/Araguaina">America/Araguaina</label>

                  </div>
                  <div class="box">
                <input type="radio" value="America/Bahia_Banderas" id="America/Bahia_Banderas" name="asia">
                <label for="America/Bahia_Banderas">America/Bahia_Banderas</label>
                <input type="radio" value="America/Barbados" id="America/Barbados" name="asia">
                <label for="America/Barbados">America/Barbados</label>
                <input type="radio" value="America/Belem" id="America/Belem" name="asia">
                <label for="America/Belem">America/Belem</label>
                <input type="radio" value="America/Belize" id="America/Belize" name="asia">
                <label for="America/Belize">America/Belize</label>
                  </div>
                  <div class="box">
                <input type="radio" value="America/Boa_Vista" id="America/Boa_Vista" name="asia">
                <label for="America/Boa_Vista">America/Boa_Vista</label>
                <input type="radio" value="America/Bogota" id="America/Bogota" name="asia">
                <label for="America/Bogota">America/Bogota</label>
                <input type="radio" value="America/Boise" id="America/Boise" name="asia">
                <label for="America/Boise">America/Boise</label>
                <input type="radio" value="America/Cambridge_Bay" id="America/Cambridge_Bay" name="asia">
                <label for="America/Cambridge_Bay">America/Cambridge_Bay</label>

                  </div>
                  </div>
                  <!-- <input type="submit" class="btn"> -->
                </div>
              </section>
              <section class="countries3">
              <h2>Asia</h2>
                <div class="table">
                  <div class="box">

                    <input type="radio" value="Asia/Aden" id="Asia/Aden" name="asia">
                    <label for="Asia/Aden">Asia/Aden</label>
                    <input type="radio" value="Asia/Almaty" id="Asia/Almaty"  name="asia">
                    <label for="Asia/Almaty">Asia/Almaty</label>
                    <input type="radio" value="Asia/Amman" id="Asia/Amman"  name="asia">
                    <label for="Asia/Amman">Asia/Amman</label>
                    <input type="radio" value="Asia/Anadyr" id="Asia/Anadyr"  name="asia">
                    <label for="Asia/Anadyr">Asia/Anadyr</label>
                    <input type="radio" value="Asia/Aqtau" id="Asia/Aqtau"  name="asia">
                    <label for="Asia/Aqtau">Asia/Aqtau</label>
                    <input type="radio" value="Asia/Aqtobe" id="Asia/Aqtobe"  name="asia">
                    <label for="Asia/Aqtobe">Asia/Aqtobe</label>
                    </div>
                    <div class="box">
                    <input type="radio" value="Asia/Ashgabat" id="Asia/Ashgabat"  name="asia">
                    <label for="Asia/Ashgabat">Asia/Ashgabat</label>
                    <input type="radio" value="Asia/Baghdad" id="Asia/Baghdad"  name="asia">
                    <label for="Asia/Baghdad">Asia/Baghdad</label>
                    <input type="radio" value="Asia/Bahrain" id="Asia/Bahrain"  name="asia">
                    <label for="Asia/Bahrain">Asia/Bahrain</label>
                    <input type="radio" value="Asia/Baku" id="Asia/Baku"  name="asia">
                    <label for="Asia/Baku">Asia/Baku</label>
                    <input type="radio" value="Asia/Bangkok" id="Asia/Bangkok"  name="asia">
                    <label for="Asia/Bangkok">Asia/Bangkok</label>
                    <input type="radio" value="Asia/Beirut" id="Asia/Beirut"  name="asia">
                    <label for="Asia/Beirut">Asia/Beirut</label>
                    </div>
                    <div class="box">
                    <input type="radio" value="Asia/Bishkek" id="Asia/Bishkek"  name="asia">
                    <label for="Asia/Bishkek">Asia/Bishkek</label>
                    <input type="radio" value="Asia/Brunei" id="Asia/Brunei"  name="asia">
                    <label for="Asia/Brunei">Asia/Brunei</label>
                    <input type="radio" value="Asia/Calcutta" id="Asia/Calcutta"  name="asia">
                    <label for="Asia/Calcutta">Asia/Calcutta</label>
                    <input type="radio" value="Asia/Choibalsan" id="Asia/Choibalsan"  name="asia">
                    <label for="Asia/Choibalsan">Asia/Choibalsan</label>
                    <input type="radio" value="Asia/Chongqing" id="Asia/Chongqing"  name="asia">
                    <label for="Asia/Chongqing">Asia/Chongqing</label>
                    <input type="radio" value="Asia/Colombo" id="Asia/Colombo"  name="asia">
                    <label for="Asia/Colombo">Asia/Colombo</label>
                    
                    </div>
      
                </div>                       
                                                               
                <br>
                    
                    </div>
                    <!-- <input type="submit" class="btn"> -->
              </section>
              
              <section class="countries4">
              <h2>Europe</h2>
                <div class="table">
                  <div class="box">
                    <input type="radio" value="Europe/Amsterdam" id="Europe/Amsterdam"  name="asia">
                    <label for="Europe/Amsterdam">Europe/Amsterdam</label>
                    <input type="radio" value="Europe/Andorra" id="Europe/Andorra"  name="asia">
                    <label for="Europe/Andorra">Europe/Andorra</label>
                    <input type="radio" value="Europe/Athens" id="Europe/Athens"  name="asia">
                    <label for="Europe/Athens">Europe/Athens</label>
                    <input type="radio" value="Europe/Belgrade" id="Europe/Belgrade"  name="asia">
                    <label for="Europe/Belgrade">Europe/Belgrade</label>
                    <input type="radio" value="Europe/Berlin" id="Europe/Berlin"  name="asia">
                    <label for="Europe/Berlin">Europe/Berlin</label>
                    <input type="radio" value="Europe/Bratislava" id="Europe/Bratislava"  name="asia">
                    <label for="Europe/Bratislava">Europe/Bratislava</label>
                    </div>
                    <div class="box">
                    <input type="radio" value="Europe/Brussels" id="Europe/Brussels"  name="asia">
                    <label for="Europe/Brussels">Europe/Brussels</label>
                    <input type="radio" value="Europe/Bucharest" id="Europe/Bucharest"  name="asia">
                    <label for="Europe/Bucharest">Europe/Bucharest</label>
                    <input type="radio" value="Europe/Budapest" id="Europe/Budapest"  name="asia">
                    <label for="Europe/Budapest">Europe/Budapest</label>
                    <input type="radio" value="Europe/Busingen" id="Europe/Busingen"  name="asia">
                    <label for="Europe/Busingen">Europe/Busingen</label>
                    <input type="radio" value="Europe/Chisinau" id="Europe/Chisinau"  name="asia">
                    <label for="Europe/Chisinau">Europe/Chisinau</label>

                  </div>
                  <div class="box">
                    <input type="radio" value="Europe/Copenhagen" id="Europe/Copenhagen"  name="asia">
                    <label for="Europe/Copenhagen">Europe/Copenhagen</label>
                    <input type="radio" value="Europe/Dublin" id="Europe/Dublin"  name="asia">
                    <label for="Europe/Dublin">Europe/Dublin</label>
                    <input type="radio" value="Europe/Gibraltar" id="Europe/Gibraltar"  name="asia">
                    <label for="Europe/Gibraltar">Europe/Gibraltar</label>
                    <input type="radio" value="Europe/Guernsey" id="Europe/Guernsey"  name="asia">
                    <label for="Europe/Guernsey">Europe/Guernsey</label>
                    <input type="radio" value="Europe/Helsinki" id="Europe/Helsinki"  name="asia">
                    <label for="Europe/Helsinki">Europe/Helsinki</label>
                    
                    
                  </div>
                </div>
                <!-- <input type="submit" class="btn"> -->
                </section>
                <section class="countries5">
                <h2>Antarctica</h2>
                <div class="table">
                  <div class="box">
                    <input type="radio" value="Antarctica/Casey" id="Antarctica/Casey"  name="asia">
                    <label for="Antarctica/Casey">Antarctica/Casey</label>
                    <input type="radio" value="Antarctica/Davis" id="Antarctica/Davis"  name="asia">
                    <label for="Antarctica/Davis">Antarctica/Davis</label>
                    <input type="radio" value="Antarctica/DumontDUrville" id="Antarctica/DumontDUrville"  name="asia">
                    <label for="Antarctica/DumontDUrville">Antarctica/DumontDUrville</label>
                    <input type="radio" value="Antarctica/Macquarie" id="Antarctica/Macquarie"  name="asia">
                    <label for="Antarctica/Macquarie">Antarctica/Macquarie</label>
                    
                    </div>
                    <div class="box">
                    <input type="radio" value="Antarctica/McMurdo" id="Antarctica/McMurdo"  name="asia">
                    <label for="Antarctica/McMurdo">Antarctica/McMurdo</label>
                    <input type="radio" value="Antarctica/Palmer" id="Antarctica/Palmer"  name="asia">
                    <label for="Antarctica/Palmer">Antarctica/Palmer</label>
                    <input type="radio" value="Antarctica/Rothera" id="Antarctica/Rothera"  name="asia">
                    <label for="Antarctica/Rothera">Antarctica/Rothera</label>
                    <input type="radio" value="Antarctica/Syowa" id="Antarctica/Syowa"  name="asia">

                    <label for="Antarctica/Syowa">Antarctica/Syowa</label>
                    </div>
                    <div class="box">
                    <input type="radio" value="Antarctica/Troll" id="Antarctica/Troll"  name="asia">
                    <label for="Antarctica/Troll">Antarctica/Troll</label>
                    <input type="radio" value="Antarctica/Vostok" id="Antarctica/Vostok"  name="asia">
                    <label for="Antarctica/Vostok">Antarctica/Vostok</label>
                    <input type="radio" value="Antarctica/Mawson" id="Antarctica/Mawson"  name="asia">
                    <label for="Antarctica/Mawson">Antarctica/Mawson</label>

                    </div>
                    </div>
                    <!-- <input type="submit" class="btn"> -->
                    </section>
                    <section class="countries6">
                    <h2>Australia</h2>
                    <div class="table">
                      <div class="box">
                        <input type="radio" value="Australia/Adelaide" id="Australia/Adelaide"  name="asia">
                        <label for="Australia/Adelaide">Australia/Adelaide</label>
                        <input type="radio" value="Australia/Brisbane" id="Australia/Brisbane"  name="asia">
                        <label for="Australia/Brisbane">Australia/Brisbane</label>
                        <input type="radio" value="Australia/Broken_Hill" id="Australia/Broken_Hill"  name="asia">
                        <label for="Australia/Broken_Hill">Australia/Broken_Hill</label>
                        <input type="radio" value="Australia/Currie" id="Australia/Currie"  name="asia">
                        <label for="Australia/Currie">Australia/Currie</label>
                        </div>
                        <div class="box">
                        <input type="radio" value="Australia/Darwin" id="Australia/Darwin"  name="asia">
                        <label for="Australia/Darwin">Australia/Darwin</label>
                        <input type="radio" value="Australia/Eucla" id="Australia/Eucla"  name="asia">
                        <label for="Australia/Eucla">Australia/Eucla</label>
                        <input type="radio" value="Australia/Hobart" id="Australia/Hobart"  name="asia">
                        <label for="Australia/Hobart">Australia/Hobart</label>
                        <input type="radio" value="Australia/Lindeman" id="Australia/Lindeman"  name="asia">
                        <label for="Australia/Lindeman">Australia/Lindeman</label>
                        </div>
                        <div class="box">
                        <input type="radio" value="Australia/Lord_Howe" id="Australia/Lord_Howe"  name="asia">
                        <label for="Australia/Lord_Howe">Australia/Lord_Howe</label>
                        <input type="radio" value="Australia/Melbourne" id="Australia/Melbourne"  name="asia">
                        <label for="Australia/Melbourne">Australia/Melbourne</label>
                        <input type="radio" value="Australia/Perth" id="Australia/Perth"  name="asia">
                        <label for="Australia/Perth">Australia/Perth</label>
                        <input type="radio" value="Australia/Sydney" id="Australia/Sydney"  name="asia">
                        <label for="Australia/Sydney">Australia/Sydney</label>
                        </div>
                        </div>
                        <!-- <input type="submit" class="btn"> -->
                        </section>


                            <div class="buttons">
                         <input type="submit" class="btn btn1" class="btn">
                        
                          <input class="btn btn1" type="reset">
                          </div>
                        </form>

                

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