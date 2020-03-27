<?php
use Illuminate\Http\Request;
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('users', 'UserController');
    Route::get('active/{id}', 'UserController@active')->name('active');
    Route::get('deactive/{id}', 'UserController@deactive')->name('deactive');
});

Route::get('/logout',function(){
    session()->flush();
    return view('signin');
});

Route::post('/register','F_usersController@register');
Route::post('/signin','F_usersController@signin');
Route::get('/f_dashboard', function(Request $request){
    $data = $request->session()->get('data');
    if($data)
    {
        return view('f_dashboard.dashboard');
    }
    else
    {
        return view('signin');
    }
});

Route::view('/wizard', 'wizard.index');
Route::post('/create','PlanController@CreatePlan');
Route::get('/plan/{id}','PlanController@ViewPlanSingle')->name('singleplan');
Route::post('/plan/{id}/update','PlanController@UpdatePlan')->name('update');


// Route::get('/wizard', function () {
//     return view('wizard.index');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/viewplans','PlanController@view_Plan');

