<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Khairul\Fm\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Khairul\Fm\CalculatorController@subtract');

Route::resource('/task', 'Khairul\Fm\TaskController');