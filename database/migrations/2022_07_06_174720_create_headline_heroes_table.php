<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateHeadlineHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headline_heros', function (Blueprint $table) {
            $table->id();
            $table->string('page')->unique();
            $table->string('title',255)->nullable()->default('');
            $table->string('subtitle',255)->nullable()->default('');
            $table->string('image',255)->nullable()->default('');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('headline_heros');
    }
}
