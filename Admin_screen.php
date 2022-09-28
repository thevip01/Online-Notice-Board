<html>
    <head>
        <link rel="icon" href="software.png">
        <title>Notice Board</title>
        
        <link rel="stylesheet" href ="new.css">
        <link rel="stylesheet" href="admin2.css">
        <style type="text/css">
            button {
                margin-bottom: 10px;
                margin-left: 25%;
                margin-right: auto;
                width: 50%;
            }
        </style>

    </head>
    <body >
        <nav class="navbar page-navbar">
            <div class="logo">
                <a href="index.php" class="Projname">
                    <li type="None">Notice <li type="None" class="li22">&nbsp;Board</li></li>
                </a>
            </div>
            <div class = "menu">    
                <ul type="None">
                    <li class="disabled"><a href="Admin.html">Admin</a></li>
                    <li><a href="About.html">About</a></li>
                    <li><a href="Feedback.html">Feedback</a></li>
                </ui>
            </div>
        </nav>
            <h3 align="center">Admin Panel</h3>
            <hr style="border-top:1px dotted #ccc;">
            <div class="container">
                <center>
                    <form method="POST" class="container" action="add_query.php">
                        <label for="notice_topic">Notice Topic</label>
                        <input type="text" name="notice_topic" required><br>
                        <label for="notice_desc">Notice description</label>
                        <textarea rows="5" cols="5"class="" name="notice_desc" required></textarea><br>
                        <label for="upload_date">Publish Date</label>
                        <input type="date" name="upload_date" required><br>
                        <label for="end_date">Event End Date</label>
                        <input type="date" name="end_date" required>
                        <button name="add">Add Notice</button>
                    </form>
                </center>
            </div>
    </body>
</html>