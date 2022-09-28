<?php
    require_once 'conn.php';
	if(ISSET($_POST['add'])){
        $username = $_POST['uname'];
        $psw    = $_POST['psw'];
        
        $rs = mysqli_query($conn,"SELECT * FROM admin");
       
            $row = mysqli_fetch_assoc($rs);
            $uname =  $row['UserName'];
            $pswd = $row['Password'];
            if($uname == $username and $pswd == $psw)
            {
                    header('location:Admin_screen.php');
            }
            else {
                return 0;
            }
    }

?>