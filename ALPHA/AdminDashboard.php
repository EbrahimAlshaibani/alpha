<?php
session_start();
if(!isset($_SESSION['user']) || !isset($_COOKIE['user']))
{
    header('Location: login.php');
}
if($_SESSION['type']=='admin')
{
  $Err ="";
  $Acc = "";
    if(isset($_POST['add']))
    {
        $user_name = $_POST['username'];
        $user_email = $_POST['email'];
        $user_type = $_POST['users'];
        if($_POST['pass1']===$_POST['pass2'])
        {
          $password = $_POST['pass1'];
          $con = mysqli_connect('localhost','root','','alpha_db') or die("can't connect to mysql server");
          $query1= "select * from users ORDER BY user_id DESC LIMIT 1";
          $last_id = mysqli_query($con,$query1) or die("there is an error in this query");
          while($row = mysqli_fetch_assoc($last_id))
          {
            $id ="$row[user_id]";
          }
          $id = $id+1;
          $query= "INSERT into users VALUES ($id,AES_ENCRYPT('$user_name','nrel'),MD5('$password'),AES_ENCRYPT('$user_email','nrel'),AES_ENCRYPT('$user_type','nrel'))";
          $result = mysqli_query($con,$query) or die('there is an error in the query');
          $Acc = 'Account Added';
        }
        else
        {
          $Err = 'Passwords are not match';
        }
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="icon" href="imgs/logos/icon.png">
    <title>ALPHA | Dashboard</title>
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/AdminDashboard.css">
    </head>
    <body>
    
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">Users</a>
      <a href="#ord">Orders</a>
      <a href="#users">Add Admin</a>
      <a href="index.php">Back to user view</a>
      <a href="logout.php"><i class="icon-sign-out"></i> Log Out</a>
    </div>
    <span class="Menu" onclick="openNav()">&#9776; Dashbored</span>
    <span class="icon-dashboard"></span>
    
    <?php
             $con = mysqli_connect('localhost','root','','alpha_db') or die("can't connect to mysql server");
             $queryUsers= 
             "SELECT user_id,
                     user_name,
                     user_pass,
                     user_email,
                     user_type,
                     AES_DECRYPT(user_name, 'nrel') as username,
                     AES_DECRYPT(user_email, 'nrel') as useremail,
                     AES_DECRYPT(user_type, 'nrel') as usertype
              from users
              ORDER BY user_id ASC;";
             $result = mysqli_query($con,$queryUsers) or die('there is an error in the query');
             if(mysqli_num_rows($result)>0)
             {
                 echo '<a name="usr"></a>';
                 echo '<table id="users">';
                 echo '<th>User ID</th>     
                       <th>User Name</th>
                       <th>User Password</th>
                       <th>User Email</th>
                       <th>User Type</th>';
                       while($row = mysqli_fetch_assoc($result))
                       {
                           echo "<tr><td>$row[user_id]</td>
                           <td>$row[username]</td>
                           <td>$row[user_pass]</td>
                           <td>$row[useremail]</td>
                           <td>$row[usertype]</td></tr>";
                       }
                  echo '</table>';
             }
    
             else{
                 echo 'there is no users to display!!!';
             }
    
             mysqli_free_result($result);
             mysqli_close($con);
             ?>
    
    
    <?php
             $con = mysqli_connect('localhost','root','','alpha_db') or die("can't connect to mysql server");
             $queryOrders= 
             "SELECT * from orders
              ORDER BY order_id ASC;";
             $resultOrders = mysqli_query($con,$queryOrders) or die('there is an error in the query');
             if(mysqli_num_rows($resultOrders)>0)
             {
                 echo '<a name="ord"></a>';
                 echo '<table id="orders">';
                 echo '<th>Order ID</th>     
                       <th>Order Name</th>
                       <th>Order Price</th>
                       <th>Order Date</th>
                       <th>Order State</th>';
                       while($row = mysqli_fetch_assoc($resultOrders))
                       {
                     echo "<tr><td>$row[order_id]</td>
                           <td>$row[order_name]</td>
                           <td>$row[order_price]</td>
                           <td>$row[order_date]</td>
                           <td>$row[order_state]</td></tr>";
                       }
                  echo '</table>';
             }
    
             else{
                 echo 'there is no orders to display!!!';
             }
             mysqli_free_result($resultOrders);
             mysqli_close($con);
             ?>
        <?php
             $con = mysqli_connect('localhost','root','','alpha_db') or die("can't connect to mysql server");
             $queryMessage= "SELECT * from messages;";
             $queryMessage = mysqli_query($con,$queryMessage) or die('there is an error in the query');
             if(mysqli_num_rows($queryMessage)>0)
             {
                 echo '<a name="ord"></a>';
                 echo '<table id="orders">';
                 echo '<th>Message</th>     
                       <th>Sender</th>';
                       while($row = mysqli_fetch_assoc($queryMessage))
                       {
                     echo "<tr><td>$row[message]</td>
                           <td>$row[sender]</td></tr>";
                       }
                  echo '</table>';
             }
    
             else{
                 echo 'there is no orders to display!!!';
             }
             mysqli_free_result($queryMessage);
             mysqli_close($con);
             ?>
    
    <form method="POST">
    <h3 style="color: #00bdff;"> <span class="icon-user-plus"></span> Add User</h3>
               <i class="icon-user"></i>
               <select name="users" >
               <option value="admin">admin</option>
               <option value="user">user</option>
               </select>
               <i class="icon-user"></i>
               <input type="text" placeholder="username" name="username" id="" required>
               <i class="icon-mail_outline"></i>
               <input type="text" placeholder="email"   name="email" id="" required>
               <a><i class="icon-eye-slash" onClick="myFunction()" id="ic1"></i></a>
               <input type="password" placeholder="password"  name="pass1" id="ic" required>
               <a><i class="icon-eye-slash" onClick="myFunction()" id="ic2"></i></a>
               <input type="password" placeholder="comfirm password" name="pass2" id="ic3" required>
               <button class="buttonOne" type="submit" name="add">Add</button>
               <?php echo '<h2 class"message" style="color: red;">'.$Err.'</h2>' ?>
               <?php echo '<h2 class"message" style="color: green;">'.$Acc.'</h2>' ?>
    </form>
    <script src="js/AdminDashboard.js"></script>  
    </body>
    </html> 
    <?php
}
else
{
    
    echo "You are not allowed to enter this page<br> Admins Only!!";
   ?>
<?php    
}
?>
