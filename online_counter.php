<?php

$visitors_file = 'visitors.json';

$active_time = 300; // 5 минут в секундах

$current_time = time();

$user_ip = $_SERVER['REMOTE_ADDR'];


$visitors = [];
if (file_exists($visitors_file)) {
    $json_data = file_get_contents($visitors_file);
    $visitors = json_decode($json_data, true) ?: [];
}


$visitors[$user_ip] = $current_time;


foreach ($visitors as $ip => $visit_time) {
    if ($current_time - $visit_time > $active_time) {
        unset($visitors[$ip]);
    }
}


file_put_contents($visitors_file, json_encode($visitors));


$online_count = count($visitors);


?>
<div class="online-counter">
    <div class="online-dot"></div>
    <span>Сейчас на сайте: <strong><?php echo $online_count; ?></strong> клиентов</span>
</div>