<?php

use App\Models\User;
use App\Models\Peraturan;

use App\Http\Livewire\ContactForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlphaController;
use App\Http\Controllers\ChartJsController;
use App\Http\Controllers\JadwalMapelController;

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


Route::get('/daftarmapel/1smp',[JadwalMapelController::class,'mapel'])->name('mapel')->middleware('auth');

Route::get('/bang/{id}/{mapel_id}', [JadwalMapelController::class,'jadwalmapel'])->middleware('auth');

Route::get('/kirim-tugas', function () {
    return view('welcome');
})->middleware('auth');
// // Route::get('/contact', [ContactForm::class,'view'])->middleware('auth');
// Route::post('/contact-form', [ContactForm::class,'contactFormSubmit'])->middleware('auth');
Route::get('/', [UserController::class,'demo'])->name('landing');
Route::get('/jadwal-1smp' ,[JadwalMapelController::class,'jadwal1SMP'])->name('jadwal1smp')->middleware('auth');
Route::get('/jadwal-2smp' ,[JadwalMapelController::class,'jadwal2SMP'])->name('jadwal2smp')->middleware('auth');
Route::get('/jadwal-3smp' ,[JadwalMapelController::class,'jadwal3SMP'])->name('jadwal3smp')->middleware('auth');
Route::get('/tambah-jadwal' ,[JadwalMapelController::class,'tambahJadwal'])->middleware('auth');
Route::post('/buat' ,[JadwalMapelController::class,'buat'])->middleware('auth');
// Route::get('/hapus-jadwal' ,[JadwalMapelController::class,'hapusJadwal'])->middleware('auth');
// Route::delete('/hapus' ,[JadwalMapelController::class,'hapus'])->middleware('auth');
Route::get('/alpha-1smp' ,[AlphaController::class,'alpha1SMP'])->middleware('auth');
Route::get('/alpha-2smp' ,[AlphaController::class,'alpha2SMP'])->middleware('auth');
Route::get('/alpha-3smp' ,[AlphaController::class,'alpha3SMP'])->middleware('auth');
Route::get('/tambahAlpha', [AlphaController::class, 'tambahAlpha'])->middleware('auth');
Route::post('/tambah', [AlphaController::class, 'tambah'])->middleware('auth');
Route::get('potongan-gaji', [GuruController::class,'potonganGaji'])->name('potongan')->middleware('auth');
Route::get('tambah-potongan',[GuruController::class,'tambahpotongan'])->middleware('auth');
Route::post('/potong',[GuruController::class,'potong'])->middleware('auth');
Route::get('tambah/jadwal', [JadwalMapelController::class,'tambahJadwal'])->middleware('auth');
Route::get('tambah/alpha', [AlphaController::class,'tambahAlpha'])->middleware('auth');
Route::get('/peraturan', [JadwalMapelController::class,'peraturan'])->name('peraturan')->middleware('auth');
Route::get('/edit-peraturan/{id}', [JadwalMapelController::class,'edit'])->middleware('auth');
// Route::get('/edit-peraturan', function () {
//     $peraturan = Peraturan::all();
//     return view('peraturan.edit',compact('peraturan'));
// })->middleware('auth');
Route::put('/edit-peraturan/{id}', [JadwalMapelController::class,'editPeraturan'])->middleware('auth');
Route::get('/peraturan/cetak_pdf', [JadwalMapelController::class,'cetak_pdf'])->middleware('auth');
Route::get('/profile-1smp', [UserController::class,'profile1SMP'])->middleware('auth');
Route::get('/profile-2smp', [UserController::class,'profile2SMP'])->middleware('auth');
Route::get('/profile/{id}', [UserController::class,'profile'])->middleware('auth');
Route::get('/profile-3smp', [UserController::class,'profile3SMP'])->middleware('auth');
// https://youtu.be/L7EGD2V_Zj4 
Auth::routes();

Route::get('/profile-pribadi/{name}', [UserController::class,'profilePribadi'])->name('profile')->middleware('auth');
Route::get('/edit-profile/{name}',[UserController::class,'editProfile'])->middleware('auth');
Route::put('/edit/{name}',[UserController::class,'edit'])->middleware('auth');
Route::get('/tambah-user',[UserController::class,'tambahUser'])->middleware('auth');
Route::post('/tambah',[UserController::class,'tambah'])->middleware('auth');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/evaluasi', [App\Http\Controllers\GuruController::class, 'evaluasi'])->name('evaluasi')->middleware('auth');
Route::get('/edit-evaluasi/{id}', [App\Http\Controllers\GuruController::class, 'editEv'])->middleware('auth');
Route::put('/edit-evaluasi/{id}', [App\Http\Controllers\GuruController::class, 'editEvaluasi'])->middleware('auth');

Route::get('/pesan-1smp', [App\Http\Controllers\GuruController::class, 'terima1SMP'])->middleware('auth');
Route::get('/pesan-2smp', [App\Http\Controllers\GuruController::class, 'terima2SMP'])->middleware('auth');
Route::get('/pesan-3smp', [App\Http\Controllers\GuruController::class, 'terima3SMP'])->middleware('auth');
Route::get('/lihat/{id}', [App\Http\Controllers\GuruController::class, 'lihat'])->middleware('auth');
Route::get('/home', [ChartJsController::class, 'index'])->middleware('auth');