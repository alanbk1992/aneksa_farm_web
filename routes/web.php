<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Products;
use App\Http\Controllers\Orders;
use App\Http\Controllers\Purchases;
use App\Http\Controllers\Warehouse;
use App\Http\Controllers\Promo;
use App\Http\Controllers\Accounting;
use App\Http\Controllers\Contacts;
use App\Http\Controllers\Inventori;
use App\Http\Controllers\Reports;
use App\Http\Controllers\Settings;
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

Route::get('/auth/login', function () {
    return view('auth/login');
});

Route::get('/auth/register', function () {
    return view('auth/register');
});


Route::get('/sidebar', function () {
    return view('sidebar');
});



Route::get('/home', [Home::class, 'index']);

Route::get('/products', [Products::class, 'index']);
Route::get('/products/add_product', [Products::class, 'add_product']);
Route::get('/products/fragment_products', [Products::class, 'fragment_products']);

Route::get('/orders/cashier', [Orders::class, 'cashier']);
Route::get('/orders', [Orders::class, 'index']);
Route::get('/orders/return', [Orders::class, 'return']);
Route::get('/orders/label', [Orders::class, 'label']);

Route::get('/purchases/purchase_invoice', [Purchases::class, 'purchase_invoice']);
Route::get('/purchases/purchase_invoice/add_purchase_invoice', [Purchases::class, 'add_purchase_invoice']);

Route::get('/purchases/deliveres', [Purchases::class, 'deliveres']);

Route::get('/purchases/purchase_orders', [Purchases::class, 'purchase_orders']);
Route::get('/purchases/purchase_orders/add_purchase_order', [Purchases::class, 'add_purchase_order']);

Route::get('/purchases/quotes', [Purchases::class, 'quotes']);

Route::get('/warehouse/overview', [Warehouse::class, 'overview']);
Route::get('/warehouse/item_in', [Warehouse::class, 'item_in']);
Route::get('/warehouse/item_out', [Warehouse::class, 'item_out']);
Route::get('/warehouse/stock_opname', [Warehouse::class, 'stock_opname']);
Route::get('/warehouse/internal_transfer', [Warehouse::class, 'internal_transfer']);

Route::get('/promo/discount', [Promo::class, 'discount']);
Route::get('/promo/combo', [Promo::class, 'combo']);

Route::get('/accounting/banks', [Accounting::class, 'banks']);
Route::get('/accounting/banks/add_account_bank', [Accounting::class, 'add_account_bank']);
Route::get('/accounting/banks/add_bank_transfers', [Accounting::class, 'add_bank_transfers']);
Route::get('/accounting/banks/add_bank_deposits', [Accounting::class, 'add_bank_deposits']);
Route::get('/accounting/banks/add_bank_withdrawals', [Accounting::class, 'add_bank_withdrawals']);
Route::get('/accounting/banks/bank_rules', [Accounting::class, 'bank_rules']);
Route::get('/accounting/banks/bank_rules/add_bank_rules', [Accounting::class, 'add_bank_rules']);

Route::get('/accounting/accounts', [Accounting::class, 'accounts']);
Route::get('/accounting/accounts/add_account', [Accounting::class, 'add_account']);
Route::get('/accounting/accounts/journal_entries', [Accounting::class, 'journal_entries']);
Route::get('/accounting/accounts/journal_entries/add_journal_entries', [Accounting::class, 'add_journal_entries']);

Route::get('/accounting/fixed_assets', [Accounting::class, 'fixed_assets']);
Route::get('/accounting/fixed_assets/add_fixed_asset', [Accounting::class, 'add_fixed_asset']);


Route::get('/accounting/expenses', [Accounting::class, 'expenses']);
Route::get('/accounting/expenses/add_expenses', [Accounting::class, 'add_expenses']);


Route::get('/contacts/employees', [Contacts::class, 'employees']);
Route::get('/contacts/employees/add_employee', [Contacts::class, 'add_employee']);


Route::get('/contacts/customers', [Contacts::class, 'customers']);
Route::get('/contacts/customers/add_customer', [Contacts::class, 'add_customer']);


Route::get('/contacts/suppliers', [Contacts::class, 'suppliers']);
Route::get('/contacts/suppliers/add_supplier', [Contacts::class, 'add_supplier']);

Route::get('/contacts/resellers', [Contacts::class, 'resellers']);
Route::get('/contacts/resellers/add_reseller', [Contacts::class, 'add_reseller']);

Route::get('/contacts/dropshipers', [Contacts::class, 'dropshipers']);
Route::get('/contacts/dropshipers/add_dropshiper', [Contacts::class, 'add_dropshiper']);


Route::get('/inventori', [Inventori::class, 'index']);

Route::get('/reports', [Reports::class, 'index']);

Route::get('/settings', [Settings::class, 'index']);

Route::get('/settings/fragments/fragment_company', [Settings::class, 'fragment_company']);