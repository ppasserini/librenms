<?php

$name = 'suricata';
$unit_text = 'IPv6 pkts/s';
$descr = 'IP6 in IP6 Too Small';
$ds = 'data';

if (isset($vars['sinstance'])) {
    $rrd_filename = Rrd::name($device['hostname'], ['app', $name, $app->app_id, 'instance_' . $vars['sinstance'] . '___decoder__event__ipv6__ipv6_in_ipv6_too_small']);
} else {
    $rrd_filename = Rrd::name($device['hostname'], ['app', $name, $app->app_id, 'totals___decoder__event__ipv6__ipv6_in_ipv6_too_small']);
}

require 'includes/html/graphs/generic_stats.inc.php';
