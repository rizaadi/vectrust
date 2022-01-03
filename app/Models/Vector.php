<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vector extends Model
{
    use HasFactory;
    public $table = "vector";
    protected $fillable = [
                'name',
                'id_users',
                'description',
                'itemImage',
                'itemTags',
                'itemSoftware',
                'itemFile',
                'itemDownload',
                'itemRating'];
}
