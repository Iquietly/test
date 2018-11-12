 <?php
// $num = 0;
// for($i=1;$i<=4;$i++) {
// for($j=1;$j<=4;$j++) {
// for($k=1;$k<=4;$k++) {
// if($i != $j && $j != $k&& $i != $k) {
// 	echo $i.$j.$k;
// $num = $num + 1;
// }
// }
// }
// }
// echo "一共是".$num;

 
  //单例
 //  class Uni{
 //          //创建静态私有的变量保存该类对象
 //      static private $instance;
 //          //参数
 //     private $config;
 //          //防止直接创建对象
 //      private function __construct($config){
 //         $this -> config = $config;
 //                 echo "我被实例化了";
 //     }
 //         //防止克隆对象
 //     private function __clone(){
 //      }
 //     static public function getInstance($config){
 //                 //判断$instance是否是Uni的对象
 //                 //没有则创建
 //         if (!self::$instance instanceof self) {
 //             self::$instance = new self($config);
 //         }
 //         return self::$instance;
         
 //    }
 //     public function getName(){
 //         echo $this -> config;
 //     }
 // }
 // $db1 = Uni::getInstance(1);
 // $db1 -> getName();
 // echo "<br>";
 // $db2 = Uni::getInstance(4);
 // $db2 -> getName();


//  function my_dir($dir) {
//     $files = array();
//     if(@$handle = opendir($dir)) { //注意这里要加一个@，不然会有warning错误提示：）
//         while(($file = readdir($handle)) !== false) {
//             if($file != ".." && $file != ".") { //排除根目录；
//                 if(is_dir($dir."/".$file)) { //如果是子文件夹，就进行递归
//                     $files[$file] = my_dir($dir."/".$file);
//                 } else { //不然就将文件的名字存入数组；
//                     $files[] = $file;
//                 }
 
//             }
//         }
//         closedir($handle);
//         return $files;
//     }
// }
// echo "<pre>";
// print_r(my_dir("."));
// echo "</pre>";

 header("content-type:text/html;charset=utf-8");
$a='/a/b/c/d/e.php';
$b='/a/b/12/34/c.php';
  function getRelativePath($a, $b) {///a/b/12/34/../../c/d/e.php
    $returnPath = array(dirname($b));
    $arrA = explode('/', $a);
    $arrB = explode('/', $returnPath[0]);
    for ($n = 1, $len = count($arrB); $n < $len; $n++){
        if ($arrA[$n] != $arrB[$n]) {
            break;
        }
    }
    if ($len - $n > 0) {
        $returnPath =array_merge($returnPath, array_fill(1, $len - $n, '..'));
    }
     
    $returnPath = array_merge($returnPath,array_slice($arrA, $n));
    return implode('/', $returnPath);
}
echo getRelativePath($a, $b); 
//输出结果：/a/b/12/34/../../c/d/e.php
 ?>

