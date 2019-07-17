<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManuscriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manuscripts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('coverletter');
            $table->mediumText('title');
            $table->mediumText('abstract');
            $table->mediumText('keywords');
            $table->mediumText('comment');
            $table->bigInteger('user_id');
            $table->text('docfiles');
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
        Schema::dropIfExists('manuscripts');
    }
}
