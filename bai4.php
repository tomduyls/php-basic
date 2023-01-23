<?php 
if(isset($_POST['submit'])){
    $result = preg_replace("/[\s\S]{1}#/","", $_POST['txt']);
    while(strpos($result, "#") !== false){
        $result = preg_replace("/[\s\S]{1}#/","", $result);
        if(strpos($result, "#") == 0){
            $result = preg_replace("/#/","", $result);
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai4</title>
</head>
<body>
    <form action="" method="post">
        <table border="0" align="center" width="400">
            <tr>
                <td>Input: </td>
                <td><input type="text" name="txt" id="txt"></td>
            </tr>
            <tr>
                <td>Output: </td>
                <td><?php if(isset($result)) echo $result; ?></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>