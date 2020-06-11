<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title');
            $table->mediumText('body');
        });
    }

    public function updatePost($data)
{
        $post = $this->find($data['id']);
        //$ticket->user_id = auth()->user()->id;
        $ticket->title = $data['title'];
        $ticket->body = $data['body'];
        $ticket->save();
        return 1;
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
}
