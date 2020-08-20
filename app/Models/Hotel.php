<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Hotel
 * 
 * @property int $idHotel
 * @property string $hotelName
 * @property string $region
 * @property string $address
 * @property int $stars
 * @property string $managerName
 * @property int $phone
 * @property string $description
 * @property string $url
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property int $idUser
 * @property bool $statu
 * 
 * @property User $user
 * @property Collection|Booking[] $bookings
 * @property Collection|Event[] $events
 * @property Collection|Price[] $prices
 * @property Collection|Room[] $rooms
 * @property Collection|Sub[] $subs
 *
 * @package App\Models
 */
class Hotel extends Model
{
	protected $table = 'hotels';
	protected $primaryKey = 'idHotel';

	protected $casts = [
		'stars' => 'int',
		'phone' => 'int',
		'idUser' => 'int',
		'statu' => 'bool'
	];

	protected $fillable = [
		'hotelName',
		'region',
		'address',
		'stars',
		'managerName',
		'phone',
		'description',
		'url',
		'idUser',
		'statu'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'idUser');
	}

	public function bookings()
	{
		return $this->hasMany(Booking::class, 'idHotel');
	}

	public function events()
	{
		return $this->hasMany(Event::class, 'idHotel');
	}

	public function prices()
	{
		return $this->hasMany(Price::class, 'idHotel');
	}

	public function rooms()
	{
		return $this->hasMany(Room::class, 'idHotel');
	}

	public function subs()
	{
		return $this->hasMany(Sub::class, 'idHotel');
	}
}
