@extends('backend.layouts.app')

@section('content')
	
    <el-breadcrumb separator-class="el-icon-arrow-right">
        <el-breadcrumb-item><a href="{{ route('backend.index') }}">工作面板</a></el-breadcrumb-item>
        <el-breadcrumb-item>仪表台</el-breadcrumb-item>
    </el-breadcrumb>

    <!-- <el-form :inline="true" class="search-form-inline">
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
    </el-form> -->

    <!-- <el-table class="data-table" :border="true">
        <el-table-column
            label="姓名">
        </el-table-column>
        <el-table-column
            label="姓名">
        </el-table-column>
        <el-table-column
            label="姓名">
        </el-table-column>
    </el-table> -->
@endsection