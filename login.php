<?php
  ob_start(); 
  session_start();
  
?>


<?php
include('./connection.php');
//print_r($_POST);
  if(isset($_POST['submit'])){
    $lusername = $_POST['iusername'];
    $lpassword = $_POST['ipassword'];

    if($lusername=='admin'){
      $username_search = "SELECT * FROM adminsignup where username = '$lusername' ";
    }else{
      $username_search = "SELECT * FROM signup where username = '$lusername' ";
      }

    $query = mysqli_query($conn, $username_search);

    $Username_count = mysqli_num_rows($query);
    if($Username_count){
      $username_pass = mysqli_fetch_assoc($query);
      $db_pass = $username_pass['repass'];

      $_SESSION['username'] = $username_pass['username'];

       $pass_decode = password_verify($lpassword, $db_pass);

      if($pass_decode){

        if($lusername =='admin'){
          
          if(isset($_POST['rememberme'])){
            ?>
              <script>
                location.replace("adminIndex.php");
              </script>
              
            
            <?php
              setcookie('usernamecookie',$lusername,time()+86400);
              setcookie('passwordcookie',$lpassword,time()+86400);
          }else{
            ?>
              <script>
                location.replace("adminIndex.php");
              </script>
              
            
            <?php
          }
  
        }else{

          if(isset($_POST['rememberme'])){
            ?>
              <script>
                location.replace("index.php");
              </script>
              
            
            <?php
              setcookie('usernamecookie',$lusername,time()+86400);
              setcookie('passwordcookie',$lpassword,time()+86400);   
          }else{
            ?>
            <script>
              location.replace("index.php");
            </script>
            
          
          <?php
          }
        }
       
      }
      else{
         echo "Password incorrect";
      }
    }else{
      echo "invalid username";
    }
  }
?>