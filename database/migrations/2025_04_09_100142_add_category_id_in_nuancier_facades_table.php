<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdInNuancierFacadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nuancier_facades', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->after('id');

            $table->foreign('category_id')->references('id')->on('categories')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nuancier_facades', function (Blueprint $table) {
            $table->dropForeign('nuancier_facades_category_id_foreign');
            $table->dropColumn('category_id');
        });
    }
}
