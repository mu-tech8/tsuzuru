<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('profile_image')->after("email_verified_at");
            $table->string('self_introduction')->after("profile_image");
            $table->string('my_favorite')->after("self_introduction");
            $table->integer('type')->default(1)->after("my_favorite");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('profile_image');
            $table->dropColumn('self_introduction');
            $table->dropColumn('my_favorite');
            $table->dropColumn('type');
        });
    }
}
