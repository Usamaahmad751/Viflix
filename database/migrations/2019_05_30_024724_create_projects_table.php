<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('Pid');
            $table->string('name');
            $table->longtext('email');
            $table->longtext('category');
            $table->longtext('rawlength');
            $table->longtext('totallength');
            $table->longtext('music');
            $table->longtext('description');
            $table->longtext('promo');
            $table->longtext('cost');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
