<html>
    <head>
        <meta charset="utf-8">
        <title>Employees information</title>
    <style>
        table
        {
            text-align: center;
        }
        #users{
            border-collapse: collapse;
            width:100%;
        }
        #users td ,#users th{
            border: 1px solid #ddd;
            padding :8px;
            text-align: center;
        }

        #users tr:nth-child(even){
            background-color :#f2f2f2;
        }
        #users tr:hover {background-color : #ddd;}
        #users th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #00bdff;
            color: white;
        }
    </style>
     <head>
    
    <body>
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
          from users;";
         $result = mysqli_query($con,$queryUsers) or die('there is an error in the query');
         if(mysqli_num_rows($result)>0)
         {
             
             echo '<table id="Users">';
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
             echo 'there is no information to display!!!';
         }

         mysqli_free_result($result);
         mysqli_close($con);
         ?>
         </body>
         </html>