<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="refresh" content="0;url=index.php">

<title>Delete a Message</title>
</head>
<body>
    <center>

        <?php

include 'menu.php'; // Import the navigation bar of the website
?>

                 <h3>Delete message</h3>

            <?php

// Execute to delete the message information of the specified ID
// 1, get the id number of the message to be deleted
$id = $_GET["id"]; // url address submission is submitted by get method

// 2, Get the message information from the message liuyan.txt information file
$info = file_get_contents("liuyan.txt");

// 3, split the message information into one piece by @@@ conformity (split the message information into a message array with the symbol of @@@)
$lylist = explode("@@@", $info);

// 4. Use unset to delete the message with the specified ID
unset($lylist[$id]);

// 5. Restore the message information to a string and write back the message file: liuyan.txt
$ninfo = implode("@@@", $lylist);
file_put_contents("liuyan.txt", $ninfo);
// 6
echo "successfully deleted";

?>
        </table>


    </center>
</body>
</html>
