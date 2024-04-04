<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function wisatawan() {
        return $this->hasOne(Wisatawan::class);
    }
    public function admindesawisata() {
        return $this->hasOne(AdminDesaWisata::class);
    }
    public function superadmin() {
        return $this->hasOne(SuperAdmin::class);
    }
}
