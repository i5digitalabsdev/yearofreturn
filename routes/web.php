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



/* Initial Setup */
Route::get('/getStarted', 'SetupController@getStarted');
Route::post('/getStarted', 'SetupController@postGetStarted');

Route::get('/', 'PagesController@index');
Route::get('contactus', 'PagesController@contact');
Route::post('contact', 'PagesController@postContact');



Route::get('/cc-admin', 'PagesController@adminLogin');
Route::get('/cc-dashboard', 'HomeController@index');
Route::post('/cc-admin/login-admin', 'AdminController@postAdmin');

//User Management Routes
Route::post('/addUserRole', 'UserManagementController@addNewRole');
Route::get('/getUserRoles', 'UserManagementController@getUserRoles');
Route::post('/updateUserRoles/{id}', 'UserManagementController@updateUserRoles');
Route::post('/deleteUserRoles/{id}', 'UserManagementController@deleteUserRoles');

Route::get('/getUserPermissions', 'UserManagementController@getUserPermissions');
Route::post('/addUserPermissions', 'UserManagementController@addUserPermissions');

/*homeSlider Routes */
Route::resource('admin/homeSlider', 'SliderController');
Route::resource('admin/works', 'FeaturedWorksController');

/* Post Resource */
Route::resource('admin/posts', 'PostController');
Route::post('addNewAuthor', 'PostController@createAuthor');
Route::post('addNewCategory', 'PostController@createCategory');
Route::get('getAuthors', 'PostController@getAuthors');
Route::get('getPostCategories', 'PostController@getPostCategories');

/* Team or member routes */
Route::resource('admin/team', 'MemberController');
Route::resource('admin/events', 'EventsController');
Route::resource('admin/branch', 'BranchController');
Route::resource('admin/contact', 'ContactController');

/*pages routes */
Route::resource('admin/posts', 'PostController');
Route::get('admin/users/roles', 'UsersController@getRoles');
//Route::resource('admin/users', 'UsersController');

/* Menu routes */
Route::resource('admin/menu', 'MenuController');
Route::resource('admin/subMenu', 'SubMenuController');
Route::resource('admin/level2', 'Level2MenuController');
Route::resource('admin/level3', 'Level3MenuController');

/*Add new user */
Route::post('admin/addNewUser', 'UsersController@addNewUser');
Route::get('admin/users', 'UsersController@index');
Route::get('admin/rolePermission', 'UsersController@rolePermission');
Route::post('admin/attachPermission', 'UsersController@attachPermission');
Route::post('admin/deleteUser/{id}', 'UsersController@destroy');
Route::get('admin/rolePermissions/{role_id}', 'UsersController@getRolePermission');


/* New cuts routes */
Route::get('admin/gheximdailynewscuts', 'PagesController@getNewsCuts');
Route::resource('admin/newsCuts', 'NewsCutController');
Route::get('admin/newsCutHistory', 'NewsCutController@newsCutHistory');
Route::get('admin/getNewsCutHistory', 'NewsCutController@getNewsCutReport')->where('date', '(.*)');
Route::get('admin/newsCutHistoryStaff', 'NewsCutController@newsCutHistoryStaff');
Route::get('admin/getNewsCutHistoryStaff', 'NewsCutController@getNewsCutReportStaff')->where('date', '(.*)');
Route::post('admin/uploadImage/{newsId}', 'NewsCutController@uploadImage');
Route::get('admin/getImage/{newsId}', 'NewsCutController@getImage');
Route::get('admin/removeImage/{imageId}', 'NewsCutController@removeImage');

/* Gallery routes */
Route::get('admin/gallery', 'NewsCutController@allGallery');
Route::get('admin/gallery/create', 'NewsCutController@createGallery');
Route::post('admin/gallery/create', 'NewsCutController@postGallery');
Route::get('admin/gallery/delete/{galleryId}', 'NewsCutController@deleteGallery');
Route::get('admin/gallery/edit/{galleryId}', 'NewsCutController@editGallery');
Route::get('admin/gallery/deleteImage/{imageId}', 'NewsCutController@deleteGalleryImage');

/* Admin settings */
Route::get('admin/settings', 'AdminController@getSettings');
Route::post('admin/updateSettings', 'AdminController@updateSettings');
Route::post('admin/updateAdminPassword', 'AdminController@changePassword');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/{inner}', 'PagesController@getPage');
Route::get('/{category}', 'PagesController@postList');
Route::get('/{category}/{slug}', 'PagesController@singlePost');
Route::get('/{category}/subcategory/{slug}', 'PagesController@singlePostBySubCat');




