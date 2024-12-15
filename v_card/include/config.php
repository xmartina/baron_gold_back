<?php
include_once (__DIR__ . '/db_connection.php');

 $base_url = 'https://account.barongold.online/';
$home_url = 'https://barongold.online/';
$site_url = $base_url;
$external_base_url = 'https://qfsholdings.io/';
 $site_name  = 'Baron Capital Investment (Gold)';
 $favicon_url = $base_url . 'assets/imgs/qfsicon.png';
 $site_logo = $site_url .'assets/img/logo/logo_dark.png';
 $login_url = $base_url . '?a=login';
const current_year = '|default:2024';

{$home_url = 'https://barongold.online/'}
{$site_url = 'https://account.barongold.online/'}
{$site_name = 'Baron Capital Investment (Gold)'}