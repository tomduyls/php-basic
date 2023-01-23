<?php 
function mostPopularChar($string){
    $string_arr = array_count_values(str_split($string));
    $result_arr = array_keys($string_arr, max($string_arr));
    if(count($result_arr) > 1)
        return "No most popular char";
    else return implode($result_arr);
}
if(isset($_POST['submit'])){
    $txt = $_POST['txt'];
    $result = mostPopularChar($txt);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai6</title>
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