<?php namespace Iillexial\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('iillexial_catalog_products', function($table)
        {
            Schema::dropIfExists('iillexial_catalog_products');
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('iillexial_catalog_products');
    }

}
