<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;
    protected $fillable = ['client_name', 'domain', 'license_key', 'status'];

    // Generate API Key
    public static function generateKey()
    {
        return bin2hex(random_bytes(16)); // Hasilkan key unik
    }
}