<?php
$sum=0;
for($i=1;$i<=100;$i++)
{
	$sum+=$i;
}
// echo $sum;
// echo "<hr>";
// $sum=$i=0;
// while($i<=100)
// {
// $sum+=($i++);
// }
// echo $sum;
// echo "<hr>";
// function get_sum($n)
// {
// 	return $n==1?:$n+get_sum($n-1);
// }
// echo get_sum(100);
// echo "<hr>";
// function f($n)
// {
// $out = -1;
// if($n<0)
// echo "输入不能是负数";
// else if($n==0||$n==1)
// $out=1;
// else $out=f($n-1)*$n;
// return $out;
// }
// echo f(6);
// echo "<hr>";
// function factorial($n){
//     if($n<=1){
//         return 1;
//     }
//     if($n>1){
//         return $n*factorial($n-1);
//     }
// }

/*求1！+2！+3！+4！+……+n！*/
// function sum_factorial($n){
//     $sum = 0;
//     for($i=1;$i<=$n;$i++){
//         $sum+=factorial($i);
//     }
//     return $sum;
// }

// echo sum_factorial(10);
// echo "<hr>";
// function f($n){
//     if($n<=1){
//         return 1;
//     }else{
//         return $n*f($n-1);
//     }
 
// }
// echo f(10);
// function factorial ($natural) {
 
//     $result = 1;
 
//     if ($natural > 0) {
 
//         $result = $natural * factorial(($natural - 1));
//     }
 
//     return $result;
// }

// echo factorial(5);
// echo "<hr>";
// function f($n)
// {
// $out = -1;
// if($n<0)
// echo "输入不能是负数";
// else if($n==0||$n==1)
// $out=1;
// else $out=f($n-1)*$n;
// return $out;
// }
// echo f(6);
// $str = "abba";
//  $arr1 = str_split($str);
//  $revstr='';
//  $i=count($arr1);
//  while($i >= 0){
//      $revstr .= $arr1[$i];
//      $i--;
//  }
//  echo $revstr; 
// abstract class Student {
// abstract function do_homework(); //定义抽象方法
// }
// //继承扩展Student类
// class Cs extends Student {
// function do_homework() {
// echo "I am doing homework!";
// }
// }
// $test = new Cs();
// $test->do_homework();
// class Person{
// 　　 private $name;
// 　　 private $gender;
// 　　 private $age;
// 　　function __construct($name,$gender,$age){
// 　　 $this->name = $name;
// 　　 $this->gender = $gender;
// 　　 $this->age = $age;
// 　　}
// 　　function _say(){
// 　　 return "_say in Person class";
// 　　}
// 　　function _run(){
// 　　 return "_run in Person class";
// 　　}
// 　　function __destruct(){
// 　　}
// 　　}
// 　　class Student extends Person{
// 　　 function say(){
// 　　 return Person::_say()." and _say rewrite in Student class ";
// 　　}
// 　　}
// 　　$student = new Student("John","male","20");
// 　　echo $student->_run();
// 　　echo "<br/>";
// 　　echo $student->say();

?>