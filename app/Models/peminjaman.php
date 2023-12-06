<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    public function buku() {
        return $this->hasMany(buku::class, 'id', 'bukuId');
    }

    public function users() {
        return $this->hasMany(users::class, 'id', 'userId');
    }
    // use HasFactory;
}
