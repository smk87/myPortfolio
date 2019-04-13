<?php namespace Saqlain\Project\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSaqlainProject extends Migration
{
    public function up()
    {
        Schema::create('saqlain_project_', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('year');
            $table->integer('parent_id')->nullable();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('saqlain_project_');
    }
}