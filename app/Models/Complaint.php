<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use DateTimeInterface;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'bride_name',
        'bride_dob',
        'bride_year',
        'bride_is_year',
        'bride_address',
        'bride_phone',
        'groom_name',
        'groom_dob',
        'groom_year',
        'groom_is_year',
        'groom_address',
        'groom_phone',
        'whistleblower_name',
        'whistleblower_dob',
        'whistleblower_year',
        'whistleblower_is_year',
        'whistleblower_address',
        'whistleblower_phone',
        'whistleblower_gender',
        'relationship',
        'chronology',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
