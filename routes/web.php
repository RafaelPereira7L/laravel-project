<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/request', function (\Illuminate\Http\Request $request) {
    $r = $request->has('keyword');

    dd($r);
    return 'request';
});

Route::get('user/{user}', function(\App\Models\User $user) {
    return $user;
});


/*
Route::prefix('users')->group(function () {

    Route::get('', function() {
        return 'users';
    })->name('users');

    Route::get('/{id}', function ($id) {
        return 'User id -> ' . $id;
    })->name('users.show');

    Route::get('/{id}/roles', function ($id) {
        return [
            'user_id' => $id,
            'roles' => ['admin', 'user']
        ];
    })->name('users.roles');
});

Route::get('/a-empresa/{string?}', function ($string = null) {
    return $string;
    //return view('welcome');
})->name('a-empresa');


Route::get('/users/{paramA}/{paramB}', function ($id, $name) {
    return [
        'id' => $id,
        'name' => $name,
    ];
    //return view('welcome');
});

*/
