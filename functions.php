<?php

require_once 'config.php';
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

/**
 * 通过一个数据库查询获取数据
 * =>索引数组套关联数组
 */
function xiu_fetch_all($sql){
    $conn = mysqli_connect(XIU_DB_HOST, XIU_DB_USER, XIU_DB_PASS, XIU_DB_NAME);
    if (!$conn){
        exit('数据库连接失败');
    }
    $query = mysqli_query($conn,$sql);
    if (!$query) {
        // 查询失败
        return false;
    }
        
    while ($rows = mysqli_fetch_assoc($query)){
        var_dump($rows);
        $result[]=$rows;
    }
    
    mysqli_free_result($query);
    mysqli_close($conn);

    return $result;

}
/**
 * 通过一个数据库查询获取一条数据
 * =>关联数组
 */
function xiu_fetch_one ($sql){
    $res = xiu_fetch_all($sql);
    return  isset($res[0]) ? $res[0] : null;

}
/**
 * 修改数据库记录
 * 
 */
function xiu_execute($sql){
    $conn = mysqli_connect(XIU_DB_HOST, XIU_DB_USER, XIU_DB_PASS, XIU_DB_NAME);
    if (!$conn){
        exit('数据库连接失败');
    }
    $query = mysqli_query($conn,$sql);
    if (!$query) {
        // 查询失败
        return false;
    }
    //获取受影响行数
    $affected_rows = mysqli_affected_rows($conn);
    
    mysqli_close($conn);

    return $affected_rows;
}

/**
 * 连接
 */
function xiu_conn(){
    $conn = mysqli_connect(XIU_DB_HOST, XIU_DB_USER, XIU_DB_PASS, XIU_DB_NAME);
    if (!$conn){
        exit('数据库连接失败');
    }
    $query = mysqli_query($conn,$sql);
    if (!$query) {
        // 查询失败
        return false;
    }
    return $conn;
}