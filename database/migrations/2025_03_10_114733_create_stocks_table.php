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
    Schema::create('stocks', function (Blueprint $table) {
        $table->id();
        $table->string('item_name');
        $table->string('category');
        $table->integer('quantity');
        $table->string('supplier')->nullable();
        $table->date('purchase_date')->nullable();
        $table->decimal('unit_price', 10, 2)->nullable();
        $table->string('email');
        $table->text('description')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
