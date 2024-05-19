<?php

use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/super_admin', function () {
    return redirect()->route('super_admin/view_clusters');
});
Route::get('/recoder', 'RecoderController@dashboard')->name('recoder');


Route::get('/super_admin/lay', function () {
    return view('super_admin.lay');
});

//Super Admin
Route::get('/super_admin/add_clusters', 'SuperadminController@show_cluster')->name('super_admin/add_clusters');
Route::post('/super_admin/save_cluster', 'SuperadminController@add_cluster')->name('super_admin/save_cluster');
Route::post('/super_admin/save-garment', 'SuperadminController@save_garment')->name('super_admin/save-garment');
Route::get('/super_admin/add_users', 'SuperadminController@add_user')->name('super_admin/add_users');
Route::post('/super_admin/save-user', 'SuperadminController@save_user')->name('super_admin/save-user');
Route::post('/super_admin/adduserto/cluster', 'SuperadminController@add_user_cluster')->name('super_admin/adduserto/cluster');
Route::post('/super_admin/adduserto/cluster', 'SuperadminController@add_user_cluster')->name('super_admin/adduserto/cluster');
Route::get('/super_admin/view_clusters', 'SuperadminController@view_clusters')->name('super_admin/view_clusters');
Route::get('/super_admin/delete_garment_data/{id}', 'SuperadminController@delete_garment')->name('super_admin/delete_garment_data');
Route::post('/super_admin/garment/edit_data/get', 'SuperadminController@edit_garment')->name('super_admin/garment/edit_data/get');
Route::post('/super_admin/edit_garment_data', 'SuperadminController@upgrade_garment')->name('super_admin/edit_garment_data');
Route::get('/super_admin/group_level_users', 'SuperadminController@show_group_level_users')->name('super_admin/group_level_users');
Route::get('/super_admin/cluster_level_users', 'SuperadminController@show_cluster_level_users')->name('super_admin/cluster_level_users');
Route::get('/super_admin/facility_level_users', 'SuperadminController@show_facility_level_users')->name('super_admin/facility_level_users');
Route::get('/super_admin/recoder_level_users', 'SuperadminController@show_recoder_level_users')->name('super_admin/recoder_level_users');
Route::post('/super_admin/group/edit_data/get', 'SuperadminController@show_group_level_data')->name('super_admin/group/edit_data/get');
Route::post('/super_admin/edit_group_level_user_data', 'SuperadminController@edit_group_level_data')->name('super_admin/edit_group_level_user_data');
Route::get('/super_admin/remove-user/{id}', 'SuperadminController@remove_user')->name('super_admin/remove-user');





Route::get('/group_level', 'GroupController@index')->name('group_level');
Route::get('/group/dashboard', 'GroupController@dashboard')->name('group/dashboard');
Route::get('/group/user_view', 'GroupController@user_view')->name('group/user_view');
Route::get('/group/data_field_view', 'GroupController@data_field_view')->name('group/data_field_view');
Route::get('/group/over_view', 'GroupController@over_view')->name('group/over_view');
Route::post('/group/assign_user_to_data_field/load_data_description', 'GroupController@data_description_loaf')->name('group/assign_user_to_data_field/load_data_description');
Route::post('/group/assign_user_to_data_field/load_select_options', 'GroupController@assign_selectoptions_description_load')->name('group/assign_user_to_data_field/load_select_options');
Route::post('/group/save-user', 'GroupController@save_user')->name('group/save-user');
Route::post('/group/assign_user_to_data_field', 'GroupController@assign_userto_data_field')->name('group/assign_user_to_data_field');
Route::post('/group/get_datafields_value', 'GroupController@get_data_this_month_value')->name('group/get_datafields_value');
Route::post('/group/this_month_value/save', 'GroupController@save_this_month_data')->name('group/this_month_value/save');




Route::get('/recoder/dashboard', 'RecoderController@dashboard')->name('recoder/dashboard');
Route::post('/recoder/save_chart_data', 'RecoderController@save_chartdata')->name('recoder/save_chart_data');
Route::get('/recoder/delete_graph_data/{id}', 'RecoderController@delete_graph_data')->name('recoder/delete_graph_data');
Route::post('/recoder/graph/edit_data/get', 'RecoderController@get_graph_data_edit')->name('recoder/graph/edit_data/get');
Route::post('/recoder/edit_chart_data', 'RecoderController@edit_graph_data')->name('recoder/edit_chart_data');


Route::get('/facility_level', 'FacilityController@index')->name('facility_level');
Route::get('/facility/dashboard', 'FacilityController@dashboard')->name('facility/dashboard');
Route::get('/facility/dashboard/2', 'FacilityController@dashboard2')->name('facility/dashboard/2');
Route::post('/facility/dashboard/monthly_lolypop_chart', 'FacilityController@dashboard_monthly_lolypop_chart')->name('facility/dashboard/monthly_lolypop_chart');
Route::get('/facility/graph/create_array/get', 'FacilityController@get_graph_data')->name('facility/graph/create_array/get');
