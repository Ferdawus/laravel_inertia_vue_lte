<template>
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-{{ currentDate.getFullYear() }} <Link  href="#">AdminLTE.io</Link>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
            
        </div>
    </footer>
</template>
<script>

export default {
    data() {
        return {
            currentDate:new Date, 
        }
    },
}
</script>
<style lang="">
    
</style>