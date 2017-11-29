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
            <el-header class="top-header" height="80px">
                <a class="logo-text" href="{{ url('backend') }}">BeeCMF</a>
                <ul class="header-operations">
                    <li>修改密码</li>
                    <li>修改资料</li>
                    <li>退出</li>
                </ul>
            </el-header>
            <el-container>
                <el-aside class="aside-menu">
                    <aside-menu></aside-menu>
                </el-aside>
                <el-container>
                    <el-main class>
                        <el-breadcrumb separator-class="el-icon-arrow-right">
                            <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
                            <el-breadcrumb-item>活动管理</el-breadcrumb-item>
                            <el-breadcrumb-item>活动列表</el-breadcrumb-item>
                            <el-breadcrumb-item>活动详情</el-breadcrumb-item>
                        </el-breadcrumb>

                        <el-table>
                            <el-table-column
                                label="姓名">
                            </el-table-column>
                            <el-table-column
                                label="姓名">
                            </el-table-column>
                            <el-table-column
                                label="姓名">
                            </el-table-column>
                        </el-table>
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
</body>
</html>
