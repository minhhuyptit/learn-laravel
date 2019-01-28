<?php

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
    return view('welcome');
});
Route::get('maintenance', function () {
    echo 'Xin chào mọi người';
});
Route::get('route', function () {
    echo 'Phương thức GET';
});
Route::post('route', function () {
    echo 'Phương thức POST';
});
Route::match(['get', 'post'], 'route-get-post', function () {
    echo 'Method get & post';
});

// Dùng redirect route và view cũng như nhau
Route::redirect('route-redirect', 'route-redirect-get', 307);
Route::get('route-redirect-get', function () {
    echo 'Sau khi redirect sang đây';
});

Route::view('route-view', 'giaodien-route-view');

//Route có tham số
Route::get('thamso1/{_id}', function ($_id) {
    echo "ID là $_id";
});
Route::get('thamso2/{name?}', function ($name = 'Huy') {
    echo "Tên tôi là $name";
});

//Route regular expression
Route::get('thamso3/{id}', function ($id) {
    echo "ID của bạn là $id";
})->where('id', '[a-zA-Z]+');
Route::get('thamso4/{id}', function ($id) {
    echo "ID của bạn là $id"; //Đã dùng boot trong RouteServiceProvider chặn
});

// Route alias
Route::get('user/profile', function () {
    //
})->name('profile');

Route::get('as1/{id}/as2', function ($id) {
    echo 'Alias có ID là ' . $id;
})->name('as');

Route::get('alias', function () {
    $url = route('as', ['id' => 1]);
    echo $url;
});

Route::get('route-current', function () {
    $route = Route::current();
    $name = Route::currentRouteName();
    $action = Route::currentRouteAction();
});


// Middleware
// Route::get('middleware/{age}', function ($age) {
//     echo "Tuổi = $age";
// })->middleware(CheckAge::class);

Route::get('middleware/{age}', function ($age) {
    echo "<br>Tuổi = $age";
})->middleware('checkage:role');

// Controller
Route::get('controller-invoke', 'InvokeController@hello');

// Route::resource('photos', 'PhotoController');

// Request
Route::get('form-request', 'FormRequestController@getSend');
Route::post('form-request', 'FormRequestController@postSend');