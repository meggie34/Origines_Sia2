<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('users_id');
            $table->enum('role', ['admin', 'employee']);
            $table->string('Firstname');
            $table->string('Middlename')->nullable();
            $table->string('Lastname');
            $table->integer('contact_no');
            $table->string('Address');
            $table->unsignedBigInteger('inventory_id');
            $table->unsignedBigInteger('log_id');
            $table->timestamps();
        });

        DB::table('users')->insert([
            ['role' => 'admin', 'Firstname' => 'Julie Grace', 'Middlename' => 'M.', 'Lastname' => 'Origines', 'contact_no' => 123456789, 'Address' => 'Street 123', 'inventory_id' => 1, 'log_id' => 1],
            ['role' => 'employee', 'Firstname' => 'Breanna Zaillah', 'Middlename' => 'B.', 'Lastname' => 'Magdugo', 'contact_no' => 987654321, 'Address' => 'Street 456', 'inventory_id' => 2, 'log_id' => 2],
            ['role' => 'employee', 'Firstname' => 'Cristina Lean', 'Middlename' => 'C.', 'Lastname' => 'Iting', 'contact_no' => 555555555, 'Address' => 'Street 789', 'inventory_id' => 3, 'log_id' => 3],
        ]);
    }
    
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
