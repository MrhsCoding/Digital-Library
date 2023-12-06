@extends('layouts.links')

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="img/avatar.png" alt="profil"> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="/homeAdmin" class="nav_logo nav_link {{ $title === 'Literasi' ? 'active' : '' }}"> <i class='bx bx-library nav_logo-icon'></i> <span class="nav_logo-name">Literasi</span> </a>
                <div class="nav_list">
                    <a href="/peminjam" class="nav_link {{ $title === 'Peminjam' ? 'active' : '' }}"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Peminjam</span></a> 
                    <a href="#" class="nav_link {{ $title === 'Ulasan' ? 'active' : '' }}"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Ulasan</span> </a> 
                    <a href="#" class="nav_link {{ $title === 'Buku' ? 'active' : '' }}"> <i class='bx bx-book nav_icon'></i> <span class="nav_name">Buku</span> </a> 
                    <a href="/petugas" class="nav_link {{ $title === 'Petugas' ? 'active' : '' }}"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Petugas</span> </a> 
                    <a href="/tambahPetugas" class="nav_link {{ $title === 'Tambah Petugas' ? 'active' : '' }}"> <i class='bx bx-plus nav_icon'></i> <span class="nav_name">Tambah Petugas</span> </a> 
                </div>
            </div> <a href="/logout" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        @yield('content')
    </div>
    <!--Container Main end-->