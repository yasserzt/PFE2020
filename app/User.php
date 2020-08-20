<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Scout\Searchable;

class User extends Authenticatable
{


    use Searchable;
    use Notifiable;
    protected $table = 'users';

    protected $dates = [
      'email_verified_at'
    ];

    protected $hidden = [
      'password',
      'remember_token'
    ];

    protected $fillable = [
      'username',
      'typeAccount',
      'email',
      'email_verified_at',
      'password',
      'remember_token'
    ];

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'users_index';
    }

    public function clients()
    {
      return $this->hasMany(Client::class, 'idUser');
    }

    public function hotels()
    {
      return $this->hasMany(Hotel::class, 'idUser');
    }
    }
