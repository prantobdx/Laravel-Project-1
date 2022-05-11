<?php

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

Route::get( '/', function ()
{
    //return view('welcome');
    return 'Hello world';
} );

Route::get( '/bitm', function ()
{
    return 'hello BITM';
} );

Route::get( '/basis', function ()
{
    return view( 'demo' );
} );
Route::get( '/arif', function ()
{
    return view( 'arif' );
} );

// c:26 done