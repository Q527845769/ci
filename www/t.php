<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//function getfiles($path) {
//    foreach (glob($path) as $afile) {
//        if (is_dir($afile)) {
//            getfiles($afile . '/*');
//        } else {
//            echo $afile . '<br />';
//        }
//    }
//}
//
////简单的demo,列出当前目录下所有的文件
//getfiles(__DIR__);

//echo getcwd()."<br>";
//echo __DIR__."<br>";
//echo __FILE__;
//
//list($usec, $sec) = explode(" ", microtime());
//echo microtime()."<br>";
//echo (sprintf("%.2f",(float)$usec)."<br>" . (float)$sec."<br>");

echo $_SERVER["PHP_SELF"]."<br>";
echo $_SERVER["REQUEST_URI"]."<br>";