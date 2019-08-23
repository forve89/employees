<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->text('full_name');
            $table->integer('position_id')->unsigned();
            $table->timestamp('employment_date');
            $table->string('phone',20)->unique();
            $table->string('email',50)->unique()->nullable();
            $table->decimal('salary',8,2)->unsigned();
            $table->string('photo_path')->nullable();
            $table->string('mpath',50);
            $table->tinyInteger('level')->unsigned();
            $table->timestamps();
            $table->integer('admin_created_id');
            $table->integer('admin_updated_id');

            $table->foreign('position_id')->references('id')->on('base_positions')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_employees');
    }
}
