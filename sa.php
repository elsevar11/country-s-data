<?php
$status="";
$msg="";
$city="";
if(isset($_POST['submit'])){
    $city=$_POST['city'];
    $url="http://api.openweathermap.org/data/2.5/weather?q=$city&appid=49c0bad2c7458f1c76bec9654081a661";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
    if($result['cod']==200){
        $status="yes";
    }else{
        $msg=$result['message'];
    }
}
?>

<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <title>Weather</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap">

      <style>
         @import url(https://fonts.googleapis.com/css?family=Poiret+One);
         @import url(https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css);
         body {
        
         font-family: Poiret One;
         }
         .widget {
         position: absolute;
         top: 50%;
         left: 50%;
         display: flex;
         height: 300px;
         width: 600px;
         transform: translate(-50%, -50%);
         flex-wrap: wrap;
         cursor: pointer;
         border-radius: 20px;
         box-shadow: 0 27px 55px 0 rgba(0, 0, 0, 0.3), 0 17px 17px 0 rgba(0, 0, 0, 0.15);
         }
         .widget .weatherIcon {
         flex: 1 100%;
         height: 60%;
         border-top-left-radius: 20px;
         border-top-right-radius: 20px;
         background: #FAFAFA;
         font-family: weathericons;
         display: flex;
         align-items: center;
         justify-content: space-around;
         font-size: 100px;
         }
         .widget .weatherIcon i {
         padding-top: 30px;
         }
         .widget .weatherInfo {
         flex: 0 0 70%;
         height: 40%;
         background: darkslategray;
         border-bottom-left-radius: 20px;
         display: flex;
         align-items: center;
         color: white;
         }
         .widget .weatherInfo .temperature {
         flex: 0 0 40%;
         width: 100%;
         font-size: 65px;
         display: flex;
         justify-content: space-around;
         }
         .widget .weatherInfo .description {
         flex: 0 60%;
         display: flex;
         flex-direction: column;
         width: 100%;
         height: 100%;
         justify-content: center;
         margin-left:-15px;
         }
         .widget .weatherInfo .description .weatherCondition {
         text-transform: uppercase;
         font-size: 35px;
         font-weight: 100;
         }
         .widget .weatherInfo .description .place {
         font-size: 15px;
         }
         .widget .date {
         flex: 0 0 30%;
         height: 40%;
         background: #70C1B3;
         border-bottom-right-radius: 20px;
         display: flex;
         justify-content: space-around;
         align-items: center;
         color: white;
         font-size: 30px;
         font-weight: 800;
         }
         p {
         position: fixed;
         bottom: 0%;
         right: 2%;
         }
         p a {
         text-decoration: none;
         color: #E4D6A7;
         font-size: 10px;
         }
         .form{
         position: absolute;
         top: 42%;
         left: 50%;
         display: flex;
         height: 300px;
         width: 600px;
         transform: translate(-50%, -50%);
         }
         .text{
         width: 80%;
         padding: 10px;
         outline:none;
         }
         .submit{
         height: 39px;
         width: 100px;
         border: 0px;
         }
         .mr45{
             margin-right:45px;
         }
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
      </style>
   </head>
   <body>
   <header class="header">
        <nav class="navbar">
            <a href="index.html" class="nav-logo">Elsever</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="clock.php" class="nav-link">country'clock</a>
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

      <div class="form">
         <form style="width:100%;" method="post">
            <input type="text" class="text" placeholder="Enter city name" name="city" value="<?php echo $city?>"/>
            <input type="submit" value="Submit" class="submit" name="submit"/>
            <?php echo $msg?>
         </form>
      </div>
      
      <?php if($status=="yes"){?>
      <article class="widget">
         <div class="weatherIcon">
            <img src="http://openweathermap.org/img/wn/<?php echo $result['weather'][0]['icon']?>@4x.png"/>
         </div>
         <div class="weatherInfo">
            <div class="temperature">
               <span><?php echo round($result['main']['temp']-273.15)?>°</span>
            </div>
            <div class="description mr45">
               <div class="weatherCondition"><?php echo $result['weather'][0]['main']?></div>
               <div class="place"><?php echo $result['name']?></div>
            </div>
            <div class="description">
               <div class="weatherCondition">Wind</div>
               <div class="place"><?php echo $result['wind']['speed']?> M/H</div>
            </div>
         </div>
         <div class="date">
            <?php echo date('d M',$result['dt'])?> 
             
         </div>
      </article>
      <?php } ?>
   
   </body>
</html>