<?php
use App\Models\Branch;
use App\models\program;
use App\Models\testimoni;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BranchController;

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

//  Route::get('/', function () {
//      $branch = Branch::get();
//      $program = program::get();
//      $testimoni = testimoni::get(); 
//     $data = [ 
//          'branch' => $branch,
//          'program' => $program,
//          'testimoni' => $testimoni,
//      ];
//      return view('welcome', $data);
//      });

Route::get('/', [HomeController::class, 'index'])->name ('home');

Route::get('/branch', [BranchController::class, 'index'])->name('Branch');
//cabang
Route::post('/create-cabang', [HomeController::class, 'create'])->name('create-cabang');
Route::get('/list-branch', [HomeController::class, 'list_branch'])->name('list-branch');
Route::get('/create-branch', [HomeController::class, 'create_branch'])->name('create-branch');
Route::get('/edit-cabang/{id_cabang}', [HomeController::class, 'edit_cabang'])->name('edit-cabang');
Route::post('/edit-branch/{id}', [HomeController::class, 'edit'])->name('edit-branch-view');
Route::get('/delete-branch/{id}', [HomeController::class, 'delete'])->name('delete-branch');
//program
Route::post('/create-pro', [HomeController::class, 'create_pro'])->name('create-pro');
Route::get('/list-program', [HomeController::class, 'list_program'])->name('list-program');
Route::get('/create-program', [HomeController::class, 'create_program'])->name('create-program');
Route::get('/edit-program/{id_program}', [HomeController::class, 'edit_program'])->name('edit-program');
Route::post('/edit-pro/{id}', [HomeController::class, 'edit_pro'])->name('edit-pro');
Route::get('/delete-program/{id}', [HomeController::class, 'delete_pro'])->name('delete-program');
//company
Route::post('/create-peru', [HomeController::class, 'create_peru'])->name('create-peru');
Route::get('/list-company', [HomeController::class, 'list_company'])->name('list-company');
Route::get('/create-company', [HomeController::class, 'create_company'])->name('create-company');
Route::get('/edit-company/{id_company}', [HomeController::class, 'edit_company'])->name('edit-company');
Route::post('/edit-peru/{id}', [HomeController::class, 'edit_peru'])->name('edit-peru');
Route::get('/delete-company/{id}', [HomeController::class, 'delete_peru'])->name('delete-company');
//tutor
Route::post('/create-guru', [HomeController::class, 'create_guru'])->name('create-guru');
Route::get('/list-tutor', [HomeController::class, 'list_tutor'])->name('list-tutor');
Route::get('/create-tutor', [HomeController::class, 'create_tutor'])->name('create-tutor');
Route::get('/edit-tutor/{id_tutor}', [HomeController::class, 'edit_tutor'])->name('edit-tutor');
Route::post('/edit-guru/{id}', [HomeController::class, 'edit_guru'])->name('edit-guru');
Route::get('/delete-tutor/{id}', [HomeController::class, 'delete_guru'])->name('delete-tutor');
//artis
Route::post('/create-art', [HomeController::class, 'create_art'])->name('create-art');
Route::get('/list-artis', [HomeController::class, 'list_artis'])->name('list-artis');
Route::get('/create-artis', [HomeController::class, 'create_artis'])->name('create-artis');
Route::get('/edit-artis/{id_artis}', [HomeController::class, 'edit_artis'])->name('edit-artis');
Route::post('/edit-art/{id}', [HomeController::class, 'edit_art'])->name('edit-art');
Route::get('/delete-art/{id}', [HomeController::class, 'delete_art'])->name('delete-artis');
//jumbotron
Route::post('/create-jumbo', [HomeController::class, 'create_jumbo'])->name('create-jumbo');
Route::get('/list-jumbotron', [HomeController::class, 'list_jumbotron'])->name('list-jumbotron');
Route::get('/create-jumbotron', [HomeController::class, 'create_jumbotron'])->name('create-jumbotron');
Route::get('/edit-jumbotron/{id_jumbotron}', [HomeController::class, 'edit_jumbotron'])->name('edit-jumbotron');
Route::post('/edit-jumbo/{id}', [HomeController::class, 'edit_jumbo'])->name('edit-jumbo');
Route::get('/delete-jumbo/{id}', [HomeController::class, 'delete_jumbo'])->name('delete-jumbotron');
//media
Route::post('/create-med', [HomeController::class, 'create_med'])->name('create-med');
Route::get('/list-media', [HomeController::class, 'list_media'])->name('list-media');
Route::get('/create-media', [HomeController::class, 'create_media'])->name('create-media');
Route::get('/edit-media/{id_media}', [HomeController::class, 'edit_media'])->name('edit-media');
Route::post('/edit-med/{id}', [HomeController::class, 'edit_med'])->name('edit-med');
Route::get('/delete-med/{id}', [HomeController::class, 'delete_med'])->name('delete-media');
//testimoni
Route::post('/create-test', [HomeController::class, 'create_test'])->name('create-test');
Route::get('/list-testimoni', [HomeController::class, 'list_testimoni'])->name('list-testimoni');
Route::get('/create-testimoni', [HomeController::class, 'create_testimoni'])->name('create-testimoni');
Route::get('/edit-testimoni/{id_testimoni}', [HomeController::class, 'edit_testimoni'])->name('edit-testimoni');
Route::post('/edit-test/{id}', [HomeController::class, 'edit_test'])->name('edit-test');
Route::get('/delete-test/{id}', [HomeController::class, 'delete_test'])->name('delete-testimoni');