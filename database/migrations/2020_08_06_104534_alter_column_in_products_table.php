<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnInProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
                       $table->decimal('price', 15, 2)->nullable()->change();
            $table->decimal('weight', 10, 2)->nullable()->change();
            $table->decimal('width', 10, 2)->nullable()->change();
            $table->decimal('height', 10, 2)->nullable()->change();
            $table->decimal('length', 10, 2)->nullable()->change();
            $table->text('short_description')->nullable()->change();
            $table->text('description')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
                        $table->decimal('price', 15, 2)->nullable(false)->change();
            $table->decimal('weight', 10, 2)->nullable()->change(false);
            $table->decimal('width', 10, 2)->nullable()->change(false);
            $table->decimal('height', 10, 2)->nullable()->change(false);
            $table->decimal('length', 10, 2)->nullable()->change(false);
            $table->text('short_description')->nullable()->change(false);
            $table->text('description')->nullable()->change(false);
        });
    }
}
