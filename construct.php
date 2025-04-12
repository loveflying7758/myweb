<?php
//类的定义及调用
/*
class Site { 
  // 成员变量
  var $url; 
  var $title; 
   
  // 成员函数
  function setUrl($par){ 
     $this->url = $par; 
  } 
   
  function getUrl(){ 
     echo $this->url . PHP_EOL; 
  } 
   
  function setTitle($par){ 
     $this->title = $par; 
  } 
   
  function getTitle(){ 
     echo $this->title . PHP_EOL; 
  } 
} 

$runoob = new Site; 
$taobao = new Site; 
$google = new Site; 

// 调用成员函数，设置标题和URL 
$runoob->setTitle( "菜鸟教程" ); 
$taobao->setTitle( "淘宝" ); 
$google->setTitle( "Google 搜索" ); 

$runoob->setUrl( 'www.runoob.com' ); 
$taobao->setUrl( 'www.taobao.com' ); 
$google->setUrl( 'www.google.com' ); 

// 调用成员函数，获取标题和URL 
$runoob->getTitle(); 
$taobao->getTitle(); 
$google->getTitle(); 

$runoob->getUrl(); 
$taobao->getUrl(); 
$google->getUrl();
*/


//使用构造函数定义类
class Site {
  // 成员变量
  var $url;
  var $title;

  function __construct( $par1, $par2 ) {
    $this->url = $par1;
    $this->title = $par2;
  }
  // 成员函数
  function setUrl($par){
     $this->url = $par;
  }
  
  function getUrl(){
     echo $this->url . PHP_EOL;
  }
  
  function setTitle($par){
     $this->title = $par;
  }
  
  function getTitle(){
     echo $this->title . PHP_EOL;
  }
}

$runoob = new Site('www.runoob.com', '菜鸟教程');
$taobao = new Site('www.taobao.com', '淘宝');
//$google = new Site('www.google.com', 'Google 搜索');
///*
$google=new Site('x','y');
$google->setUrl( 'www.google.com' );
$google->setTitle( 'Google 搜索' );
//*/

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$runoob->getUrl();
echo "<br>";

$taobao->getTitle();
$taobao->getUrl();
echo "<br>";

$google->getTitle();
$google->getUrl();
echo "<br>";


//构造函数与析构函数
/*
class MyDestructableClass {
   function __construct() {
       print "构造函数\n";
       $this->name = "MyDestructableClass";
   }

   function __destruct() {
       print "销毁 " . $this->name . "\n";
   }
}

$obj = new MyDestructableClass();
*/

class Child_Site extends Site {
   var $category;

    function setCate($par){
        $this->category = $par;
    }
  
    function getCate(){
        echo $this->category . PHP_EOL;
    }
}

$myweb=new Child_Site("www.scjysy.cn",'石元乡电商平台');
$myweb->setCate('电商');
$myweb->setTitle('四川省江油市石元乡电商平台');
$myweb->getCate();
$myweb->getTitle();


/**
 * 属性方法关键字
 */
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public; // 这行能被正常执行
echo $obj->protected; // 这行会产生一个致命错误
echo $obj->private; // 这行也会产生一个致命错误
$obj->printHello(); // 输出 Public、Protected 和 Private


/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // 可以对 public 和 protected 进行重定义，但 private 而不能
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj2 = new MyClass2();
echo $obj2->public; // 这行能被正常执行
echo $obj2->private; // 未定义 private
echo $obj2->protected; // 这行会产生一个致命错误
$obj2->printHello(); // 输出 Public、Protected2 和 Undefined



?>