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

// Response
Route::get('response-array', function () {
    // return 'Hello Word';
    return array('1', 2, 3);
});
Route::get('response-home', function () {
    // return 'Hellow World';
    return response('Hello World', 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('response-back', function () {
    return back();
});
Route::get('redirect-away', function () {
    return redirect()->away('https://www.google.com');
});

// File Downloads
Route::get('response-download', function () {
    // return response()->download('j_login_lock.png');
    // return response()->download('j_login_lock.png', 'newname');
    return response()->download('j_login_lock.png')->deleteFileAfterSend(true);
});

Route::get('streamed-download', function () {
    return response()->streamDownload(function () {
        echo GitHub::api('repo')
            ->contents()
            ->readme('laravel', 'laravel')['contents'];
    }, 'laravel-readme.md');
});

Route::get('response-file', function () {
    return response()->file('svg/403.svg');
    // return response()->file($pathToFile, $headers);
});

//Response Macros
Route::get('response-macro', function () {
    return response()->caption('Hello');
});

// View
Route::get('view-exists', function () {
    if (view()->exists('form')) {
        echo 'Tồn tại';
    } else {
        echo ' Không tồn tại';
    }
});

Route::get('view-first', function () {
    return view()->first(['admin', 'form'], ['name'=>'Akai Shuichi']);
});

Route::get('view-with', function () {
    // return view('view.name')->with('key', $value);
});

Route::get('views', function () {
    return view('composer1');
});

Route::get('view-share1', function () {
    return view('composer1');
});
Route::get('view-share2', function () {
    return view('composer2');
});

view()->share('title', 'Title of View Share');
view()->composer(['composer1','composer2'], function ($view) {
    return $view->with('sitemap', 'Site map View composer');
});

Route::get('url-current', function () {
    echo url()->current();
    echo url()->full();
    echo url()->previous();
})->name('unsubscribe');

Route::get('url-signed', function () {
    return URL::signedRoute('unsubscribe', ['user' => 1]);
    // return URL::temporarySignedRoute(
        // 'unsubscribe', now()->addMinutes(30), ['user' => 1]
    // );
});
// use Illuminate\Ht'tp\Request;

// Route::get('/unsubscribe/{user}', function (Request $request) {
//     if (! $request->hasValidSignature()) {
//         abort(401);
//     }
// })->name('unsubscribe');

Route::get('url-action', function () {
    return $url = action('HomeController@index');
});

Route::get('session-request', 'HomeController@getSession');
Route::post('session-request', 'HomeController@postSession');

use Illuminate\Http\Request;
Route::get('session-exists', function (Request $request) {
    // session(['zzz'=>'']);
    // echo "<pre>";
    // print_r(session()->all());
    // echo "</pre>";
    // if ($request->session()->exists('sa')) {
    //     echo 'Tồn tại';
    // }else{
    //     echo 'Không tồn tại';
    // }

    // $request->session()->push('level1.level2', 'developers');
    // echo "<pre>";
    // print_r(session()->all());
    // echo "</pre>";
    // echo $request->session()->pull('level1.level2.1', 'value default');
    // $request->session()->flash('status', 'Task was successful!');
    // $request->session()->reflash();
    // $request->session()->flush();
    // echo "<pre>";
    // print_r(session()->all());
    // echo "</pre>";
    echo $request->session()->regenerate();
});

Route::get('validate-request', 'ValidateController@getValidate');
Route::post('validate-request', 'ValidateController@postValidate');