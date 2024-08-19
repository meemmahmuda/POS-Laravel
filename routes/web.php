<?php

use App\Http\Controllers\{
    DashboardController,
    KategoriController,
    LaporanController,
    ProdukController,
    MemberController,
    PengeluaranController,
    PembelianController,
    PembelianDetailController,
    PenjualanController,
    PenjualanDetailController,
    SettingController,
    SupplierController,
    UserController,
    BrandController

};
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['middleware' => 'level:1'], function () {

        // Category

        // Route to show the list of categories
        Route::get('kategori', [KategoriController::class, 'index'])->name('kategori.index');

        // Route to show the form for creating a new category
        Route::get('kategori/create', [KategoriController::class, 'create'])->name('kategori.create');

        // Route to store a newly created category
        Route::post('kategori', [KategoriController::class, 'store'])->name('kategori.store');

        // Route to show the form for editing a specific category
        Route::get('kategori/{kategori}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');

        // Route to update a specific category
        Route::put('kategori/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');

        // Route to delete a specific category
        Route::delete('kategori/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

        Route::resource('kategori', KategoriController::class);


        // Brand

        // Route to show the list of brands
        Route::get('brand', [BrandController::class, 'index'])->name('brand.index');

        // Route to show the form for creating a new brand
        Route::get('brand/create', [BrandController::class, 'create'])->name('brand.create');

        // Route to store a newly created brand
        Route::post('brand', [BrandController::class, 'store'])->name('brand.store');

        // Route to show the form for editing a specific brand
        Route::get('brand/{brand}/edit', [BrandController::class, 'edit'])->name('brand.edit');

        // Route to update a specific brand
        Route::put('brand/{brand}', [BrandController::class, 'update'])->name('brand.update');

        // Route to delete a specific brand
        Route::delete('brand/{brand}', [BrandController::class, 'destroy'])->name('brand.destroy');

        // Resource route for brand (this includes all the above routes automatically)
        Route::resource('brand', BrandController::class);



        // Product

        // Route to show the list of products
        Route::get('produk', [ProdukController::class, 'index'])->name('produk.index');
        
        // Route to show the form for creating a new product
        Route::get('produk/create', [ProdukController::class, 'create'])->name('produk.create');
        
        // Route to store a newly created product
        Route::post('produk', [ProdukController::class, 'store'])->name('produk.store');
        
        // Route to show the form for editing a specific product
        Route::get('produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
        
        // Route to update a specific product
        Route::put('produk/{produk}', [ProdukController::class, 'update'])->name('produk.update');
        
        // Route to delete a specific product
        Route::delete('produk/{produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');
        
        // Resource route for additional operations
        Route::resource('produk', ProdukController::class);
        


        // Member

        // Route to show the list of members
        Route::get('member', [MemberController::class, 'index'])->name('member.index');

        // Route to show the form for creating a new member
        Route::get('member/create', [MemberController::class, 'create'])->name('member.create');

        // Route to store a newly created member
        Route::post('member', [MemberController::class, 'store'])->name('member.store');

        // Route to show the form for editing a specific member
        Route::get('member/{member}/edit', [MemberController::class, 'edit'])->name('member.edit');

        // Route to update a specific member
        Route::put('member/{member}', [MemberController::class, 'update'])->name('member.update');

        // Route to delete a specific member
        Route::delete('member/{member}', [MemberController::class, 'destroy'])->name('member.destroy');

        // Additional routes for member-specific actions
        Route::get('/member/data', [MemberController::class, 'data'])->name('member.data');
        Route::post('/member/cetak-member', [MemberController::class, 'cetakMember'])->name('member.cetak_member');

        // Optional: Use Route::resource for CRUD actions, but ensure no duplication
        Route::resource('member', MemberController::class);


        // Supplier

        // Route to show the list of suppliers
        Route::get('supplier', [SupplierController::class, 'index'])->name('supplier.index');

        // Route to show the form for creating a new supplier
        Route::get('supplier/create', [SupplierController::class, 'create'])->name('supplier.create');

        // Route to store a newly created supplier
        Route::post('supplier', [SupplierController::class, 'store'])->name('supplier.store');

        // Route to show the form for editing a specific supplier
        Route::get('supplier/{supplier}/edit', [SupplierController::class, 'edit'])->name('supplier.edit');

        // Route to update a specific supplier
        Route::put('supplier/{supplier}', [SupplierController::class, 'update'])->name('supplier.update');

        // Route to delete a specific supplier
        Route::delete('supplier/{supplier}', [SupplierController::class, 'destroy'])->name('supplier.destroy');

        // Resource routes for suppliers
        Route::resource('supplier', SupplierController::class);


        // Expense

        // Route to show the list of pengeluaran (expenses)
        Route::get('pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaran.index');

        // Route to show the form for creating a new pengeluaran
        Route::get('pengeluaran/create', [PengeluaranController::class, 'create'])->name('pengeluaran.create');

        // Route to store a newly created pengeluaran
        Route::post('pengeluaran', [PengeluaranController::class, 'store'])->name('pengeluaran.store');

        // Route to show the form for editing a specific pengeluaran
        Route::get('pengeluaran/{pengeluaran}/edit', [PengeluaranController::class, 'edit'])->name('pengeluaran.edit');

        // Route to update a specific pengeluaran
        Route::put('pengeluaran/{pengeluaran}', [PengeluaranController::class, 'update'])->name('pengeluaran.update');

        // Route to delete a specific pengeluaran
        Route::delete('pengeluaran/{pengeluaran}', [PengeluaranController::class, 'destroy'])->name('pengeluaran.destroy');

        // Register all the resourceful routes for pengeluaran
        Route::resource('pengeluaran', PengeluaranController::class);
        



        Route::get('/pembelian/data', [PembelianController::class, 'data'])->name('pembelian.data');
        Route::get('/pembelian/{id}/create', [PembelianController::class, 'create'])->name('pembelian.create');
        Route::resource('/pembelian', PembelianController::class)
            ->except('create');

        Route::get('/pembelian_detail/{id}/data', [PembelianDetailController::class, 'data'])->name('pembelian_detail.data');
        Route::get('/pembelian_detail/loadform/{diskon}/{total}', [PembelianDetailController::class, 'loadForm'])->name('pembelian_detail.load_form');
        Route::resource('/pembelian_detail', PembelianDetailController::class)
            ->except('create', 'show', 'edit');

        Route::get('/penjualan/data', [PenjualanController::class, 'data'])->name('penjualan.data');
        Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan.index');
        Route::get('/penjualan/{id}', [PenjualanController::class, 'show'])->name('penjualan.show');
        Route::delete('/penjualan/{id}', [PenjualanController::class, 'destroy'])->name('penjualan.destroy');
    });

    Route::group(['middleware' => 'level:1,2'], function () {
        Route::get('/transaksi/baru', [PenjualanController::class, 'create'])->name('transaksi.baru');
        Route::post('/transaksi/simpan', [PenjualanController::class, 'store'])->name('transaksi.simpan');
        Route::get('/transaksi/selesai', [PenjualanController::class, 'selesai'])->name('transaksi.selesai');
        Route::get('/transaksi/nota-kecil', [PenjualanController::class, 'notaKecil'])->name('transaksi.nota_kecil');
        Route::get('/transaksi/nota-besar', [PenjualanController::class, 'notaBesar'])->name('transaksi.nota_besar');

        Route::get('/transaksi/{id}/data', [PenjualanDetailController::class, 'data'])->name('transaksi.data');
        Route::get('/transaksi/loadform/{diskon}/{total}/{diterima}', [PenjualanDetailController::class, 'loadForm'])->name('transaksi.load_form');
        Route::resource('/transaksi', PenjualanDetailController::class)
            ->except('create', 'show', 'edit');
    });

    Route::group(['middleware' => 'level:1'], function () {
        Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
        Route::get('/laporan/data/{awal}/{akhir}', [LaporanController::class, 'data'])->name('laporan.data');
        Route::get('/laporan/pdf/{awal}/{akhir}', [LaporanController::class, 'exportPDF'])->name('laporan.export_pdf');

        Route::get('/user/data', [UserController::class, 'data'])->name('user.data');
        Route::resource('/user', UserController::class);

        Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
        Route::get('/setting/first', [SettingController::class, 'show'])->name('setting.show');
        Route::post('/setting', [SettingController::class, 'update'])->name('setting.update');
    });
 
    Route::group(['middleware' => 'level:1,2'], function () {
        Route::get('/profil', [UserController::class, 'profil'])->name('user.profil');
        Route::post('/profil', [UserController::class, 'updateProfil'])->name('user.update_profil');
    });
});