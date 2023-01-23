<?php 
function LongestWord($sen){
    $longest = 0;
    for($i = 1; $i < count($sen); $i++){
        if(strlen($sen[$i]) > strlen($sen[$longest]))
            $longest = $i;
    }
    return $sen[$longest];
}
if(isset($_POST['submit'])){
    $txt_preg = preg_replace("/(?![.=$'€%-])\p{P}/u", "", $_POST['txt']);
    $txt_array = explode(' ', $txt_preg);
    $result = LongestWord($txt_array);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai1</title>
</head>
<body>
    <form action="" method="post">
        <table width="400" border="0" align="center">
            <tr>
                <td>Input:</td>
                <td><input type="text" name="txt" id="txt"></td>
            </tr>
            <tr>
                <td>Output:</td>
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