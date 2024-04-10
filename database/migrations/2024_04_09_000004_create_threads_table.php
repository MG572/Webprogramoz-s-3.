<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->increments('thread_id');
            $table->string('thread_subject', 255);
            $table->dateTime('thread_date')->default(now());    
            $table->integer('thread_cat')->unsigned();
            $table->integer('thread_by')->unsigned();
            $table->text('thread_description');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('threads');

    }

}
