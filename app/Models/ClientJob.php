<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientJob extends Model
{
    use HasFactory;

    protected $table = 'client_jobs';
    protected $fillable = [
        'title', 'logo', 'industries_id', 'location', 'deadline', 'salary_range', 'job_details', 'company', 'job_type'

    ];

    public function industry(){
        return $this->belongsTo(Industry::class, 'industries_id', 'id');
    }
}
