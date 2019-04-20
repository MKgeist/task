<!-- <?php
$string = "ABCDEF";
echo strlen($string);
//=> 6 と表示される
?>

<?php
// 1〜10 までを足した値を返す関数
function sum($max){

    // $result は結果を保存する変数
    $result = 0;

    // $i は 1　からはじまり $max より大きくなるまでループする
    for($i = 1; $i <= $max; $i++){

        // $result に　$i を順番に足していく
      $result += $i;
    }
    return $result;
  }
echo sum(100);
?>

<?php
// 1から100までを順番に表示する関数
function print_number(){

    for($i = 0; $i < 100; $i++){
        echo $i;
    }
}
?> -->
<?php
function v($v){

echo $v*2;
}
echo v(13);
?>
<br>
<?php
function f($a, $b){
echo $a+$b;
}
echo f(3,8);
?>
<br>

<?php
function test($input){
  $total=1;
foreach($input as $value){
$total = $total * $value;
}
return $total;
}

$arr = array(1, 3, 5 ,7, 9);
$output = test($arr);
print $output;
?>
<br>
<?php
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
$max_number = $arr[0];
 foreach($arr as $a){
   if($a>$max_number);
   $max_number=$a;
 }

 return $max_number;
 }
 $arr = array(2,4,7,9);
 echo max_array($arr);
 ?>
<br>
strip_tags
<?php
$test = "<p>課題</p><a>test</a>";
echo strip_tags($test);

echo strip_tags($test,"<p><a>");
?>
<br>
array_push
<?php
$stack= array(1,2,3,4);
array_push($stack,12,33);
print_r ($stack);
 ?>
 <br>
 array_merge
 <?php
$array1= array("a","b");
$array2= array("fruit" => "apple", 5,7);
$result= array_merge($array1,$array2);
print_r($result);
  ?>
<br>
time,mktime
<?php
$nextweek = time() + (7 * 24 * 60 * 60);
echo 'Now:      '. date('Y-m-d') ."\n";
echo 'Next Week:'. date('Y-m-d', $nextweek) ."\n";
// // あるいは strtotime() を使用します
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";
 ?>
 <br>
 <?php
echo date("Y-m-d", mktime(0, 0, 0, 12, 35, 2019));
  ?>
  <br>
  date
  <?php
echo date("Y-m-D", mktime(0, 0, 0, 2, 25, 2011));
   ?>
