<?php

use App\Http\Controllers\HomepageController;

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

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

// Route::get('/', 'HomepageController@index')->name('Home');

Route::get('/', function () {
    return view('pages.index');
})->name('Home');



Route::get('/portfolio', function () {
    // return view('portfolio.master');

    return view('portfolio.portfoliopage');
})->name('portfolio');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout','HomeController@logout')->name('user.logout');


//Admin Route

Route::get('admin/home', 'AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');

Route::get('admin/logout','AdminController@Logout')->name('admin.logout');



//Catagories

Route::get('/catagory','Admin\Category\CategoryController@category')->name('category');
Route::post('/admin/store/category','Admin\Category\CategoryController@storecategory')->name('store.category');
Route::get('delete/category/{id}','Admin\Category\CategoryController@Deletecategory');
Route::get('edit/category/{id}','Admin\Category\CategoryController@Editcategory');
Route::post('update/category/{id}','Admin\Category\CategoryController@Updatecategory');


//Brands
Route::get('admin/brand','Admin\Category\BrandController@Brand')->name('brands');
Route::post('/admin/store/brand','Admin\Category\BrandController@storeBrand')->name('store.brand');
Route::get('delete/brand/{id}','Admin\Category\BrandController@DeleteBrand');	
Route::get('edit/brand/{id}','Admin\Category\BrandController@EditBrand');
Route::post('update/brand/{id}','Admin\Category\BrandController@UpdateBrand');



//subcategory

Route::get('admin/sub/catagory','Admin\Category\SubCategoryController@SubCategories')->name('sub.category');
Route::post('/admin/store/subcat','Admin\Category\SubCategoryController@StoreSubCat')->name('store.subcategory');
Route::get('delete/subcategory/{id}','Admin\Category\SubCategoryController@DeleteSubCat');	
Route::get('edit/subcategory/{id}','Admin\Category\SubCategoryController@EditSubCat');
Route::post('update/subcategory/{id}','Admin\Category\SubCategoryController@UpdateSubCat');


//Coupon 

Route::get('admin/sub/coupon','Admin\Category\CouponController@Coupon')->name('admin.coupon');
Route::post('/admin/store/coupon','Admin\Category\CouponController@StoreCoupon')->name('store.coupon'); 
Route::get('delete/coupon/{id}','Admin\Category\CouponController@DeleteCoupon');
Route::get('edit/coupon/{id}','Admin\Category\CouponController@EditCoupon');
Route::post('update/coupon/{id}','Admin\Category\CouponController@UpdateCoupon');


//Newslater

Route::get('admin/newslater','Admin\Category\CouponController@Newslater')->name('admin.newslater');
Route::get('delete/newslater/{id}', 'Admin\Category\CouponController@DeleteSub');

// from show subcategory with ajax
Route::get('get/subcategory/{category_id}', 'Admin\ProductController@GetSubcat');


//Product ALL Route for admin

Route::get('admin/product/all','Admin\ProductController@index')->name('all.product');
Route::get('admin/product/add','Admin\ProductController@create')->name('add.product');
Route::post('admin/store/product', 'Admin\ProductController@store')->name('store.product');

Route::get('inactive/product/{id}', 'Admin\ProductController@inactive');
Route::get('active/product/{id}', 'Admin\ProductController@active');
Route::get('delete/product/{id}', 'Admin\ProductController@DeleteProduct');
Route::get('view/product/{id}', 'Admin\ProductController@ViewProduct');
Route::get('edit/product/{id}', 'Admin\ProductController@EditProduct');

Route::post('update/product/withoutphoto/{id}', 'Admin\ProductController@UpdateProductWithoutPhoto');

Route::post('update/product/photo/{id}', 'Admin\ProductController@UpdateProductPhoto');



// Blog Admin All
Route::get('blog/category/list', 'Admin\PostController@BlogCatList')->name('add.blog.categorylist');
Route::post('admin/store/blog', 'Admin\PostController@BlogCatStore')->name('store.blog.category');
Route::get('delete/blogcategory/{id}', 'Admin\PostController@DeleteBlogCat');
Route::get('edit/blogcategory/{id}', 'Admin\PostController@EditBlogCat');
Route::post('update/blog/category/{id}', 'Admin\PostController@UpdateBlogCat');

Route::get('admin/add/post', 'Admin\PostController@Create')->name('add.blogpost');
Route::get('admin/all/post', 'Admin\PostController@index')->name('all.blogpost');
Route::post('admin/store/post', 'Admin\PostController@store')->name('store.post');
Route::get('delete/post/{id}', 'Admin\PostController@DeletePost');
Route::get('edit/post/{id}', 'Admin\PostController@EditPost');
Route::post('update/post/{id}', 'Admin\PostController@UpdatePost');


//Fontend all route

Route::post('store/newslater', 'FontEndController@StoreNewslater')->name('store.newslater');


//Add WishList

Route::get('add/wishlist/{id}', 'WishlistController@addWishlist');


//Cart

Route::get('add/to/cart/{id}', 'CartController@AddCart');
Route::get('add/to/cartfromwishlistpage/{id}','CartController@AddCart2');

Route::get('check', 'CartController@check');
Route::get('product/details/{id}/{product_name}', 'ProductController@ProductView');
Route::post('cart/product/add/{id}', 'ProductController@AddCart');


//show cart
Route::get('product/cart', 'CartController@ShowCart')->name('show.cart');
Route::get('remove/cart/{id}', 'CartController@removeCart');
Route::post('update/cart/item', 'CartController@UpdateCart')->name('update.cartitem');
//using modal(popup)
Route::get('cart/product/view/{id}', 'CartController@viewproduct');
Route::post('insert/into/cart', 'CartController@InsertCart')->name('insert.into.cart');
//using modal
//showcart



//Checkout
Route::get('user/checkout', 'CartController@Checkout')->name('user.checkout');
Route::get('user/wishlist', 'CartController@wishlist')->name('user.wishlist');

Route::post('user/apply/coupon', 'CartController@Coupon')->name('apply.coupon');
Route::get('coupon/remove', 'CartController@CouponRemove')->name('coupon.remove');




//Blog Post Route(Multiple Language)
Route::get('blog/post', 'BlogController@blog')->name('blog.post');
Route::get('language/english', 'BlogController@english')->name('language.english');
Route::get('language/bangla', 'BlogController@Hindi')->name('language.hindi');
Route::get('blog/single/{id}', 'BlogController@BlogSingle');



//payment step


Route::get('payment/page', 'CartController@PaymentPage')->name('payment.step');
Route::post('user/payment/process', 'PaymentController@Payment')->name('payment.process');
Route::post('user/stripe/charge', 'PaymentController@StripeCharge')->name('stripe.charge');
Route::post('user/oncash/charge', 'PaymentController@OnCash')->name('oncash.charge');



//product show for all users
Route::get('products/{id}', 'ProductController@ProductsView');
Route::get('allcategory/{id}', 'ProductController@CategoryView');



////Admin order all route
//For Accept
Route::get('admin/pending/order','Admin\OrderController@NewOrder')->name('admin.neworder');
Route::get('admin/view/order/{id}','Admin\OrderController@ViewOrder');
Route::get('admin/payment/accept/{id}','Admin\OrderController@PaymentAccept');
Route::get('admin/payment/cancel/{id}','Admin\OrderController@PaymentCancel');
Route::get('admin/delevery/process/{id}','Admin\OrderController@DeliveryProcess');
Route::get('admin/delevery/done/{id}','Admin\OrderController@DeliveryDone');


//Order status Controll
Route::get('admin/accept/payment','Admin\OrderController@AcceptPayment')->name('admin.accept.payment');
Route::get('admin/cancle/payment','Admin\OrderController@CancelOrder')->name('admin.cancel.payment');
Route::get('admin/process/payment','Admin\OrderController@ProcessPayment')->name('admin.process.payment');
Route::get('admin/success/payment','Admin\OrderController@SuccessPayment')->name('admin.success.payment');

//Order Status Controll end

//Customer's Order View


Route::get('customer/view/order/{id}','CustomerController@ViewOrderForCustomer');



//Order Tracking

Route::post('order/tracking','FontEndController@OrderTracking')->name('order.tracking');



//All Report

Route::get('admin/today/order','Admin\ReportController@TodayOrder')->name('today.order');

Route::get('admin/today/delivery','Admin\ReportController@TodayDelivery')->name('today.delivery');
Route::get('admin/this/month','Admin\ReportController@ThisMonth')->name('this.month');
Route::get('admin/search/report','Admin\ReportController@search')->name('search.report');
Route::post('admin/search/by/year','Admin\ReportController@SearchByYear')->name('search.by.year');

Route::post('admin/search/by/date','Admin\ReportController@SearchByDate')->name('search.by.date');
Route::post('admin/search/by/month','Admin\ReportController@SearchByMonth')->name('search.by.month');



//Chart Report




//Search Product

Route::post('product/search', 'CartController@Search')->name('product.search');