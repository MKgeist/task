<? php
/*
■ 課題
1.Hello Worldと出力する関数を定義して実行させてください。
2.Hello Worldと返す関数を定義して、その関数を使用しHello Worldを出力させてください。
3.Hello Worldという文字列を変数に設定し、その変数を引数として受け取る関数を定義し出力させてください。
4.Hello Worldという文字列を変数に設定し、その変数を引数として受け取りHello World!!に加工してから返す関数を定義し、
  その関数を使用しHello World!!を出力させてください。
5.Helloという文字列を変数に設定し、Worldという文字列を変数に設定します。この2つの変数を引数として受け取る関数を定義し、
  関数内でHello World!!と出力させてください。
6.変数を引数で受け取り、その変数が1のとき「奇数」、2のとき「偶数」、3のとき「奇数」、4のとき「偶数」と出力する関数を定義し実行させてください。
7.配列$arr = [1,2,3,4,5,6]があり、この配列を引数で受け取り123456と出力させる関数を定義してください。
8.リンゴ6個、苺3個、レモン8個、スイカ5個、パイナップル4個、キュウイ2個あります。
  くだもの名をキー、個数を値にした連想配列を定義してください。キーは日本語ではなく英数字で指定してください。例 リンゴ→appleなど

*/
<?php
function test(){
echo "Hello World";
}

echo test();
 ?>

 <br>

 <?php
function test1($i){
if($i >= 0)
echo "Hello World";
}
echo test1(1);
  ?>
<br>

<?php
$a= "Hello World";

function test2($a){
echo $a;
}
echo test2($a);
 ?>
 <br>
 <?php

function test3($a){
  echo $a . "!!";
}
$a= "Hello World";
echo test3($a);
  ?>
<br>
<?php
$a = "Hello";
$b = " World";

function test4($a,$b){
echo $a . $b ."!!";
}
echo test4($a,$b);
 ?>
 <br>

 <?php
function test5($a){
if ($a = 1 or 3){
  echo "奇数";
}
elseif ($a = 2 or 4){
  echo "偶数";
}
}
echo test5(4);
  ?>
  <br>
  <?php
$arr = [1,2,3,4,5,6];
// ７が分かりませんでした。
function test6($arr){
 for ($a = 0; $a <= 6; $a++){
echo $arr[$a];
}}
echo test6(0);
?>

<br>

<?php
$a=array( "apple"=>6, "strawberry"=> 3,"lemon"=> 8,"watermelon"=> 5, "pineapple"=>4,"Kiwi"=>2);
print_r($a);
 ?>




?>
