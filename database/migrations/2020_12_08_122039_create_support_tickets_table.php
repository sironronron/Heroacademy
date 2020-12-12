<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_tickets', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->enum('type', ['Bug', 'User Experience', 'Question', 'Suggestion'])->nullable();
            
            $table->string('subject');
            $table->string('email');
            $table->text('message');

            $table->string('ip_address');
            $table->enum('priority', ['Low', 'Normal', 'High'])->default('Low');
            $table->enum('status', ['Pending', 'Solved', 'Cancelled'])->default('Pending');

            $table->string('remarks')->nullable();
           
            $table->unsignedBigInteger('support_user_id')->nullable();
            $table->foreign('support_user_id')->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('support_tickets');
    }
}
