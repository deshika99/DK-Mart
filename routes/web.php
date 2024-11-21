<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminTemplateController;
use App\Http\Controllers\HomeTemplateController;
use App\Http\Controllers\AffiliateTemplateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CompanySettingsController;
use App\Http\Controllers\ShopPageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerOrderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Log;



//Affiliate_Dashboard Links
use App\Http\Controllers\AffiliateProductController;
use App\Http\Controllers\AffiliateCustomerController;
use App\Http\Controllers\AffiliateTrackingController;
use App\Http\Controllers\AffiliateReportController;
use App\Http\Controllers\AffiliateLinkController;
use App\Http\Controllers\AffiliateRulesController;
use App\Http\Controllers\AffiliateDashboardController;
use App\Http\Controllers\AffiliatePaymentController;
use App\Http\Controllers\AffiliateWithdrawalsController;
use App\Http\Controllers\AffiliateUserController;
use App\Http\Controllers\WishlistController;


//Vendor_Dashboard Links
use App\Http\Controllers\VendorProductController;
use App\Http\Controllers\VendorOrderController;
use App\Http\Controllers\VendorAccountController;
use App\Http\Controllers\VendorShopController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\VendorWalletController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/privacy-policy', function () {
    return view('frontend.privacy-policy');
})->name('privacy-policy');


Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/cart', function () {
    return view('frontend.cart');
})->name('cart');

Route::get('/wishlist', [WishlistController::class, 'showWishlist'])->name('wishlist');
Route::delete('/wishlist/remove/{productId}', [WishlistController::class, 'destroy'])->name('wishlist.destroy');
Route::get('/wishlist/count', [WishlistController::class, 'getWishlistCount'])->name('wishlist.count');
Route::post('/wishlist/toggle', [WishlistController::class, 'toggleWishlist'])->name('wishlist.toggle');
Route::post('/wishlist/check-multiple', [WishlistController::class, 'checkMultipleWishlist'])->name('wishlist.checkMultiple');

Route::get('/vendors', [VendorController::class, 'index'])->name('frontend.vendor');
Route::get('/vendor-details/{vendorId}', [VendorController::class, 'showVendorDetails'])->name('frontend.vendor.details');



Route::get('/search', [ProductController::class, 'searchView'])->name('product.search');
Route::get('/searchview', [ProductController::class, 'searchView'])->name('searchview');


/*search box
Route::get('/search', [ProductController::class, 'searchProducts'])->name('search.products');

*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/affiliate',[AffiliateTemplateController::class,'index'])->name('affiliate');
Route::get('/',[HomeTemplateController::class,'index'])->name('home');

Route::get('/shop', [ShopPageController::class, 'index'])->name('shop.index');
Route::get('/shop/category/{category}', [ShopPageController::class, 'filterByCategory'])->name('shop.filterByCategory');

Route::get('/product-details/{product_id}', [ShopPageController::class, 'showProductDetails'])->name('showProductDetails');

Route::get('/cart/count', [CartController::class, 'getCartCount'])->name('cart.count');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::put('/cart/update/{cartItem}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{cartItem}', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/buy-now-checkout/{product_id}', [CartController::class, 'buyNowCheckout'])->name('buyNow.checkout');

Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::get('/payment/{order_code}', [PaymentController::class, 'showPaymentPage'])->name('payment');

Route::post('/confirm-cod-order/{order_code}', [PaymentController::class, 'confirmCODOrder'])->name('confirm.cod.order');
Route::get('/order/order_received/{order_code}', [PaymentController::class, 'getOrderDetails'])->name('order.thankyou');

Route::post('/buy_now_place-order', [CustomerOrderController::class, 'buynow_placeOrder'])->name('buynow_placeOrder');
Route::post('/place-order', [CustomerOrderController::class, 'placeOrder'])->name('placeOrder');

Route::post('/test-order', function() {
    Log::info('Test Order placed');
    return 'Test order placed';
});





//admin dashboard
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Middleware\AdminAuth;


Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

Route::middleware([App\Http\Middleware\AdminAuth::class])->group(function () {
    Route::get('/admin',[AdminTemplateController::class,'index'])->name('admin.index');
    // other routes
});

//notification


Route::get('/admin/notifications', [NotificationController::class, 'index'])->name('admin.notifications');
Route::post('/admin/notifications/add-user/{user}', [NotificationController::class, 'addUserNotification'])->name('notifications.addUser');
Route::post('/admin/notifications/add-order/{order}', [NotificationController::class, 'addOrderNotification'])->name('notifications.addOrder');
Route::post('/admin/notifications/clear', [NotificationController::class, 'clearNotifications'])->name('notifications.clear');





Route::get('/admin/profile', [AdminProfileController::class, 'showProfile'])->name('profile');
Route::post('/admin/profile/update', [AdminProfileController::class, 'updateProfile'])->name('admin.profile.update');
Route::post('/admin/profile/password', [AdminProfileController::class, 'updatePassword'])->name('admin.profile.password.update');


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


Route::get('/admin/customers', [CustomerController::class, 'show'])->name('customers');
Route::get('/admin/customer-details/{user_id}', [CustomerController::class, 'showCustomerDetails'])->name('customer-details');

Route::get('/admin/orders', [OrderController::class, 'index'])->name('orders');
Route::delete('/admin/orders/{order}', [OrderController::class, 'destroy'])->name('order.delete');
Route::get('/admin/order-details/{orderCode}', [OrderController::class, 'showOrderDetails'])->name('order-details');
Route::patch('/order/update-status/{order_code}', [OrderController::class, 'updateStatus'])->name('order.updateStatus');



Route::view('/admin/affiliate_customers', 'AdminDashboard.affiliate_customers')->name('affiliate_customers');

Route::get('/admin/affiliate_rules', [AffiliateRulesController::class, 'index'])->name('affiliate_rules');
Route::post('/admin/affiliate_rules', [AffiliateRulesController::class, 'store'])->name('admin_rules.store');
Route::delete('/admin/affiliate_rules/{id}', [AffiliateRulesController::class, 'destroy'])->name('affiliate_rules.destroy');
Route::put('/admin/affiliate_rules/{id}', [AffiliateRulesController::class, 'update'])->name('admin_users.update');

Route::get('/admin/affiliate_withdrawals', [AffiliateWithdrawalsController::class, 'index'])->name('affiliate_withdrawals');
Route::post('/admin/affiliate_withdrawals/update/{id}', [AffiliateWithdrawalsController::class, 'updatePaymentStatus'])->name('affiliate.updatePaymentStatus');

Route::get('/admin/affiliate_customers', [AffiliateUserController::class, 'showAffiliates'])->name('affiliate_customers');
Route::post('/admin/affiliates/{id}/status/{status}', [AffiliateUserController::class, 'updateStatus'])->name('admin.affiliates.updateStatus');
Route::get('/admin/Affiliatecustomer-details/{id}', [AffiliateUserController::class, 'showDetails'])->name('admin.affiliates.show');

Route::view('/admin/reviews', 'AdminDashboard.reviews')->name('reviews');
Route::view('/admin/customer_inquiries', 'AdminDashboard.inquiries')->name('inquiries');


Route::get('/admin/vendors', [VendorAccountController::class, 'show'])->name('vendors');
Route::post('/admin/vendors/{id}/status/{status}', [VendorAccountController::class, 'updateStatus'])->name('admin.vendors.updateStatus');
Route::get('/admin/vendor-details/{vendorId}', [VendorAccountController::class, 'showVendorDetails'])->name('vendor-details');


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

Route::view('/affiliate_register', 'AffiliateDashBoard.affRegister')->name('affiliate_register');
Route::post('/affiliate/user_register', [AffiliateUserController::class, 'store'])->name('affiliate.register');
Route::view('/affiliate_login', 'AffiliateDashBoard.affLogin')->name('affiliate_login');
Route::post('/affiliate/login', [AffiliateUserController::class, 'login'])->name('affiliate.login.submit');
Route::view('/affiliate_home', 'AffiliateDashBoard.affiliate_home')->name('affiliate_home');


Route::view('/home/affiliate/affiliate_home', 'aff_home')->name('aff_home');
Route::post('/home/affiliate/register', [AffiliateCustomerController::class, 'register'])->name('aff_reg');
Route::view('/home/affiliate/register/', 'aff_reg')->name('register_form');
Route::post('/home/affiliate/login', [AffiliateCustomerController::class, 'login'])->name('aff_login');
Route::get('/affiliate/dashboard', [AffiliateCustomerController::class, 'index'])->name('index');
Route::post('/affiliate/logout', [AffiliateUserController::class, 'logout'])->name('aff.logout');


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
Route::get('/affiliate/dashboard/payment/bank_acc', [AffiliatePaymentController::class, 'bank_acc'])->name('bank_acc');
Route::post('/affiliate/dashboard/payment/updatebank', [AffiliatePaymentController::class, 'updatebank'])->name('updatebank');
Route::post('/affiliate/dashboard/payment/paymentrequest', [AffiliatePaymentController::class, 'paymentrequest'])->name('paymentrequest');
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

//user dashboard
Route::get('home/My-Account', function () {
    return view('user_dashboard.dashboard');
})->name('dashboard');

Route::get('home/My-Account/edit-profile', function () {
    return view('user_dashboard.edit-profile');
})->name('edit-profile');

Route::get('home/My-Account/my-orders', function () {
    return view('user_dashboard.my-orders');
})->name('my-orders');

Route::get('home/My-Account/My-Reviews', function () {
    return view('user_dashboard.My-Reviews');
})->name('My-Reviews');

Route::get('home/My-Account/inquiries', function () {
    return view('user_dashboard.inquiries');
})->name('inquiries');

Route::get('home/My-Account/address-book', function () {
    return view('user_dashboard.address-book');
})->name('address-book');

Route::get('home/My-Account/edit-password', function () {
    return view('user_dashboard.edit-password');
})->name('edit-password');

Route::get('home/My-Account/returns', function () {
    return view('user_dashboard.returns');
})->name('returns');

Route::get('home/My-Account/returns-details', function () {
    return view('user_dashboard.returns-details');
})->name('returns.details');

Route::get('home/My-Account/Write-Reviews', function () {
    return view('user_dashboard.Write-Reviews');
})->name('Write-Reviews');





Route::get('home/My-Account/returns-details', function () {
    return view('user_dashboard.returns-details');
})->name('returns.details');

Route::get('home/My-Account/Write-Reviews', function () {
    return view('user_dashboard.Write-Reviews');
})->name('Write-Reviews');

//Vendor dashboard

Route::view('/vendor_dashboard', 'VendorDashboard.vendorhome')->name('vendorhome');
Route::view('/vendor_login', 'VendorDashboard.vendor_login')->name('vendor_login');
Route::post('/vendor_login', [VendorAccountController::class, 'login'])->name('vendor.login');
Route::view('/vendor_register', 'VendorDashboard.vendor_register')->name('vendor_register');
Route::post('/vendor_register', [VendorAccountController::class, 'store'])->name('vendor_register.store');
Route::post('/vendor/logout', [VendorAccountController::class, 'logout'])->name('vendor.logout');


Route::get('/vendor/shop', [VendorShopController::class, 'index'])->name('vendor.shop');
Route::post('/vendor/shop/store', [VendorShopController::class, 'store'])->name('vendor.shop.store');

Route::get('/vendor_dashboard/products', [VendorProductController::class, 'showproducts'])->name('vendor.products');
Route::view('/vendor_dashboard/add_products', 'VendorDashboard.add_products')->name('vendor.products.add');
Route::post('/vendor_dashboard/products', [VendorProductController::class, 'store'])->name('vendor.products.store');
Route::get('/vendor_dashboard/products/{product}/view', [VendorProductController::class, 'view_details'])->name('vendor.products.view');
Route::get('/vendor_dashboard/products/{product}/edit', [VendorProductController::class, 'edit'])->name('vendor.products.edit');
Route::put('/vendor_dashboard/products/{product}', [VendorProductController::class, 'update'])->name('vendor.products.update');
Route::delete('/vendor_dashboard/products/{product}', [VendorProductController::class, 'destroy'])->name('vendor.products.destroy');

Route::get('/vendor_dashboard/orders', [VendorOrderController::class, 'index'])->name('vendor.orders');
Route::delete('/vendor_dashboard/orders/{order}', [VendorOrderController::class, 'destroy'])->name('vendor.order.delete');
Route::get('/vendor_dashboard/order-details/{orderCode}', [VendorOrderController::class, 'showOrderDetails'])->name('vendor.order-details');
Route::patch('/vendor_dashboard/order/update-status/{order_code}', [VendorOrderController::class, 'updateStatus'])->name('vendor.order.updateStatus');

Route::view('/vendor_dashboard/payments', 'VendorDashboard.payment_requests')->name('vendor.payments');
Route::view('/vendor_dashboard/wallet', 'VendorDashboard.wallet')->name('vendor.wallet');


Route::get('wallet', [VendorWalletController::class, 'index'])->name('vendor.wallet');

