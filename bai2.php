<?php 
function is_Vowels($char){
    if($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u')
        return true;
    return false;
}
function LetterChange($str){
    $str_arr = str_split($str);
    $i = 0;
    while($i < count($str_arr)){
        if(is_numeric($str_arr[$i])){
            $i++;
            continue;
        }
        if(is_string($str_arr[$i])){
            if($str_arr[$i] == 'z')
                $str_arr[$i] = 'a';
            else $str_arr[$i]++;

            if(is_Vowels($str_arr[$i]))
                $str_arr[$i] = strtoupper($str_arr[$i]);
            $i++;
        }
    }
    return $str_result = implode($str_arr);
}
if(isset($_POST['submit'])){
    $result = LetterChange($_POST['txt']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai2</title>
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