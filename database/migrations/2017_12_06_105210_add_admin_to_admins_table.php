<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddAdminToAdminsTable extends Migration
{
    protected $adminEmail = 'admin@xiaofengit.com';
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('admins')->insert([
            'email' => $this->adminEmail,
            'password' => bcrypt('xiaofengit.com'),
            'is_active' => 1,
            'is_super' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('admins')->where('email', '=', $this->adminEmail)->delete();
    }
}
