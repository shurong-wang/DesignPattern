<?php
define('BASEDIR', dirname(getcwd()));
include BASEDIR . '/tests/tools.php';
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

/**
 * 测试：SPL(Standard PHP Library) 常用数据结构
 * */

// 栈（后进先出）：
$stack = new SplStack();
$stack->push('stack1');
$stack->push('stack2');
$stack->push('stack3');
dump($stack->pop());

// 队列（先进先出）：
$queue = new SplQueue();
$queue->enqueue('queue1');
$queue->enqueue('queue2');
$queue->enqueue('queue3');
dump($queue->dequeue());

// 最小堆（任意节点的优先级不小于它的子节点）：
$heap = new SplMinHeap();
$heap->insert('minHeap1');
$heap->insert('minHeap2');
$heap->insert('minHeap3');
dump($heap->extract());

// 固定长度数组：
$array = new SplFixedArray(3);
$array[0] = 'fixed1';
$array[1] = 'fixed2';
$array[2] = 'fixed3';
dump($array);
