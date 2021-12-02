<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'uuid',
        'transaction_id',
        'image',
        'birth_certificate_no',
        'birth_date',
        'gender',
        'phone',
        'father_name',
        'father_nid_no',
        'mother_name',
        'mother_nid_no',
        'guardian_name',
        'guardian_nid_no',
        'desire_class',
        'present_address',
        'present_devision',
        'present_district',
        'present_thana',
        'present_post_code',
        'permanent_address',
        'permanent_devision',
        'permanent_district',
        'permanent_thana',
        'permanent_post_code',
        'version',
        'status',
        'is_rejected',
        'rejected_by',
        'prev_class',
        'prev_school',
    ];
}
