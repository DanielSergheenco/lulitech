<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->enum('service', ['dev', 'seo', 'sem', 'smm', 'em']);
            $table->enum('state', ['Initiated', 'Under revision', 'Action needed', 'In development', 'Under maintenance', 'Completed', 'Cancelled'])->default('Initiated');
            $table->foreignId('client_id')->constrained('users');
            $table->enum('category', ['presentation', 'e-commerce', 'blog', 'custom', 'na'])->nullable();
            $table->string('business_name')->nullable();
            $table->text('business_description')->nullable();
            $table->text('basic_requirements')->nullable();
            $table->foreignId('project_manager_id')->nullable()->constrained('users');
            $table->string('requirements')->nullable();
            $table->string('contract_unsigned')->nullable();
            $table->string('contract_signed')->nullable();
            $table->foreignId('advance_payment_id')->nullable()->constrained('payments');
            $table->foreignId('liq_payment_id')->nullable()->constrained('payments');
            $table->text('notes')->nullable();
            $table->boolean('referred_payed')->default(false);
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
        Schema::dropIfExists('orders');
    }
}
