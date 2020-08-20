<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $username
 * @property string $typeAccount
 * @property string $email
 * @property Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Client[] $clients
 * @property Collection|Hotel[] $hotels
 *
 * @package App\Models
 */
class User extends Model
{
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

	public function clients()
	{
		return $this->hasMany(Client::class, 'idUser');
	}

	public function hotels()
	{
		return $this->hasMany(Hotel::class, 'idUser');
	}
}
