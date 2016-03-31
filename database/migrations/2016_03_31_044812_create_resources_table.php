<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Create resources table.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class CreateResourcesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('resources', function(Blueprint $table) {

            $table->bigIncrements('id');
            $table->smallInteger('resource_category_id')->unsigned();
            $table->string('name');
            $table->string('link');
            $table->string('contributor_email');
            $table->timestamps();

            $table->foreign('resource_category_id')->references('id')->on('resource_categories')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('resources');
    }
}
