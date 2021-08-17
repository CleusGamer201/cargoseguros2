<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewBackNotification;
use App\Models\Back;

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

Route::get('/', function () {
    $currentUser = Auth::user();
    if (!isset($currentUser) || $currentUser == null) {
        return view('index');
    }
    return redirect('dashboard');
});


// Auth::routes(['verify' => true]);
Auth::routes();
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

//Auth::routes(['verify' => true]);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Grupos para no repetir Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    // Respaldos
    Route::post('/creado', [BackController::class, 'create'])->name('createRespalde');
    Route::post('/actualizado', [BackController::class, 'edit'])->name('updateRespalde');
    Route::get('/eliminado', [BackController::class, 'delete'])->name('deleteRespalde');
    Route::get('/generar-respaldo', [BackController::class, 'generateView'])->name('generate');
    Route::get('/editar-respaldo', [BackController::class, 'editView'])->name('editRespalde');
    Route::get('/historial', [BackController::class, 'deletedView'])->name('historyRespalde');
    Route::get('/eliminado-permanente', [BackController::class, 'forceDelete'])->name('forceDeleteRespalde');

    // PDFs
    Route::get('/listado', [PdfController::class, 'index']);
    Route::get('/previsualizando', [PdfController::class, 'visualizePdf'])->name('visualize');
    Route::get('/aprobando', [PdfController::class, 'approvePdf'])->name('aproved');


    // Verificar users (Code temporal)
    Route::get('/usuarios', [HomeController::class, 'listUsers'])->name('listUsers');
    Route::get('/approveUser', [HomeController::class, 'approveUser'])->name('approveUser');
    Route::get('/rejectUser', [HomeController::class, 'rejectUser'])->name('rejectUser');


    Route::get('/perfil/{id}', [ProfileController::class, 'show'])->name('profile.show');

    /* Notificaciones
    Route::post('/mark-as-read', [PdfController::class, 'markNotification'])->name('markNotification');
    Route::get('/fake-notification', [PdfController::class, 'fakeNotification']);*/
});


//Route::get('/register', [RegisterController::class, 'create'])->name('registercontroller.register');
//Route::get('/registrarse', function () {
//    return view('register');
//});