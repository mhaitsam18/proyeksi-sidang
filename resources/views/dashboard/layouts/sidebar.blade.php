<ul class="navbar-nav sidebar sidebar-dark shadow" style="background-color: #b11116">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center py-5" href="index.html">
        <div class="sidebar-brand-icon" >
            <img src="/img/telkom1.png" style="width: 100%">
           <!-- <i class="fas fa-laugh-wink"></i>-->
        </div>
        {{-- <div class="sidebar-brand-text mx-3">Admin LAK</div> --}}
    </a>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider bg-white mb-3"> --}}

    <!-- Nav Item - Dashboard -->
    <li class="nav-item my-4">
        <div class="mb-2">
            <a class="d-flex justify-content-center" href="">
                <img class="img-profile rounded-circle" style="width: 40%" src="/img/undraw_profile_2.svg" alt="">
            </a>

        </div>

        <div class="text-center text-white flex">
            <p class="mb-0 p-1">{{ auth()->user()->nama_gelar }}</p>
            <p class="mb-0 px-1">{{ auth()->user()->nip }}</p>
            <p class="mb-0 px-1">{{ auth()->user()->role->nama_role }}</p>
        </div>

    </li>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider bg-white"> --}}
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    @if (auth()->user()->role_id == 1)
    <li class="nav-item">
        <a class="nav-link" href="/dashboard/proyeksi">
            Proyeksi Sidang
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link " href="/dashboard/laporan">
            Laporan Sidang
        </a>
    </li>
    @elseif(auth()->user()->role_id == 2)
    <li class="nav-item ">
        <a class="nav-link " href="/dashboard/prediksi">
            Prediksi Sidang
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link " href="/dashboard/laporan">
            Laporan Sidang
        </a>
    </li>
    @else
    <li class="nav-item">
        <a class="nav-link" href="/dashboard/proyeksi">
            Proyeksi Sidang
        </a>
    </li>
    @endif

</ul>
