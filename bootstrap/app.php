<?php
$app = new Consolle\Foundation\Application(__APP_BASE_PATH__);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
*/

$app->singleton(
	'Consolle\Contracts\Kernel',
	'App\Application'
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
*/

return $app;
