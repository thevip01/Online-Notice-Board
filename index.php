<html>
    <head>
        <link rel="icon" href="software.png">
        <title>Notice Board</title>
        
        <link rel="stylesheet" href =".\\new.css">

    </head>
    <body >

        <nav class="navbar page-navbar">
            <div class="logo">
                <a href="#" class="Projname">
                    <li type="None">Notice <li type="None" class="li22">&nbsp;Board</li></li>
                </a>
            </div>
            <div class = "menu">    
                <ul type="None">
                    <li><a href="Admin.html">Admin</a></li>
                    <li><a href="About.html">About</a></li>
                    <li><a href="Feedback.html">Feedback</a></li>
                </ui>
            </div>
        </nav>
        <section>
            <?php
                require 'conn.php';
                try {
                    $rs = mysqli_query($conn,"SELECT * FROM `Notice` WHERE `notice_id`=1");
                    $row = mysqli_fetch_assoc($rs);
                    $topic =  $row['notice_topic'];
                    $desc = $row['notice_desc'];
                    $up_date =  $row['upload_date'];
                    $ex_date = $row['end_date'];
                    $c = 1;
                } catch (Exception $th) {
                    $c = 0;
                }
            ?>

            <div class="main-container">
                <div class="warning">
                    <h2><?php 
                            if($c == 1){ echo $topic;} ?></h2>
                    <p class="descript"><?php 
                            if($c == 1){ echo $desc;} ?></p>
                    <p class="descdt"><?php 
                            if($c == 1){ echo "Upload Date: ".$up_date; echo "</br></br>";  echo "Last Date: ".$ex_date;} ?></p>
                </div>
                <table class="sub-warning">
                    <?php
                        require 'conn.php';
                        $que = "SELECT `notice_topic`, `notice_desc`, `end_date` FROM `notice` WHERE `notice_id` != 1;";
                        $query = $conn->query($que);
                        $count = 1;
                        while($fetch = $query->fetch_assoc()){
                    ?>                
                    <tr class="old1">
                        <td><h2 class="subtopic"><?php echo $fetch['notice_topic'] ?></h2>
                        <p class="subwarning"><?php echo $fetch['notice_desc'] ?></p>
                        <h4  align="center"> Last Date: <?php echo $fetch['end_date'] ?></h4></td>
                    <tr>
                    <?php 
	                    }
                    ?>              
                </table>
            </div>
        </section>
    </body>
</html>