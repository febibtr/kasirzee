<div class="nk-sidebar">          
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('dashboard.index') }}" class="Dashboard" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-desktop"></i><span class="nav-text">DASHBOARD</span>
                </a>
                
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-database"></i> <span class="nav-text">DATABASE</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('produk.index') }}">Barang Atau Jasa</a></li>
                    {{-- <li><a href="./layout-one-column.html">Manajemen Stok</a></li> --}}
                    <li><a href="{{ route('kategori.index') }}">Kategori</a></li>
                    <li><a href="{{ route('supplier.index') }}">Supplier</a></li>
                    <li><a href="{{ route('staff.index') }}">Staff</a></li>
                </ul>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-money"></i> <span class="nav-text">TRANSAKSI</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('transaksi.index') }}">Penjualan</a></li>
                    <li><a href="{{ route('pembelian.index') }}">Pembelian</a></li>
                </ul>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-gear"></i> <span class="nav-text">PENGATURAN</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('profile.edit')}}">Akun</a></li>
                    
                    <li><a href="{{ route('logout') }}" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a></li>
                </ul>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
                
                
            </li>
    </div>
</div>