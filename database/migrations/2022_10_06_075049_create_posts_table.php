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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            //For the Post title
            $table-> string('title');
            //For SEO
            $table-> string('slug');

            //To store the image Path.
            $table-> string('imagePath');

            //For the author's description.
            $table-> string('description');

            //For the users Id and name
            $table->foreignId('user_id')-> references('id')->on('users')->onDelete('cascade');

            //For the post body.
            $table-> text('body');

            //To record the time the article was posted
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
        Schema::dropIfExists('posts');
    }
};
