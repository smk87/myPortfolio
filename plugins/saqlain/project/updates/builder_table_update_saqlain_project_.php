<?php namespace Saqlain\Project\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSaqlainProject extends Migration
{
    public function up()
    {
        Schema::table('saqlain_project_', function($table)
        {
            $table->string('url')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('saqlain_project_', function($table)
        {
            $table->dropColumn('url');
        });
    }
}
