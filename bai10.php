<?php 
function is_Vowels($char){
    if($char == 'a' || $char == 'A' || $char == 'e'
    || $char == 'E' || $char == 'i' || $char == 'I'
    || $char == 'o' || $char == 'O' || $char == 'u'
    || $char == 'U')
        return true;
    return false;
}
function reverseVowels($arr){
    $i = 0;
    $j = count($arr) - 1;

    while($i < $j){
        if(!is_Vowels($arr[$i])){
            $i++;
            continue;
        }
        if(!is_Vowels($arr[$j])){
            $j--;
            continue;
        }
        
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
        $i++;
        $j--;
    }

    return $str = implode($arr);

}
if(isset($_POST['submit'])){
    $txt_arr = str_split($_POST['txt']);
    $result = reverseVowels($txt_arr);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai10</title>
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