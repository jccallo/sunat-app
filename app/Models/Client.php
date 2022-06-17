<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'document_type',
        'document_number',
        'fullname',
        'username',
        'address',
        'email',
        'cellphone',
        'phone',
        'district_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }
}
