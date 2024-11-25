<div class="container-fluid">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Data Staff</h4>
        <a href="{{ route('staff.create') }}" class="btn btn-primary">Tambah Staff</a>
    </div>
    <div class="row">
        <div class="col-lg">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        
                        @yield('data-table')
                </div>
            </div>
        </div>
    </div>
</div>