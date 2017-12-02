<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>登录 - {{ config('backend.name', '管理后台') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/backend.css') }}" rel="stylesheet">
</head>
<body>
    <div id="login" class="wrapper">
        {{-- Layout --}}
        <el-container class="wrapper">
            <el-header class="top-header">
            	<el-row>
	            	<el-col :span="12" :offset="6">
                		<a class="logo-text" href="{{ url('backend') }}">BeeCMF</a>
                		<ul class="header-operations">
		                    <li><a target="_blank" href="https://github.com/xiaofengit/BeeCMF">Github</a></li>
		                </ul>
	              	</el-col>
              	</el-row>
            </el-header>
            <el-main>
	            <el-row>
	            	<el-col :span="6" :offset="9">
			            <el-form :model="loginForm" :rules="rules" class="login-form" ref="loginForm">
			            	<el-form-item prop="email">
			                	<el-input v-model="loginForm.email" placeholder="登录邮箱"></el-input>
			            	</el-form-item>
			            	<el-form-item prop="password">
			                	<el-input type="password" v-model="loginForm.password" placeholder="登录密码"></el-input>
			            	</el-form-item>
			            	<el-form-item label="记住我的登录信息">
								<el-switch v-model="loginForm.remember"></el-switch>
							</el-form-item>
			                <el-form-item>
			                    <el-button type="primary" @click="submitForm('loginForm')">登录</el-button>
			                </el-form-item>
			            </el-form>
		        	</el-col>
	            </el-row>
	            
	        </el-main>
            <el-footer class="container-footer" height="30px">
                小蜂内容管理框架(BeeCMF) © 2017-{{ date('Y') }} <a href="http://www.xiaofengit.com" target="_blank">广州小蜂科技有限公司</a> 版权所有
            </el-footer>
        </el-container>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/backend-login.js') }}"></script>
</body>
</html>
