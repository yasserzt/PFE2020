<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
/**
 * Class Price
 *
 * @property int $idPrice
 * @property float $price
 * @property string $roomCategory
 * @property int $idHotel
 *
 * @property Hotel $hotel
 * @property Collection|Booking[] $bookings
 *
 * @package App\Models
 */
class Price extends Model
{
	 use Searchable;
	protected $table = 'prices';
	protected $primaryKey = 'idPrice';
	public $timestamps = true;

	protected $casts = [
		'price' => 'float',
		'idHotel' => 'int'
	];

	protected $fillable = [
		'price',
		'roomCategory',
		'idHotel',
		'typePrice'
	];

	public function hotel()
	{
		return $this->belongsTo(Hotel::class, 'idHotel');
	}

	public function bookings()
	{
		return $this->hasMany(Booking::class, 'idPrice');
	}
}
