<template>
    <el-menu
        class="el-menu-vertical-demo"
        :collapse="collapse">
        <el-submenu index="3">
            <template slot="title">
                <i class="el-icon-setting"></i>
                <span>设置</span>
            </template>
            <el-menu-item index="3-1"><a href="#">网站设置</a></el-menu-item>
        </el-submenu>
    </el-menu>
</template>
<script>
    export default {
        data() {
            return {
                //collapse: false
            };
        },
        props: ['collapse']
    }
</script>
