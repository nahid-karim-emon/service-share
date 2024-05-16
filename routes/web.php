<?php

use App\Livewire\BookForm;
use App\Livewire\WaitPage;
use App\Livewire\HomeComponent;
use App\Livewire\PaymentSummary;
use App\Livewire\ContactComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\ChangeLocationComponent;
use App\Livewire\Customer\CustomerReview;
use App\Livewire\ServiceDetailsComponent;
use App\Livewire\Sprovider\WithdrawMoney;
use App\Http\Controllers\SearchController;
use App\Livewire\Customer\ApproveSProvider;
use App\Livewire\ServiceCategoriesComponent;
use App\Livewire\Admin\AdminApproveComponent;
use App\Livewire\Admin\AdminContactComponent;
use App\Livewire\ServicesByCategoryComponent;
use App\Livewire\Sprovider\SproviderToDoList;
use App\Livewire\Admin\AdminServicesComponent;
use App\Livewire\Admin\AdminDashboardComponent;
use App\Livewire\Admin\AdminAddServiceComponent;
use App\Livewire\Admin\AdminEditServiceComponent;
use App\Livewire\Customer\CustomerRequestService;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Livewire\Admin\AdminServiceCategoryComponent;
use App\Livewire\Admin\AdminServiceProviderComponent;
use App\Livewire\Customer\CustomerDashboardComponent;
use App\Livewire\Customer\SProviderDetails;
use App\Livewire\Sprovider\SproviderProfileComponent;
use App\Livewire\Sprovider\SproviderDashboardComponent;
use App\Livewire\Admin\AdminAddServiceCategoryComponent;
use App\Livewire\Admin\AdminServicesByCategoryComponent;
use App\Livewire\Admin\AdminEditServiceCategoryComponent;
use App\Livewire\Admin\AdminViewUserComponent;
use App\Livewire\Sprovider\EditSproviderProfileComponent;
use App\Livewire\Sprovider\SproviderPendingTaskComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('home');
Route::get('/service-categories', ServiceCategoriesComponent::class)->name('home.service_categories');
Route::get('/{category_slug}/services', ServicesByCategoryComponent::class)->name('home.services_by_category');
Route::get('/service/{service_slug}', ServiceDetailsComponent::class)->name('home.service_details');

Route::get('/autocomplete', [SearchController::class, 'autocomplete'])->name('autocomplete');
Route::post('/search', [SearchController::class, 'searchService'])->name('searchService');

Route::get('/change-location', ChangeLocationComponent::class)->name('home.change_location');
Route::get('/contact-us', ContactComponent::class)->name('home.contact');
Route::get('/book-form/{service_slug}', BookForm::class)->name('customer.bookform');
Route::get('/waiting', WaitPage::class)->name('sprovider.wait');
Route::get('/payment-details', PaymentSummary::class)->name('home.payment_details');

//Customer
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/customer/dashboard', CustomerDashboardComponent::class)->name('customer.dashboard');
    Route::get('/customer/request-service', CustomerRequestService::class)->name('customer.request_service');
    Route::get('/customer/approve-sprovider', ApproveSProvider::class)->name('customer.approve_sprovider');
    Route::get('/customer/sprovider_details/{tas_id}', SProviderDetails::class)->name('customer.sproviderdet');
    Route::get('/customer/customer-review/{tas_id}', CustomerReview::class)->name('customer.customer_review');
});

//Service Provider
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'authsprovider',
])->group(function () {
    Route::get('/sprovider/dashboard', SproviderDashboardComponent::class)->name('sprovider.dashboard');
    Route::get('/sprovider/profile', SproviderProfileComponent::class)->name('sprovider.profile');
    Route::get('/sprovider/profile/edit', EditSproviderProfileComponent::class)->name('sprovider.edit_profile');
    Route::get('/sprovider/pending-task', SproviderPendingTaskComponent::class)->name('sprovider.pending_task');
    Route::get('/sprovider/to-do-list', SproviderToDoList::class)->name('sprovider.to_do_list');
    Route::get('/sprovider/withdraw-money', WithdrawMoney::class)->name('sprovider.withdraw_money');
});

//Admin
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'authadmin',
])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/service-categories', AdminServiceCategoryComponent::class)->name('admin.service_categories');
    Route::get('/admin/service-category/add', AdminAddServiceCategoryComponent::class)->name('admin.add_service_category');
    Route::get('/admin/service-category/edit/{category_id}', AdminEditServiceCategoryComponent::class)->name('admin.edit_service_category');
    Route::get('/admin/all-services', AdminServicesComponent::class)->name('admin.all_services');
    Route::get('/admin/{category_slug}/services', AdminServicesByCategoryComponent::class)->name('admin.services_by_category');
    Route::get('/admin/service/add', AdminAddServiceComponent::class)->name('admin.add_service');
    Route::get('/admin/service/edit/{service_slug}', AdminEditServiceComponent::class)->name('admin.edit_service');
    Route::get('/admin/contacts', AdminContactComponent::class)->name('admin.contacts');
    Route::get('/admin/aprove-sprovider', AdminApproveComponent::class)->name('admin.aprove_sprovider');
    Route::get('/admin/service-providers', AdminServiceProviderComponent::class)->name('admin.service_providers');
    Route::get('/admin/all-users', AdminViewUserComponent::class)->name('admin.all_users');
});

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
