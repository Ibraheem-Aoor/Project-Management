<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSiteRtlToWorkspacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('workspaces', function (Blueprint $table) {
         $table->string('site_rtl')->nullable()->after('logo_white');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('workspaces', function (Blueprint $table) {
            //
        });
    }
}
