<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SIGN IN</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <style>
           /* form{
      border:1px solid black;
    } */
    html{
      background:url("https://images.unsplash.com/photo-1653629154029-265d18f0e1f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80");
      
      background-size:cover;
      background-position:center;
      background-repeat:no-repeat;

    }
    input{
      background:transparent;
      border-left:none;
      border-right:none;
      border-top:none;
      border-bottom:1px solid #fff;
      margin-top:20px;
      width:350px;
      color:#fff;
      
    }
    h2{
      font-size:40px;
    }
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 1; 
  font-size:20px;
}
    .das{
      display:flex;
      justify-content:space-around;
      align-items:center;
      
      

    }
    h2{
      text-align:center;
      color: rgba(255,64,88,1);
        }
    
    form input:focus {
	 outline: 0;
	 border-bottom: 1px solid rgba(128, 155, 206, 1);
	 transition: 0.6s all ease;
}
.btn_sign {
  background: rgba(255,64,88,1);
  box-shadow: 0px 2px 20px 2px rgba(255,114,132,0.50);
  border-radius: 8px;
  padding: 15px 30px;
  border: none;
  color: #fff;
  font-size: 14px;
  text-align:center;
  text-decoration:none;
  margin-top: 15px;
  margin-bottom: 20px;
  cursor: pointer;
}



#login-form-wrap{
  
  margin-top:100px;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  text-align:center;
}
.message{
  margin-left:150px;
}
.message p{
  color:#fff;
}
.link_forgot_pass{
  text-decoration:none;
  color:#99A5C2;

}
    </style>

</head>
<body>
<!-- partial:index.partial.html -->
<div id="login-form-wrap">
  <h2>Welcome back!</h2>
  <div class="das">
  <form autocomplete="off" method="POST" id="login-form">

    <p>
    <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="email" id="email" name="mail" placeholder="Email Address" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="email" name="pass" placeholder="Password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <a href="signUp.php" class="link_forgot_pass d_block" >Forgot Password ?</a>    
    </p>
    <p>
    <input type="submit" id="login" class="btn_sign" value="Log in" name="submit">
    </p>
        <?php
            $numOfTrue = 0;
            $accessAccepted = false;
            if(isset($_POST['submit'])){
                $userName = $_POST['username'];
                $mail = $_POST['mail'];
                $password = $_POST['pass'];
                $info = $userName . ' ' . $mail . ' ' . $password;
                $num = strlen($info);
                $file = file('mailpass.txt');
                $wCount = count($file);
                for($a = 0; $a < $wCount; $a++){
                    $infoFromFile = file('mailpass.txt')[$a];
                    for($x=0;$x<$num;$x++){
                        if(substr($info,$x,1) == substr($infoFromFile,$x,1)){
                            $numOfTrue++;
                        }
                    }
                    if($num == $numOfTrue){
                    $accessAccepted = true;
                    $a = $wCount;
                    }
                    else{
                        $numOfTrue = 0;
                    }
                }

                if($accessAccepted){
                }
                else{
                    echo 'YOUR INFOS ARE WRONG';
                }
            }


        ?>
  </form>
  <div class="message" id="create-account-wrap">
    <p>Not a member? <br><br><br> <a class="btn_sign" href="signUp.php">Create Account</a><p>
  </div>
</div>
</div>
<script>
    if('<?php echo $accessAccepted ?>' == true){
        window.open("index.html", "_self");
        
    }
</script>
</body>
</html>
