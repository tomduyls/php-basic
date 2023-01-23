<?php 
if(isset($_POST['submit'])){
    $result = number_format($_POST['num'], 3);
    $num_check_zero = substr($result, strpos($result, ".") + 1);
    $num_check_not_zero = substr($_POST['num'], strpos($_POST['num'], ".") + 1);
    if($num_check_zero == 0)
        $result = number_format($_POST['num'], 0);
    else if($num_check_not_zero < 10)
        $result = number_format($_POST['num'], 1);
    else if($num_check_not_zero < 100)
        $result = number_format($_POST['num'], 2);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai8</title>
</head>
<body>
    <form action="" method="post">
        <table border="0" align="center" width="400">
            <tr>
                <td>Input: </td>
                <td><input type="text" name="num" id="num"></td>
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