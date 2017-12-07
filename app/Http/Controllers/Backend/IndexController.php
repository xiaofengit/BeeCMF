<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

class IndexController extends BaseController
{
    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.index');
    }

    /**
     * 修改密码表单
     *
     * @return \Illuminate\Http\Response
     */
    public function showResetForm()
    {
    	return view('backend.password');
    }
}
