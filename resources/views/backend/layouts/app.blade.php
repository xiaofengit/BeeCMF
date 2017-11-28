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
				<el-aside class="aside-menu">aside</el-aside>
				<el-container>
			      <el-main class>Main</el-main>
			      <el-footer>Footer</el-footer>
			    </el-container>
			</el-container>
		</el-container>
	</div>

	<!-- Scripts -->
	<script src="{{ mix('js/backend.js') }}"></script>
</body>
</html>