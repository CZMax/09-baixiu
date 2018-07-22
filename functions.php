<?php

/**
 * 封装大家公用的函数
 */

 // 给用户找一个箱子（如果你之前有就用之前的，没有给个新的）
session_start();
/**
 * 获取当前用户登录信息
 */
function xiu_get_current_user(){
    if (empty($_SESSION['current_login_user'])) {
        //没有当前登录用户信息，意味着没有登录，跳转到登录页
        header('Location:/admin/login.php');
        exit();
      }
      return $_SESSION['current_login_user'];
}


  