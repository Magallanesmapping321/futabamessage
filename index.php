<?php 

?>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>FutabaMessage</title>
   <link rel="stylesheet" href="futaba.css">

</head>
    <center>
        <h1>FutabaMessage</h1>
        <a href="index.php">New Message</a>
        <hr width="%90" />

        <form action="doAdd.php" method="post">
            <table width="380" border="0" cellpadding="4">
                                <tr>
                    <td align="left" class="futaba">Name:</td>
                    <td><input type="text" name="author" value="Anonymous" /></td>
                </tr>
                <tr>
                    <td align="left" class="futaba">Subject:</td>
                    <td><input type="text" name="title" />         
                    <input type="submit" value="submit" />
                    <input type="reset" value="Reset" />
                </tr>                


                <tr>
                    <td align="left" valign="center" class="futaba">Message:</td>
                    <td><textarea name="content" rows="5" cols="30"></textarea></td>
                </tr>
                                <tr>
                    <td align="left" class="futaba">Password:</td>
                    <td><input type="password" name="pass" />         
                </tr>     


            </table>
        </form>
<hr>
    <table border="1" width="700" class="posts">
            <tr>
                                 <th>Subject/Title</th>
                                 <th>Name</th>
                                 <th>Message</th>
                                 <th>Delete?</th>
            </tr>
            <?php

// Get the message information and output it to the form after parsing
// 1, get the message information from the message liuyan.txt information file
$info = file_get_contents("liuyan.txt");
// 2, Take out the three @@@ symbols at the end of the message content
$info = rtrim($info, "@");//What do you mean

if (strlen($info)>=8){

// 3, split the message information into one piece by @@@ conformity (split the message information into a message array with the symbol of @@@)
$lylist = explode("@@@", $info);
// 4, traverse the message information array, and analyze each message again
foreach ($lylist as $key => $value) {
    $ly = explode("##", $value); // Split each message into each message field with ##
    echo "<tr>";
    echo "<td>{$ly[0]}</td>";
    echo "<td>{$ly[1]}</td>";
    echo "<td>{$ly[2]}</td>"; // String interception function

    echo "<td><a href='del.php?id={$key}'>Delete</a></td>";
   // echo "<td><a href='javascript:dodel({$key})'>Delete</a></td>";
    // How to link value
    echo "</tr>";
    // echo $value."<br>";
}
}
?>
        </table>
                <hr>
       Running on <a href="https://gitlab.com/sh1tonthesink1112/futabamessage">FutabaMessage</a>
    </center>
</body>
</html>
