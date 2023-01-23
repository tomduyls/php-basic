<?php 
function CreatePhoneNumber($arr){
    $first_part = "";
    $second_part = "";
    $last_part = "";
    for($i = 0; $i < count($arr); $i++){
        if($i < 3) $first_part .= $arr[$i];
        else if($i < 6) $second_part .= $arr[$i];
        else $last_part .= $arr[$i];
    }
    return "($first_part) $second_part-$last_part";
}
if(isset($_POST['submit'])){
    $num_array = str_split($_POST['num']);
    $result = CreatePhoneNumber($num_array);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai3</title>
</head>
<body>
    <form action="" method="post">
        <table border="0" align="center" width="400">
            <tr>
                <td>Input: </td>
                <td><input type="text" name="num" id="num" pattern="\d*" minlength="10" maxlength="10"></td>
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