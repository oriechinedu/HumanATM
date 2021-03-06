<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('name');
            $table->string('wallet_id');
            $table->string('email', 100)->unique();
            $table->string('referral_id')->nullable();
             $table->string('sponsor_id')->nullable();
            $table->tinyInteger('role')->default(0);
            $table->string('password', 200);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
             'email' => "admin@humanatm.io",
             'wallet_id' =>'bef8fe3',
             'name' => "Admin",
             'password' => bcrypt('hum@n@tm@dmin'),
             'role' => 1,
        ]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}