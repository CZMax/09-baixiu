# 09-baixiu
前端09章百秀项目练习

- sql在目录：'baixiu-dev/baixiu-docs-gh-pages/media/baixiu.sql';
- 项目手册在目录： 'baixiu-dev/baixiu-docs-gh-pages/**';

## 注意点
```php
// 载入配置文件,请求响应时才用绝对路径'/config.php'，文件读写机制只有物理路径和相对路径，所以只能用相对路径。
require_once '../config.php';
```

- 定义函数时一定要注意：函数名与内置函数冲突问题
```php
// JS 判断方式：typeof fn === 'function'
// PHP 判断函数是否定义的方式： function_exists('get_current_user')
// function get_current_user () {...}
function xiu_get_current_user () {...}
```


- 采用物理路径解决
```php
// 因为这个 sidebar.php 是被 index.php 载入执行，所以 这里的相对路径 是相对于 index.php
// 如果希望根治这个问题，可以采用物理路径解决
require_once '../functions.php';

//config.php中配置
/**
 * 项目根目录
 */
 define('ROOT_DIR',dirname(__FILE__));

 require_once ROOT_DIR . '../functions.php';
```