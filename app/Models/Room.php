<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Room
 * 
 * @property int $idRoom
 * @property int $idHotel
 * @property int $roomNumber
 * 
 * @property Hotel $hotel
 *
 * @package App\Models
 */
class Room extends Model
{
	protected $table = 'rooms';
	protected $primaryKey = 'idRoom';
	public $timestamps = false;

	protected $casts = [
		'idHotel' => 'int',
		'roomNumber' => 'int'
	];

	protected $fillable = [
		'idHotel',
		'roomNumber'
	];

	public function hotel()
	{
		return $this->belongsTo(Hotel::class, 'idHotel');
	}
}
