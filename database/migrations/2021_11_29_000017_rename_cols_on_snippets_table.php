<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColsOnSnippetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('snippets', function (Blueprint $table) {
            $table->renameColumn('name', 'title');
            $table->renameColumn('style', 'theme');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('snippets', function (Blueprint $table) {
            $table->renameColumn('theme', 'style');
            $table->renameColumn('title', 'name');
        });
    }
}
