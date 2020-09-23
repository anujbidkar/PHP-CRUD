<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="POST">
    <label for="">Name </label> <br>
    <input required type="text" name="u_name" id=""> <br>
    
    <label for="">Email </label> <br>
    <input required type="email" name="u_email" id=""> <br>
    
    <label for="">Password </label> <br>
    <input required type="password" name="u_password" id=""> <br>
   <br>
   <br>
    <button type="submit" name="reg_btn">
        Register
    </button>
   
   
   <?php 

        if(isset($_POST['reg_btn']))
        {
            

            $name = $_POST['u_name'];
            $email = $_POST['u_email'];
            $pass = $_POST['u_password'];


            $connection = mysqli_connect('localhost','root','','my_blog');

            if($connection)
            {

    $sql_insert = "INSERT INTO users(user_name,user_email,user_password) VALUES('$name','$email','$pass')  ";
    
    $result_insert = mysqli_query($connection,$sql_insert);

    if($result_insert)
    {
        echo "sucessfully inserted";
    }
    else
    {
        echo "error while inserting";
    }




            }
            else
            {
                echo "error in connection :";
            }



            
        }
      
     
   
   
   ?>
   
   
   </form>
</body>
</html>