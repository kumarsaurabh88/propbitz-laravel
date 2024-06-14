<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $fillable = ['url','description','meta_title','image','keywords','canonical_tag','meta_twitter','meta_twitter_card','meta_twitter_site','meta_twitter_title','meta_twitter_description','og_url','og_site_name','faq_schema','robots'];
}
