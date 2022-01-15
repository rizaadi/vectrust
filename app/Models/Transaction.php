<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public $table = "transaction";
    protected $fillable = [
                'id_users',
                'id_transaction',
                'transaction',
                'totalOrder',
                'status'];
}
