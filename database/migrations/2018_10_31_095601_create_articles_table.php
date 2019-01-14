<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('标题');
            $table->string('img')->comment('预览图')->nullable();
            $table->text('content')->nullable()->comment('内容');
            $table->integer('category_id')->default(0)->unsigned()->comment('分类id');
            $table->integer('admin_id')->unsigned()->index()->comment('用户id');


            $table->integer('view_count')->default(0)->unsigned()->comment('观看数量');
            $table->integer('up_vote')->default(0)->unsigned()->comment('点赞数量');
            $table->integer('down_vote')->default(0)->unsigned()->comment('踩数量');

            $table->integer('comments_count')->default(0)->comment('评论数量');
            
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
        Schema::dropIfExists('articles');
    }
}
