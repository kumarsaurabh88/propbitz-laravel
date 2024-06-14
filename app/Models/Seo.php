<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $fillable = ['url','description','meta_title','image','keywords','alt_tag','canonical_tag','meta_twitter','meta_twitter_card','meta_twitter_site','meta_twitter_title','meta_twitter_description','og_url','og_site_name','robots'];
}

