<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotel;
use Laravel\Scout\Searchable;
/**
 * Class Booking
 *
 * @property int $idBook
 * @property int $idClient
 * @property int $idPrice
 * @property Carbon $startDate
 * @property Carbon $endDate
 * @property int $roomNumber
 *
 * @property Client $client
 * @property Price $price
 *
 * @package App\Models
 */
class Booking extends Model
{
	 use Searchable;
	protected $table = 'booking';
	protected $primaryKey = 'idBook';
	public $timestamps = false;

	protected $casts = [
		'idClient' => 'int',
		'idPrice' => 'int',
		'roomNumber' => 'int'
	];

	protected $dates = [
		'startDate',
		'endDate'
	];

	protected $fillable = [
		'idClient',
		'idPrice',
		'idHotel',
		'startDate',
		'endDate',
		'roomNumber'
	];

	public function client()
	{
		return $this->belongsTo(Client::class, 'idClient');
	}

	public function hotel()
	{
		return $this->belongsTo(Hotel::class, 'idHotel');
	}

	public function price()
	{
		return $this->belongsTo(Price::class, 'idPrice');
	}
}
