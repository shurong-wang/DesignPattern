<?php
// 定义命名空间
## 命名空间通过关键字 namespace 来声明。
## 如果一个文件中包含命名空间，它必须在其它所有代码之前声明，除了一个以外：declare 关键字。
## 另外，所有非 PHP 代码（包括空白符）都不能出现在命名空间的声明之前
/**
 * Example #1 声明单个命名空间
 */
namespace MyProject;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */ }

// 定义子命名空间
## 与目录和文件的关系很象，PHP 命名空间也允许指定层次化的命名空间的名称
## 因此，命名空间的名字可以使用分层次的方式定义
/**
 * Example #2 声明分层次的单个命名空间
 */
namespace MyProject\Sub\Level;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */ }

// 在同一个文件中定义多个命名空间
## 可以在同一个文件中定义多个命名空间，有两种语法形式
/**
 * 1.简单组合语法
 */
// 如 Example #1 与  Example #2

?>