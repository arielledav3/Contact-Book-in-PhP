<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| HTTP protocol
|--------------------------------------------------------------------------
|
| Set to force the use of HTTPS for Stripe
|
*/
//$config['force_https'] = FALSE;

$config['stripe_key_test_public']         = 'pk_test_BuiNb5E0l9GY9nVOJYFNHA5e';
$config['stripe_key_test_secret']         = 'sk_test_O9FyY41M3cxCoHcWPbDGZWaN';
$config['stripe_key_live_public']         = 'pk_live_jBQoGo5JSQKkGpf9CBhmmEfe';
$config['stripe_key_live_secret']         = 'sk_live_qvbdSzGGhC2mc1kQCqMh51fj';
$config['stripe_test_mode']               = TRUE;
$config['stripe_verify_ssl']              = FALSE;

?>