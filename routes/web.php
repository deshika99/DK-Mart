<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminTemplateController;
use App\Http\Controllers\HomeTemplateController;
use App\Http\Controllers\AffiliateTemplateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanySettingsController;
use App\Http\Controllers\ShopPageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerOrderController;


//Affiliate_Dashboard Links
use App\Http\Controllers\AffiliateProductController;
use App\Http\Controllers\AffiliateCustomerController;
use App\Http\Controllers\AffiliateTrackingController;
use App\Http\Controllers\AffiliateReportController;
use App\Http\Controllers\AffiliateLinkController;
use App\Http\Controllers\AffiliateRulesController;
use App\Http\Controllers\AffiliateDashboardController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');


Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/cart', function () {
    return view('frontend.cart');
})->name('cart');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin',[AdminTemplateController::class,'index'])->name('admin.index');
Route::get('/affiliate',[AffiliateTemplateController::class,'index'])->name('affiliate');
Route::get('/home',[HomeTemplateController::class,'index'])->name('home');

Route::get('/shop', [ShopPageController::class, 'index'])->name('shop.index');
Route::get('/shop/category/{category}', [ShopPageController::class, 'filterByCategory'])->name('shop.filterByCategory');

Route::get('/product-details/{product_id}', [ShopPageController::class, 'showProductDetails'])->name('showProductDetails');

Route::get('/cart/count', [CartController::class, 'getCartCount'])->name('cart.count');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::put('/cart/update/{cartItem}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{cartItem}', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::post('/place-order', [CustomerOrderController::class, 'placeOrder'])->name('placeOrder');

Route::post('/test-order', function() {
    Log::info('Test Order placed');
    return 'Test order placed';
});

//admin dashboard

Route::get('/admin/products_list', [ProductController::class, 'showproducts'])->name('products_list');

Route::get('products/{product}/view', [ProductController::class, 'view_details'])->name('products.view');
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/admin/add_products', [ProductController::class, 'displayCategories'])->name('add_products');
Route::get('/api/subcategories/{categoryId}', [ProductController::class, 'getSubcategories']);
Route::get('/api/sub-subcategories/{subcategoryId}', [ProductController::class, 'getSubSubcategories']);


Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::view('/admin/customers', 'AdminDashboard.customer')->name('customers');
Route::view('/admin/customer-details', 'AdminDashboard.customer-details')->name('customer-details');

Route::view('/admin/orders', 'AdminDashboard.orders')->name('orders');
Route::view('/admin/order-details', 'AdminDashboard.order-details')->name('order-details');

Route::view('/admin/affiliate_customers', 'AdminDashboard.affiliate_customers')->name('affiliate_customers');
Route::view('/admin/Affiliatecustomer-details', 'AdminDashboard.Affiliatecustomer-details')->name('Affiliatecustomer-details');

Route::view('/admin/reviews', 'AdminDashboard.reviews')->name('reviews');
Route::view('/admin/customer_inquiries', 'AdminDashboard.inquiries')->name('inquiries');

Route::view('/admin/profile', 'AdminDashboard.profile')->name('profile');

Route::view('/admin/sellers', 'AdminDashboard.sellers')->name('sellers');
Route::view('/admin/seller-details', 'AdminDashboard.seller-details')->name('seller_details');

Route::view('/admin/role_list', 'AdminDashboard.role_list')->name('role_list');

Route::get('/admin/manage_company', [CompanySettingsController::class, 'index'])->name('manage_company');
Route::post('/admin/manage_company', [CompanySettingsController::class, 'store'])->name('manage_company.store');


Route::resource('system_users', UserController::class);
Route::get('/admin/users', [UserController::class, 'show'])->name('users');
Route::post('/admin/users', [UserController::class, 'store'])->name('system_users.store');
Route::get('/admin/edit_users/{id}', [UserController::class, 'edit'])->name('edit_users');
Route::post('/admin/edit_users/{id}', [UserController::class, 'update'])->name('update_users');
Route::delete('/admin/edit_users/{id}', [UserController::class, 'destroy'])->name('delete_users');



//AffiliateDashBoard Links
Route::view('/home/affiliate/affiliate_home', 'aff_home')->name('aff_home');
Route::post('/home/affiliate/register', [AffiliateCustomerController::class, 'register'])->name('aff_reg');
Route::view('/home/affiliate/register/', 'aff_reg')->name('register_form');
Route::post('/home/affiliate/login', [AffiliateCustomerController::class, 'login'])->name('aff_login');
Route::get('/affiliate/dashboard', [AffiliateCustomerController::class, 'index'])->name('index');
Route::post('/affiliate/logout', [AffiliateCustomerController::class, 'logout'])->name('aff_logout');


Route::get('/affiliate/dashboard/ad_center', [AffiliateProductController::class, 'showAdCenter'])->name('ad_center');
Route::get('/affiliate/dashboard/ad_center/{product_id}/promote-modal', [AffiliateProductController::class, 'showPromoteModal'])->name('products.promoteModal');
Route::get('/affiliate/dashboard/ad_center/download-images', [AffiliateProductController::class, 'downloadImages'])->name('products.downloadImages');
Route::get('/affiliate/dashboard/ad_center/{id}/promote-modal', [AffiliateProductController::class, 'showPromoteModal'])->name('products.promoteModal');
Route::get('/affiliate/dashboard/ad_center/download-images', [AffiliateProductController::class, 'downloadImages'])->name('products.downloadImages');
Route::post('/generate-promo', [AffiliateProductController::class, 'generatePromo'])->name('generate.promo');
Route::view('/affiliate/dashboard/incentive_campaign', 'affiliate_dashboard.incentive_campaign')->name('incentive_campaign');
Route::post('/affiliate/promo/maritial/genaratr', [AffiliateCustomerController::class, 'promomatirials'])->name('promo_matirials');


Route::view('/affiliate/dashboard/reports/income_report', 'affiliate_dashboard.income_report')->name('income_report');
Route::view('/affiliate/dashboard/reports/order_tracking', 'affiliate_dashboard.order_tracking')->name('order_tracking');
Route::view('/affiliate/dashboard/reports/transaction_product_report', 'affiliate_dashboard.transaction_product_report')->name('transaction_product_report');
Route::view('/affiliate/dashboard/payment/withdrawals', 'affiliate_dashboard.withdrawals')->name('withdrawals');
Route::view('/affiliate/dashboard/payment/account_balance', 'affiliate_dashboard.account_balance')->name('account_balance');


Route::get('/affiliate-tool', [AffiliateLinkController::class, 'showAffiliateForm'])->name('affiliatetools');
Route::post('/affiliate/tool/create/affiliate_link', [AffiliateLinkController::class, 'generateNewLink'])->name('genarate_tracking_Link');
Route::get('/track/{tracking_id}/{product_id}', [AffiliateLinkController::class, 'trackClick'])->name('affiliate.track');
Route::post('/track-referral/{tracking_id}', [AffiliateLinkController::class, 'trackReferral'])->name('affiliate.trackReferral');
Route::get('/affiliate/dashboard/code_center', [AffiliateLinkController::class, 'codeCenter'])->name('code_center');


Route::view('/affiliate/dashboard/payment/account_balance', 'affiliate_dashboard.account_balance')->name('account_balance');
Route::get('/affiliate/dashboard/payment/bank_acc', [PaymentController::class, 'bank_acc'])->name('bank_acc');
Route::post('/affiliate/dashboard/payment/updatebank', [PaymentController::class, 'updatebank'])->name('updatebank');
Route::post('/affiliate/dashboard/payment/paymentrequest', [PaymentController::class, 'paymentrequest'])->name('paymentrequest');
Route::view('/affiliate/dashboard/payment/commission_rules', 'affiliate_dashboard.commission_rules')->name('commission_rules');
Route::get('/affiliate/dashboard/payment/affiliate_rules', [AffiliateRulesController::class, 'showrules'])->name('show_affiliate_rules');
Route::post('/affiliate/update-site-info', [AffiliateDashboardController::class, 'updateSiteInfo'])->name('affiliate.updateSiteInfo');
Route::post('/affiliate/update-basic-info', [AffiliateDashboardController::class, 'updateBasicInfo'])->name('affiliate.updateBasicInfo');
Route::get('/affiliate/dashboard/account/mywebsites_page', [AffiliateDashboardController::class, 'index'])->name('mywebsites_page');


Route::get('/affiliate/dashboard/account/tracking_id', [AffiliateTrackingController::class, 'index'])->name('tracking_id');
Route::post('/affiliate/dashboard/store/tracking_id', [AffiliateTrackingController::class, 'store'])->name('tracking_id_store');
Route::put('/raffletickets/{id}/setDefault', [AffiliateTrackingController::class, 'setDefault'])->name('raffletickets.setDefault');
Route::delete('/raffletickets/{id}', [AffiliateTrackingController::class, 'destroy'])->name('raffletickets.destroy');

Route::get('/raffletickets/{id}/report', [AffiliateReportController::class, 'report'])->name('raffletickets.report');
Route::get('/affiliate/dashboard/reports/traffic_report',[AffiliateReportController::class, 'trafficreport'] )->name('traffic_report');
Route::get('/affiliate/dashboard/payment/withdrawals', [AffiliateReportController::class, 'withdrawals'] )->name('withdrawals');
Route::get('/affiliate/dashboard/payment/payment_info', [AffiliateReportController::class, 'showPaymentInfo'])->name('payment_info');
Route::post('/affiliate/dashboard/payment/realtime_tracking', [AffiliateReportController::class, 'realtimereport'])->name('realtime_tracking');



require __DIR__.'/auth.php';





Route::get('/register', function () {
    return view('frontend.register');
})->name('register');



Route::get('/login', function () {
    return view('frontend.login');
})->name('login');



