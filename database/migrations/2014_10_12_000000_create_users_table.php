<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('img')->default('https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.hrzone.com%2Fsites%2Fall%2Fthemes%2Fpp%2Fimg%2Fdefault-user.png&f=1&nofb=1&ipt=2152e93680e304e33cb651d4ede7efdd8c47427a04535da4b5b905c7f01cdfc2&ipo=images');
            $table->string('banner')->default('');
            $table->rememberToken();
            $table->timestamps();
        });
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
};
