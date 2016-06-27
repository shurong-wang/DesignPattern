<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?=$title?></title>
<style>
body {
	font-family: "Microsoft YaHei UI";
	background: rgba(10, 110, 220, 0.5);
}
li {
	margin-bottom: 6px;
}
a {
	text-decoration: none;
	color: white;
}
</style>
</head>
<body>
	<h1>
		<a href="<?=$url?>" target="_blank"><?=$title?></a>
	</h1>
	<ol>
		<li><a href="<?=$test?>test_autoload.php" target="_blank">自动加载类文件</a></li>
		<li><a href="<?=$test?>test_magic_methods.php" target="_blank">魔术方法</a></li>
		<li><a href="<?=$test?>test_spl.php" target="_blank">PHP标准库</a></li>
		<li><a href="<?=$test?>pattern_singleton.php" target="_blank">单例模式</a></li>
		<li><a href="<?=$test?>pattern_factory.php" target="_blank">工厂模式</a></li>
		<li><a href="<?=$test?>test_chain_operate.php" target="_blank">链式操作</a></li>
		<li><a href="<?=$test?>pattern_iterator.php" target="_blank">迭代器模式</a></li>
		<li><a href="<?=$test?>pattern_adapter.php" target="_blank">适配器模式</a></li>
		<li><a href="<?=$test?>pattern_strategy.php" target="_blank">策略模式</a></li>
		<li><a href="<?=$test?>pattern_register.php" target="_blank">注册器模式</a></li>
		<li><a href="<?=$test?>pattern_proxy.php" target="_blank">代理模式</a></li>
		<li><a href="<?=$test?>pattern_prototype.php" target="_blank">原型模式</a></li>
		<li><a href="<?=$test?>pattern_orm.php" target="_blank">数据对象映射模式</a></li>
		<li><a href="<?=$test?>pattern_observer.php" target="_blank">观察者模式</a></li>
		<li><a href="<?=$test?>pattern_decorator.php" target="_blank">装饰器模式</a></li>
		<li><a href="<?=$test?>test_config.php" target="_blank">自动加载配置文件</a></li>
		<li><a href="<?=$home?>index/?app=html" target="_blank">装饰器模式案例1</a></li>
		<li><a href="<?=$home?>index/?app=json" target="_blank">装饰器模式案例2</a></li>
		<li><a href="<?=$home?>test_proxy" target="_blank">代理模式案例</a></li>

	</ol>
</body>
</html>