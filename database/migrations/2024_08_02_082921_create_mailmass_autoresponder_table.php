<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mailmass_autoresponder', function (Blueprint $table) {
            $table->id();

            $table->string('subject');
            $table->string('body');
            $table->integer('wait_period');
            $table->char('table_name', 255);
            $table->char('email_field', 255);
            $table->char('date_field', 255);
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->tinyInteger('published')->default(true);

            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('deleted_by')->nullable()->constrained('users')->onDelete('set null');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mailmass_autoresponder');
    }
};
