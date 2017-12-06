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
                    <li>修改密码</li>
                    <li>修改资料</li>
                    <li><a href="{{ route('logout') }}">退出</a></li>
                </ul>
            </el-header>
            <el-container>
                <el-aside width="210px" class="aside-menu" v-bind:class="{'menu-close':isCollapse}">
                    <el-button class="aside-menu-collapse-btn" :plain="true" icon="el-icon-menu" @click="isCollapse = !isCollapse"></el-button>
                    <aside-menu :collapse="isCollapse"></aside-menu>
                </el-aside>
                <el-container>
                    <el-main class>
                        <el-breadcrumb separator-class="el-icon-arrow-right">
                            <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
                            <el-breadcrumb-item>活动管理</el-breadcrumb-item>
                            <el-breadcrumb-item>活动列表</el-breadcrumb-item>
                            <el-breadcrumb-item>活动详情</el-breadcrumb-item>
                        </el-breadcrumb>

                        <el-form :inline="true" class="search-form-inline">
                            <el-form-item label="姓名">
                                <el-input placeholder="姓名"></el-input>
                            </el-form-item>
                            <el-form-item label="时间">
                                <el-date-picker
                                    type="datetimerange"
                                    range-separator="至"
                                    start-placeholder="开始"
                                    end-placeholder="结束">
                                </el-date-picker>
                            </el-form-item>
                            <el-form-item>
                                <el-button type="primary">搜索</el-button>
                            </el-form-item>
                        </el-form>

                        <el-table class="data-table" :border="true">
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
