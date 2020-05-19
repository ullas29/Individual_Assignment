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

Route::get('/', function () {
    return redirect()->route('loginindex');
});

Route::group(['middleware'=>['logsess']], function(){
//login done
Route::get('/login','loginController@index')->name('loginindex');
Route::post('/login','loginController@verification')->name('loginindex');

});

Route::group(['middleware'=>['sess']], function(){
//admin done






//profile done
Route::get('/Admin/profile', 'adminController@profile')->name('admin.profile');

Route::get('/admin/profile/{id}/edit', 'adminController@edit_profile')->name('admin.editprofile');
Route::post('/admin/profile/{id}/edit', 'adminController@update_profile')->name('admin.editprofile');






//bus shedule done
Route::get('/admin/busesshedule', 'adminController@busesshedule')->name('admin.busesshedule');

Route::get('/admin/busesshedule/{id}/edit', 'adminController@edit_busesshedule')->name('admin.editbusesshedule');
Route::post('/admin/busesshedule/{id}/edit', 'adminController@update_busesshedule')->name('admin.editbusesshedule');

Route::get('/admin/busesshedule/new', 'adminController@new_busesshedule')->name('admin.newbusesshedule');
Route::post('/admin/busesshedule/new', 'adminController@insert_busesshedule')->name('admin.newbusesshedule');

Route::get('/admin/busesshedule/{id}/delete', 'adminController@delete_busesshedule')->name('admin.deletebusesshedule');







//bussummary done
Route::get('/admin/bussummary', 'adminController@bussummary')->name('admin.bussummary');

Route::get('/admin/bussummary/{id}/edit', 'adminController@edit_bussummary')->name('admin.bussummary');
Route::post('/admin/bussummary/{id}/edit', 'adminController@bussummary')->name('admin.editbussummary');

Route::get('/admin/bussummary/new', 'adminController@bussummary')->name('admin.bussummary');
Route::post('/admin/bussummary/new', 'adminController@insert_bussummary')->name('admin.newbussummary');

Route::get('/admin/bussummary/{id}/delete', 'adminController@delete_bussummary')->name('admin.deletebussummary');





//manager done






//profile done
Route::get('/Manager/profile', 'managerController@profile')->name('manager.profile');

Route::get('/manager/profile/{id}/edit', 'managerController@edit_profile')->name('manager.editprofile');
Route::post('/manager/profile/{id}/edit', 'managerController@update_profile')->name('manager.editprofile');






//bus shedule done
Route::get('/manager/busesshedule', 'managerController@busesshedule')->name('manager.busesshedule');

Route::get('/manager/busesshedule/{id}/edit', 'managerController@edit_busesshedule')->name('manager.editbusesshedule');
Route::post('/manager/busesshedule/{id}/edit', 'managerController@update_busesshedule')->name('manager.editbusesshedule');

Route::get('/manager/busesshedule/new', 'managerController@new_busesshedule')->name('manager.newbusesshedule');
Route::post('/manager/busesshedule/new', 'managerController@insert_busesshedule')->name('manager.newbusesshedule');

Route::get('/manager/busesshedule/{id}/delete', 'managerController@delete_busesshedule')->name('manager.deletebusesshedule');







//bussummary done
Route::get('/manager/bussummary', 'managerController@bussummary')->name('manager.bussummary');

Route::get('/manager/bussummary/{id}/edit', 'managerController@edit_bussummary')->name('manager.bussummary');
Route::post('/manager/bussummary/{id}/edit', 'managerController@bussummary')->name('manager.editbussummary');

Route::get('/manager/bussummary/new', 'managerController@bussummary')->name('manager.bussummary');
Route::post('/manager/bussummary/new', 'managerController@insert_bussummary')->name('manager.newbussummary');

Route::get('/manager/bussummary/{id}/delete', 'managerController@delete_bussummary')->name('manager.deletebussummary');


























































//customers list done
Route::get('/admin/customers', 'adminController@customers_list')->name('admin.customerslist');

//product item done
Route::get('/admin/product-item', 'adminController@item_list')->name('admin.itemlist');

Route::get('/admin/product-item/{id}/edit', 'adminController@edit_item')->name('admin.edititem');
Route::post('/admin/product-item/{id}/edit', 'adminController@update_item')->name('admin.edititem');

Route::get('/admin/product-item/new', 'adminController@new_item')->name('admin.newitem');
Route::post('/admin/product-item/new', 'adminController@insert_item')->name('admin.newitem');

Route::get('/admin/product-item/{id}/delete', 'adminController@delete_item')->name('admin.deleteitem');

//workers done

Route::get('/admin/workers', 'adminController@workers_list')->name('admin.workerslist');

Route::get('/admin/workers/{id}/edit', 'adminController@edit_worker')->name('admin.editworker');
Route::post('/admin/workers/{id}/edit', 'adminController@update_worker')->name('admin.editworker');

Route::get('/admin/workers/new', 'adminController@new_worker')->name('admin.newworker');
Route::post('/admin/workers/new', 'adminController@insert_worker')->name('admin.newworker');

Route::get('/admin/workers/{id}/delete', 'adminController@delete_worker')->name('admin.deleteworker');

//admin list done
Route::get('/admin/workers/admins', 'adminController@admins_list')->name('admin.adminlist');
//managers list done
Route::get('/admin/workers/managers', 'adminController@managers_list')->name('admin.managerlist');
//employee list done
Route::get('/admin/workers/employees', 'adminController@employees_list')->name('admin.employeelist');

//payment list 

Route::get('/admin/payments', 'adminController@payments_list')->name('admin.paymentslist');

Route::get('/admin/payments/{id}/edit', 'adminController@edit_payment')->name('admin.editpayment');
Route::post('/admin/payments/{id}/edit', 'adminController@update_payment')->name('admin.editpayment');

//orderlog list

Route::get('/admin/orders', 'adminController@orderlog_list')->name('admin.orderloglist');

Route::get('/admin/orders/{id}/edit', 'adminController@edit_order')->name('admin.editorderlog');
Route::post('/admin/orders/{id}/edit', 'adminController@update_order')->name('admin.editorderlog');





//customers list done
Route::get('/manager/customers', 'managerController@customers_list')->name('manager.customerslist');

//product item done
Route::get('/manager/product-item', 'managerController@item_list')->name('manager.itemlist');

Route::get('/manager/product-item/{id}/edit', 'managerController@edit_item')->name('manager.edititem');
Route::post('/manager/product-item/{id}/edit', 'managerController@update_item')->name('manager.edititem');

Route::get('/manager/product-item/new', 'managerController@new_item')->name('manager.newitem');
Route::post('/manager/product-item/new', 'managerController@insert_item')->name('manager.newitem');

Route::get('/manager/product-item/{id}/delete', 'managerController@delete_item')->name('manager.deleteitem');

//workers done

Route::get('/manager/workers', 'managerController@workers_list')->name('manager.workerslist');

Route::get('/manager/workers/{id}/edit', 'managerController@edit_worker')->name('manager.editworker');
Route::post('/manager/workers/{id}/edit', 'managerController@update_worker')->name('manager.editworker');

Route::get('/manager/workers/new', 'managerController@new_worker')->name('manager.newworker');
Route::post('/manager/workers/new', 'managerController@insert_worker')->name('manager.newworker');

Route::get('/manager/workers/{id}/delete', 'managerController@delete_worker')->name('manager.deleteworker');

//admin list done
Route::get('/manager/workers/admins', 'managerController@admins_list')->name('manager.adminlist');
//managers list done
Route::get('/manager/workers/managers', 'managerController@managers_list')->name('manager.managerlist');
//employee list done
Route::get('/manager/workers/employees', 'managerController@employees_list')->name('manager.employeelist');

//payment list 

Route::get('/manager/payments', 'managerController@payments_list')->name('manager.paymentslist');

Route::get('/manager/payments/{id}/edit', 'managerController@edit_payment')->name('manager.editpayment');
Route::post('/manager/payments/{id}/edit', 'managerController@update_payment')->name('manager.editpayment');

//orderlog list

Route::get('/manager/orders', 'managerController@orderlog_list')->name('manager.orderloglist');

Route::get('/manager/orders/{id}/edit', 'managerController@edit_order')->name('manager.editorderlog');
Route::post('/manager/orders/{id}/edit', 'managerController@update_order')->name('manager.editorderlog');

});

//sign up done
Route::get('/logout','logoutController@index')->name('logoutindex');
