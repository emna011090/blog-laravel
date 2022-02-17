<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddValueToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title');
            $table->string('content');
            $table->string('img');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')

                ->on('categories')->onDelete('cascade')
                ->onUpdate('cascade');

                $table->unsignedBigInteger('auther_id');
                $table->foreign('auther_id')->references('id')
    
                    ->on('authers')->onDelete('cascade')
                    ->onUpdate('cascade');
                
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
        

            //
        });
    }
}
