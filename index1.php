<?php


print_r($_POST);

$email= $_POST['email'];
$password= $_POST['password'];
$radio= $_POST['radio'];

echo "<br>Question 1 , 2: ";
if(isset($email) && isset($password)){
    echo "<br>'$email'.<br>'$password'";
    echo $radio;
}
else{
    echo "<br>Erroe! Email and password are blank.";
}

// echo "<br>Question 3:";
// if(isset($_POST['check'])){
//     echo "<br>true";
//     $a= range(0, 100);
//     shuffle($a);
//     $random_keys=array_slice($a,0,100);
//     echo "<pre>";
//     print_r($random_keys);
//     echo "</pre>";
// }else{
//     echo "<br>false";
// }
  ?>
 
  <?php
echo ("\n You Selected ");
$radiobutton = $_POST['gridRadios'];
echo ($radiobutton);
?>
<br>
<?php
$checkbox = $_POST['checkbox'];
if ($checkbox == "") {
    echo ("False");
} else {
    echo ("True");
}
?>

 <br><br><br><br>

<?php
echo "<h3>Sort Array</h3>";
function sortarray($arr, $string)
{
    if ($string == "ASC") {
        sort($arr);
    } elseif ($string == "DSC") {
        rsort($arr);
    } else {
        sort($arr);
    }
    $arrlength = count($arr);
    for ($x = 0; $x < $arrlength; $x++) {
        echo $arr[$x];
        echo ",";
    }
}

$number = array("j ", "a ", "w ", "a ", "d ", "d ","t ", "u");
sortarray($number, "");
echo "<br>Question 5";
if ($_POST["gridRadios"] == 'First radio') {
    $random_array = range(0, 100);
    shuffle($random_array);
    echo "<strong>Random number array</strong><br>";
    foreach ($random_array as $val1) {
        echo "$val1";
    }
    echo "<br><strong>sort array</strong><br>";
    sortarray($random_array, " ");
} else {
    echo "You Selected 2<sup>nd</sup> Option<br>";
}


echo "<br>Question 6";
if ($_POST["gridRadios"] == 'Second radio') {
    $random_array = range(0, 100);
    shuffle($random_array);
    echo "<strong>Random number array</strong><br>";
    foreach ($random_array as $k =>  $val) {
        echo "$k=>  $val";
    }
    echo "<br><strong>sort array</strong><br>";
    sortarray($random_array, " ");
} else {
    echo "You Selected 1<sup>st</sup> Option<br>";
}
?>



