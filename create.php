


    


<?php
//include connection file
include('connection.php');
   

//create in instance of class Connection
$connection = new  Connection();


//call the selectDatabase method
$connection->selectDatabase('dartoda1');
$emailValue = "";
$lnameValue = "";
$fnameValue = "";
$passwordValue = "";
$errorMesage = "";
$successMesage = "";
if(isset($_POST["submit"])){

    $emailValue = $_POST["email"];
    $lnameValue = $_POST["lastName"];
    $fnameValue = $_POST["firstName"];
    $passwordValue = $_POST["password"];
    $idCityValue=$_POST["cities"];

    if(empty($emailValue) || empty($fnameValue) || empty($lnameValue) || empty($passwordValue)){

            $errorMesage = "all fileds must be filed out!";

    }else if(strlen($passwordValue) < 8 ){
        $errorMesage = "password must contains at least 8 char";
    }else if(preg_match("/[A-Z]+/", $passwordValue)==0){
        $errorMesage = "password must contains  at least one capital letter!";
    }else{
       
    
    //include the client file
    include('client.php');

    //create new instance of client class with the values of the inputs
    $client = new Client($fnameValue,$lnameValue,$emailValue,$passwordValue,$idCityValue);

//call the insertClient method
$client->insertClient('Clients',$connection->conn);

//give the $successMesage the value of the static $successMsg of the class
$successMesage = Client::$successMsg;

//give the $errorMesage the value of the static $errorMsg of the class
$errorMesage = Client::$errorMsg;

$emailValue = "";
$lnameValue = "";
$fnameValue = "";   
      
    }
}

?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <style>

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: #DEB887;
  /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
}
::selection{
  background: #4158d0;
  color: #DEB887;
}
.wrapper{
  width: 380px;
  background: #fff;
  border-radius: 15px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: #DEB887;
  user-select: none;
  border-radius: 15px 15px 0 0;
  background: linear-gradient(-135deg, black, #4158d0);
}
.wrapper form{
  padding: 10px 30px 50px 30px;
}
.wrapper form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  position: relative;
}
.wrapper form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
.wrapper form .field input:focus,
form .field input:valid{
  border-color: #DEB887;
}
.wrapper form .field label{
  position: absolute;
  top: 50%;
  left: 20px;
  color: #DEB887;
  font-weight: 400;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;
}
form .field input:focus ~ label,
form .field input:valid ~ label{
  top: 0%;
  font-size: 16px;
  color: #DEB887;
  background: #fff;
  transform: translateY(-50%);
}
form .content{
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}
form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}
form .content input{
  width: 15px;
  height: 15px;
  background: red;
}
form .content label{
  color: #DEB887;
  user-select: none;
  padding-left: 5px;
}
form .content .pass-link{
  color: "";
}
form .field input[type="submit"]{
  color: #DEB887;
  border: none;
  padding-left: 0;
  margin-top: -10px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  background: linear-gradient(-135deg, black, #4158d0);
  transition: all 0.3s ease;
}
form .field input[type="submit"]:active{
  transform: scale(0.95);
}
form .signup-link{
  color: #262626;
  margin-top: 20px;
  text-align: center;
}
form .pass-link a,
form .signup-link a{
  color: #4158d0;
  text-decoration: none;
}
form .pass-link a:hover,
form .signup-link a:hover{
  text-decoration: underline;
}
      </style>
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
           signup
         </div>
         <?php

    if(!empty($errorMesage)){
  echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>$errorMesage</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
  </button>
  </div>";
    }
       ?>
         <form  method="post" >
            <div class="field">
            <input value=" <?php echo $emailValue ?>"  type="email"  name="email">
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="text"  value="<?php echo $fnameValue ?>"  name="firstName">
               <label>firstname</label>
            </div>
            <div class="field">
               
               <input  value="<?php echo $lnameValue ?>"  type="text"  name="lastName">
               <label>lastName</label>
            </div><br>
            <div   class="input-group mb-3" class="field">
            
            
                <select   class="form-select"name='cities'  >
                <option   selected>Select your city</option>
                    <?php
                        include('city.php');
                        $cities=City::selectAllcities('Cities',$connection->conn);
                        foreach($cities as $city){
                                echo "<option value='$city[id]' >$city[name]</option>";

                        }
                    ?>
                </select>
            </div>
            <div class="field">
            <input   type="password"  name="password" >
               <label>Password</label>
            </div>
            <?php
            if(!empty($successMesage)){
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>$successMesage</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
</button>
</div>";
            }
  ?>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               
            </div>
            <div class="field">
               <input type="submit" name="submit" value="signup">
            </div>
            
            
         </form>
      </div>
   </body>
</html>