
@include('admin.layout.top')
@include('admin.layout.menu')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    @include('sweetalert::alert')
                    @yield('content')
                    
                    <!-- Yield ini adalah mendeklarasikan yang akan diisi konten ketika yeildnya dipanggil
                        didlam kontent masing-masing, contoh yeild yang diatas menggunakan value content -->
                    </div>
                </main>
</div>
@include('admin.layout.bottom')