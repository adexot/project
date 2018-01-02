<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCommentIdColumnRemoveMessageColum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('responses', function(Blueprint $table) {
        $table->dropColumn('message');
        $table->unsignedInteger('comment_id')->after('ticket_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('responses', function(Blueprint $table) {
        $table->text('message');
        $table->dropColumn('comment_id');
      });
    }
}
