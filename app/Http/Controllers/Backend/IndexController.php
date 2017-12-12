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

    /**
     * 修改密码
     *
     */
    public function resetPassword(Request $request)
    {
    	/*$this->validate($request, $this->rules(), $this->validationErrorMessages());

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $response == Password::PASSWORD_RESET
                    ? $this->sendResetResponse($response)
                    : $this->sendResetFailedResponse($request, $response);*/
    }
}
