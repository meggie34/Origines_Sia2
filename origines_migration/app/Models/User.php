<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    
    protected $fillable = [
        'role', 'Firstname', 'Middlename', 'Lastname',
        'contact_no', 'Address', 'inventory_id', 'log_id'
    ];

    public function transactions()
    {
        return $this->hasMany(SalesTransaction::class, 'users_id', 'users_id');
    }
}


