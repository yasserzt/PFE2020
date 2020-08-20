<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EventRegistre
 * 
 * @property int $idRegistre
 * @property int $idEvent
 * @property int $idClient
 * @property bool $payment
 * @property int $numberPlace
 * 
 * @property Client $client
 * @property Event $event
 *
 * @package App\Models
 */
class EventRegistre extends Model
{
	protected $table = 'eventRegistre';
	protected $primaryKey = 'idRegistre';
	public $timestamps = false;

	protected $casts = [
		'idEvent' => 'int',
		'idClient' => 'int',
		'payment' => 'bool',
		'numberPlace' => 'int'
	];

	protected $fillable = [
		'idEvent',
		'idClient',
		'payment',
		'numberPlace'
	];

	public function client()
	{
		return $this->belongsTo(Client::class, 'idClient');
	}

	public function event()
	{
		return $this->belongsTo(Event::class, 'idEvent');
	}
}
