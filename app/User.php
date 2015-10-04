<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'score'];

    public function friends()
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id_1', 'user_id_2');
    }
}
