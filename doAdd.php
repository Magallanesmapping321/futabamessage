<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="refresh" content="0;url=index.php">


 <title>Comment</title>
</head>
<body>
    <center>
   

                 <h3>Add a comment</h3>

        <?php
// Execute message adding operation

// 1. Get the message information to be added, and fill in other auxiliary messages (IP address, adding time)
$title = $_POST['title']; // Get message title
$author = $_POST["author"]; // Get the message
$content = $_POST["content"]; // Message content

// 2. Assembly (assembly) message
$ly = "{$title}##{$author}##{$content}##{$ip}##{$addtime}@@@";

// 3. Append the message information to the liuyan.txt file
$info = file_get_contents("liuyan.txt"); // Get all previous comments
file_put_contents("liuyan.txt", $info . $ly); // Overwrite writing will overwrite the original data

// 4. Output message successfully
echo "The message has been posted! Thank you...";

?> 
    </center>
</body>
</html>
