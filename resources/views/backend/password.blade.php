<!-- stored in resource/views/backend/password.blade.php -->

@extends('backend.layouts.app')

@section('content')
	<el-breadcrumb separator-class="el-icon-arrow-right">
        <el-breadcrumb-item><a href="{{ route('backend.index') }}">工作面板</a></el-breadcrumb-item>
        <el-breadcrumb-item>修改密码</el-breadcrumb-item>
    </el-breadcrumb>

    <el-form label-width="100px" class="edit-form">
    	<el-form-item class="input" label="旧密码">
    		<el-input name="old_password" placeholder=""></el-input>
    	</el-form-item>
    	<el-form-item class="input" label="新密码">
    		<el-input name="password" placeholder=""></el-input>
    	</el-form-item>
    	<el-form-item class="input" label="确认新密码">
    		<el-input name="password_confirmation" placeholder=""></el-input>
    	</el-form-item>

    	<el-form-item>
            <el-button type="primary">提 交</el-button>
        </el-form-item>
    </el-form>
@endsection