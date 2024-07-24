<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('employee_id')->nullable()->after('id');
            $table->string('phone_number')->nullable()->after('employee_id');
            $table->string('department')->nullable()->after('phone_number');
            $table->string('designation')->nullable()->after('department');
            $table->string('firstname')->nullable()->after('designation');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['employee_id', 'phone_number', 'department', 'designation','firstname']);
        });
    }
};
