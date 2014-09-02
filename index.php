<?php
require 'vendor/autoload.php';
use Carbon\Carbon;
date_default_timezone_set('Asia/Jakarta');
$date = Carbon::createFromDate(1945, 8, 17);
printf("Kapan Indonesia Merdeka? %s\n", $date->diffForHumans());
