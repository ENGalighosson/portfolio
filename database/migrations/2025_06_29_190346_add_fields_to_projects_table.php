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
    Schema::table('teams', function (Blueprint $table) {
        $table->string('name');
        $table->string('job')->nullable();
        $table->string('short_desc');
        $table->string('photo')->nullable();
        $table->string('email')->nullable();
        $table->string('facebook')->nullable();
        $table->string('linkedin')->nullable();
        $table->string('twitter')->nullable();
        $table->string('instagram')->nullable();
    });
}

public function down()
{
    Schema::table('teams', function (Blueprint $table) {
        $table->dropColumn([
            'name',
            'job',
            'short_desc',
            'photo',
            'email',
            'facebook',
            'linkedin',
            'twitter',
            'instagram',
        ]);
    });
}



};
