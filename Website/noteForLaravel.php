<?php
	
	//	Default route file
routes/web.php
//for web interface

routes/api.php
//for api middleware group


//Method
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);

//multiple HTTP verbs
Route::match(['get', 'post'], '/', function () {
    //
});
Route::any('foo', function () {	//all
    //
});

//CSRF Protection
//required for POST, PUT, DELETE
<form method="POST" action="/profile">
    {{ csrf_field() }}
    ...
</form>

?>