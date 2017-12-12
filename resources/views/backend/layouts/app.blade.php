<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('backend.name', '管理后台') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/backend.css') }}" rel="stylesheet">
</head>
<body>
    <div id="backend" class="wrapper">
        {{-- Layout --}}
        <el-container class="wrapper">
            <el-header class="top-header">
                <a class="logo-text" href="{{ url('backend') }}">BeeCMF</a>
                <ul class="header-operations">
                    <li><a href="{{ route('backend.password.form') }}">修改密码</li>
                    <li>修改资料</li>
                    <li><a href="{{ route('backend.logout') }}">退出</a></li>
                </ul>
            </el-header>
            <el-container>
                <el-aside width="210px" class="aside-menu" v-bind:class="{'menu-close':isCollapse}">
                    <el-button class="aside-menu-collapse-btn" :plain="true" icon="el-icon-menu" @click="isCollapse = !isCollapse"></el-button>
                    <aside-menu :collapse="isCollapse"></aside-menu>
                </el-aside>
                <el-container>
                    <el-main class>
                        @yield('content')
                    </el-main>
                    <el-footer class="container-footer" height="30px">
                        小蜂内容管理框架(BeeCMF) © 2017-{{ date('Y') }} <a href="http://www.xiaofengit.com" target="_blank">广州小蜂科技有限公司</a> 版权所有
                    </el-footer>
                </el-container>
            </el-container>
        </el-container>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/backend.js') }}"></script>

    @stack('script')
</body>
</html>
