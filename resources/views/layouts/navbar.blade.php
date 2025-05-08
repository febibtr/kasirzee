<div class="nav-header">
    <div class="brand-logo">
        <a href="#">
            <span class="brand-title">
                <h2 style="color: white">Kasir Biadap</h2>
            </span>
        </a>
    </div>
</div>

<div class="header">    
    <div class="header-content clearfix">
        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-right" style="display: flex; justify-content: space-between; align-items: center; width: 100%;">

            <div style="flex-grow: 1; text-align: center; font-weight: bold; font-size: 16px;">
               Selamat Datang {{ auth()->user()->name}} !!
            </div>
            
        </div>
    </div>
</div>
