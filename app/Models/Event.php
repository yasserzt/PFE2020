<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 * 
 * @property int $idEvent
 * @property string $type
 * @property float $price
 * @property Carbon $endDate
 * @property Carbon $created_at
 * @property string $description
 * @property string $img
 * @property Carbon $updated_at
 * @property Carbon $startDate
 * @property int $idHotel
 * @property int $maxNumber
 * 
 * @property Hotel $hotel
 * @property Collection|EventRegistre[] $event_registres
 *
 * @package App\Models
 */
class Event extends Model
{
	protected $table = 'event';
	protected $primaryKey = 'idEvent';

	protected $casts = [
		'price' => 'float',
		'idHotel' => 'int',
		'maxNumber' => 'int'
	];

	protected $dates = [
		'endDate',
		'startDate'
	];

	protected $fillable = [
		'type',
		'price',
		'endDate',
		'description',
		'img',
		'startDate',
		'idHotel',
		'maxNumber'
	];

	public function hotel()
	{
		return $this->belongsTo(Hotel::class, 'idHotel');
	}

	public function event_registres()
	{
		return $this->hasMany(EventRegistre::class, 'idEvent');
	}
}
