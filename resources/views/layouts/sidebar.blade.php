<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel" style="padding-top: 30px;">
            <div class="pull-left image">
                <img src="{{ url(auth()->user()->foto ?? '') }}" class="img-circle img-profil" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('dashboard') }}">
                <i class="fa-solid fa-gauge-simple-high"></i> <span>Dashboard</span>
                </a>
            </li>

            @if (auth()->user()->level == 1)
            <li class="header">MASTER</li>
            <li>
                <a href="{{ route('kategori.index') }}">
                <i class="fa-solid fa-layer-group"></i> <span>Category</span>
                </a>
            </li>
            <li>
                <a href="{{ route('brand.index') }}">
                <i class="fa-brands fa-bandcamp"></i> <span>Brand</span>
                </a>
            </li>
            <li>
                <a href="{{ route('produk.index') }}">
                <i class="fa-brands fa-product-hunt"></i> <span>Product</span>
                </a>
            </li>
            <li>
                <a href="{{ route('member.index') }}">
                    <i class="fa-brands fa-ember"></i> <span>Member</span>
                </a>
            </li>
            <li>
                <a href="{{ route('supplier.index') }}">
                <i class="fa-solid fa-boxes-packing"></i> <span>Supplier</span>
                </a>
            </li>
            <li class="header">TRANSACTION</li>
            <!-- <li>
                <a href="{{ route('pengeluaran.index') }}">
                <i class="fa-solid fa-chess-pawn"></i> <span>Expenses</span>
                </a>
            </li> -->
            <li>
                <a href="{{ route('pembelian.index') }}">
                <i class="fa-solid fa-cart-shopping"></i> <span>Purchase</span>
                </a>
            </li>
            <li>
                <a href="{{ route('penjualan.index') }}">
                <i class="fa-solid fa-money-bill-trend-up"></i> <span>Sales List</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transaksi.baru') }}">
                <i class="fa-solid fa-tent-arrow-left-right"></i> <span>New Transaction</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transaksi.index') }}">
                    <i class="fa fa-cart-arrow-down"></i> <span>Active Transaction</span>
                </a>
            </li>
            
            <li class="header">REPORT</li>
            <li>
                <a href="{{ route('laporan.index') }}">
                    <i class="fa fa-file-pdf-o"></i> <span>Income</span>
                </a>
            </li>
            <li class="header">SYSTEM</li>
            <li>
                <a href="{{ route('user.index') }}">
                <i class="fa-solid fa-user-tie"></i> <span>User</span>
                </a>
            </li>
            <li>
                <a href="{{ route('setting.index') }}">
                <i class="fa-solid fa-sliders"></i>Settings</span>
                </a>
            </li>
            @else
            <li>
                <a href="{{ route('transaksi.baru') }}">
                    <i class="fa fa-cart-plus"></i> <span>New Transaction</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transaksi.index') }}">
                    <i class="fa fa-cart-arrow-down"></i> <span>Active Transaction</span>
                </a>
            </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside><!-- visit "codeastro" for more projects! -->