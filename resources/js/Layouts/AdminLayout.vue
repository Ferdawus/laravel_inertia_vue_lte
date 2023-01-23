<template>
    <div class="wrapper">
        <div>
        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->
        <!-- Navbar -->
            <NavBer/>
        <!-- /.navbar -->
            <SideBer />
        <!-- Main Sidebar Container -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <slot name="header"></slot>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
                <slot></slot>
            <!-- /.content -->
        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
        <!-- /.control-sidebar -->
        <!-- Main Footer -->
        <Footer />
    </div>
    </div>
</template>
<script>
import Footer from '@/Components/Footer.vue';
import NavBer from '@/Components/NavBer.vue';
import SideBer from '@/Components/SideBer.vue';

export default {
    components:{
        Footer,
        NavBer,
        SideBer,
    },
    mounted() {
        this.init();
    },
    methods: {
        init(){
            let SELECTOR_LOADER = ".loader"
            setTimeout(() =>{
                let $loader = $(SELECTOR_LOADER)
                if($loader){
                    $loader.css('height',0)
                    setTimeout(() =>{
                        $loader.children().hide()
                    },5000)
                }
            },5000)
        }
    },
}
</script>
<style>
    
</style>