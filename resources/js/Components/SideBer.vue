<template>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <Link :href="route('admin.dashboard.index')" class="brand-link">
            <img
                :src="'/storage/images/AdminLTELogo.png'"
                alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3"
                style="opacity: 0.8"
            />
            <span class="brand-text font-weight-light">Admin-O-Matic</span>
        </Link>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img
                        src="dist/img/user2-160x160.jpg"
                        class="img-circle elevation-2"
                        alt="User Image"
                    />
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ $page.props.user.name }}</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <!-- <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input
                        class="form-control form-control-sidebar"
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                    />
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div> -->

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul
                    class="nav nav-pills nav-sidebar flex-column"
                    data-widget="treeview"
                    role="menu"
                    data-accordion="false"
                >
                    <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <Link :href="route('admin.dashboard.index')" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </Link>
                    </li>
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Tables
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                               <Link href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Admins</p>
                                </Link>
                            </li>
                            <li class="nav-item">
                               <Link href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Users</p>
                                </Link>
                            </li>
                            <li class="nav-item">
                               <Link href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Permissions</p>
                                </Link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">MISCELLANEOUS</li>
                    <li class="nav-item">
                        <Link :href="route('dashboard')" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Site </p>
                        </Link>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-sing-out-alt"></i>
                            <p>Logout </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</template>
<script>
import { Link } from '@inertiajs/vue3';

export default { components: { Link } };
</script>
<style>
</style>
