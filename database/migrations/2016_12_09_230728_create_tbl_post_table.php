<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPostTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tbl_post', function (Blueprint $table) {
            $table->increments('post_id');
            $table->string('post_name');
            $table->smallInteger('category_id');
            $table->smallInteger('author_id');
            $table->text('post_short_description');
            $table->longText('post_long_description');
            $table->string('post_image',100)->nullable();
            $table->tinyInteger('publication_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tbl_post');
    }

}
