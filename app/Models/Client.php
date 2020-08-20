<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $idClient
 * @property string $first_name
 * @property string $last_name
 * @property string $country
 * @property string $region
 * @property string $city
 * @property string $address
 * @property int $phone
 * @property int $postalCode
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property int $idUser
 * 
 * @property User $user
 * @property Collection|Booking[] $bookings
 * @property Collection|EventRegistre[] $event_registres
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'clients';
	protected $primaryKey = 'idClient';

	protected $casts = [
		'phone' => 'int',
		'postalCode' => 'int',
		'idUser' => 'int'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'country',
		'region',
		'city',
		'address',
		'phone',
		'postalCode',
		'idUser'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'idUser');
	}

	public function bookings()
	{
		return $this->hasMany(Booking::class, 'idClient');
	}

	public function event_registres()
	{
		return $this->hasMany(EventRegistre::class, 'idClient');
	}
}
