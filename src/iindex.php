<?php
$redis = new Redis();
$redis->connect('redis-server', 6379);

$redis->set('mykey', 'Hello, Redis!');
$value = $redis->get('mykey');
echo "Nilai untuk 'mykey': $value\n";
$redis->close();