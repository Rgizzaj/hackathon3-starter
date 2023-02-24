<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()

    {
    
        Schema::create('owners', function (Blueprint $table) { 
            $table->bigIncrements('id');                        
            $table->string('first_name');                           
            $table->string('surname');                
            $table->string('email');                       
            $table->string('phone');                           
            $table->string('address');              
            $table->timestamps();                             
    
        });
    
    }
    
         
    public function down()
    
    {
    
        Schema::dropIfExists('owners'); 
    
    }

    /**
     * Reverse the migrations.
     */
};

