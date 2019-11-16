<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookLoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_loan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'fk_bookloan_user')->references('id')->on('user')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id', 'fk_bookloan_book')->references('id')->on('book')->onDelete('restrict')->onUpdate('restrict');
            $table->date('date_loan');
            $table->string('provide_to',100);
            $table->boolean('state');
            $table->date('date_return')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_loan');
    }
}
