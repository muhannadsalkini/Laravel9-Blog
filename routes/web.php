<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Laravel\Jetstream\Rules\Role;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\AdminPlaceController as AdminPlaceController;
use App\Http\Controllers\Admin\ImageController as AdminImageController;
use App\Http\Controllers\Admin\Setting as Setting;
use App\Http\Controllers\Admin\MessageController as MessageController;
use App\Http\Controllers\Admin\FaqController as FaqController;
use App\Http\Controllers\Admin\CommentController as CommentController;
use App\Http\Controllers\UserController as UserController;
// use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Comment;
use App\Http\Controllers\Admin\AdminUserController;



use App\Models\Faq;

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

// Home Page Routes
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
Route::view('/loginuser', 'home.login')->name('loginuser');
Route::view('/registeruser', 'home.register')->name('registeruser');
Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
Route::view('/loginadmin', 'admin.login')->name('loginadmin');
Route::post('/loginadmincheck', [HomeController::class, 'loginadmincheck'])->name('loginadmincheck');


Route::view('/deneme', 'home')->name('categoryPlaces');



Route::post('/logincheck', [HomeController::class, 'loginCheck'])->name('loginCheck');
Route::get('/login', [HomeController::class, 'login'])->name('login');


//User Place Routes
Route::prefix('/place')->name('userplace.')->controller(App\Http\Controllers\PlaceController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
    Route::get('/show/{id}', 'show')->name('show');
});

//USER AUTH CONTROL
Route::middleware('auth')->group(function () {
//USER PANEL ROUTES
Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function () {
    Route::get('/','index')->name('index');
    Route::get('/reviews','reviews')->name('reviews');
    Route::get('/reviewdestroy/{id}', 'reviewdestroy')->name('commentdestroy');
});
//Admin Routes
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
Route::get('/', [AdminHomeController::class, 'index'])->name('index');

//General Routes
Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
Route::post('/setting/update', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');

//Admin Category Routes
Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
Route::get('/', 'index')->name('index');
Route::get('/create', 'create')->name('create');
Route::post('/store', 'store')->name('store');
Route::get('/edit/{id}', 'edit')->name('edit');
Route::post('/update/{id}', 'update')->name('update');
Route::get('/destroy/{id}', 'destroy')->name('destroy');
Route::get('/show/{id}', 'show')->name('show');
});

//Admin Place Routes
Route::prefix('/place')->name('place.')->controller(AdminPlaceController::class)->group(function () {
Route::get('/', 'index')->name('index');
Route::get('/create', 'create')->name('create');
Route::post('/store', 'store')->name('store');
Route::get('/edit/{id}', 'edit')->name('edit');
Route::post('/update/{id}', 'update')->name('update');
Route::get('/destroy/{id}', 'destroy')->name('destroy');
Route::get('/show/{id}', 'show')->name('show');
 });

 //Admin Place Image Gallery Routes
    Route::prefix('/image')->name('image.')->controller(AdminImageController::class)->group(function () {
    Route::get('/{pid}', 'index')->name('index');
    Route::post('/store/{pid}', 'store')->name('store');
    Route::get('/destroy/{pid}/{id}', 'destroy')->name('destroy');
     });

     //Admin Message Routes
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
    Route::get('/', 'index')->name('index');
     Route::get('/show/{id}', 'show')->name('show');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
     });

     //Admin Faq Routes
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
    Route::get('/show/{id}', 'show')->name('show');
     });

     //Admin Comment Routes
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    //Admin User Routes
    // Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/edit/{id}', 'show')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::post('/addrole/{id}', 'addrole')->name('addrole');
        Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');
    });
 });
});

Route::get('/place/{id}/{slug?}', [HomeController::class, 'place'])->name('place');
Route::get('/categoryplaces/{id}/{slug?}', [HomeController::class, 'categoryplaces'])->name('categoryplaces');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
