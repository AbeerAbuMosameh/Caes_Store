<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'home_img',
        'home_title',
        'home_description',
        'video',
        'home_section_img',

        'about_cover_img',
        'about_img',
        'about_title',
        'about_description',

        'services_cover_img',
        'projects_cover_img',
        'contacts_cover_img',
        'contacts_img',
        'project_details_cover',
        'project_details_main_img',
        'project_details_img',
        'project_details_description',
    ];

}
