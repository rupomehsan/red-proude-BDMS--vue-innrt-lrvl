<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='\App\Modules\Auth\Database\create_otp_codes_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('otp_codes', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->enum('type', ['register', 'login', 'reset', 'verify'])->nullable();
            $table->string('code')->nullable();
            $table->enum('verify_status', ['open', 'pending', 'confirm'])->nullable();
            $table->dateTime('validate_till')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('otp_codes');
    }

};
