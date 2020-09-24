<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>

                <?php 
                    $connection = mysqli_connect('localhost','root','','my_blog');

                    if($connection)
                    {
                    $read_query = "SELECT * FROM `users` ";

                    $result_read = mysqli_query($connection,$read_query);


                    if($result_read)
                    {
                        while($abc = mysqli_fetch_array($result_read))
                        {
                     ?>

                                    <li><?php echo $abc['user_email']; ?></li>

                      <?php  }
                    }
                    else
                    {
                        echo "query is wrong : ".mysqli_error($connection);
                    }
                    }
                    else
                    {
                        echo "error in connection";
                    }

                ?>
</ul>  



<table border="1px" cellspacing="0px">
                 <thead>
                        <tr>
                            <th>Sr No</th>
                            <th> Name</th>
                            <th> Email</th>
                            <th> Password</th>
                        </tr>
                            
                    </thead>

                    <tbody>
                    <?php 
                    $connection = mysqli_connect('localhost','root','','my_blog');

                    if($connection)
                    {
                    $read_query = "SELECT * FROM `users` ";

                    $result_read = mysqli_query($connection,$read_query);


                    if($result_read)
                    {
                        while($abc = mysqli_fetch_array($result_read))
                        {
                     ?>
                     <tr>

                                    <td><?php echo $abc['id']; ?></td>
                                    <td><?php echo $abc['user_name']; ?></td>
                                    <td><?php echo $abc['user_email']; ?></td>
                                    <td><?php echo $abc['user_password']; ?></td>
                        </tr>

                      <?php  }
                    }
                    else
                    {
                        echo "query is wrong : ".mysqli_error($connection);
                    }
                    }
                    else
                    {
                        echo "error in connection";
                    }

                ?>
                        
                    </tbody>
</table>


<h1>
checkbox</h1>

<?php 
                    $connection = mysqli_connect('localhost','root','','my_blog');

                    if($connection)
                    {
                    $read_query = "SELECT * FROM `users` ";

                    $result_read = mysqli_query($connection,$read_query);


                    if($result_read)
                    {
                        while($abc = mysqli_fetch_array($result_read))
                        {
                     ?>
                        <input type="checkbox" name="" id="" ><?php echo $abc['user_email']?> <br>

                      <?php  }
                    }
                    else
                    {
                        echo "query is wrong : ".mysqli_error($connection);
                    }
                    }
                    else
                    {
                        echo "error in connection";
                    }

                ?>



</body>
</html>