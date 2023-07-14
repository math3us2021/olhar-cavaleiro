<?php

    use App\Http\Controllers\EventController;
    use App\Http\Controllers\UserController;
    use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', [EventController::class, 'index']);
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [EventController::class, 'edit']);
Route::put('/events/update/{id}', [EventController::class, 'update']);


Route::get('/dashboard', [UserController::class, 'index'])->middleware('auth');
//    Route::get('/events', function () {
//        return view('welcome');
//    });
Route::resource('/users', UserController::class)->middleware('auth');

//Route::get('/users/create', [UserController::class, 'create']);
////Route::post('/users', [UserController::class, 'store']);
//Route::delete('/users/{id}', [UserController::class, 'destroy']);
//Route::get('/users/edit/{id}', [UserController::class, 'edit']);
//Route::put('/users/{id}', [UserController::class, 'update']);
