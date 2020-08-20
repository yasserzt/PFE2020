<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
/**
 * Class Sub
 *
 * @property int $idSub
 * @property bool $statue
 * @property Carbon $startDate
 * @property Carbon $endDate
 * @property bool $freeTrail
 * @property int $idHotel
 * @property float $priceSub
 * @property string $typeSub
 *
 * @property Hotel $hotel
 *
 * @package App\Models
 */
class Sub extends Model
{
	 use Searchable;
	protected $table = 'sub';
	protected $primaryKey = 'idSub';
	public $timestamps = false;

	protected $casts = [
		'statue' => 'bool',
		'freeTrail' => 'bool',
		'idHotel' => 'int',
		'priceSub' => 'float'
	];

	protected $dates = [
		'startDate',
		'endDate'
	];

	protected $fillable = [
		'statue',
		'startDate',
		'endDate',
		'freeTrail',
		'idHotel',
		'priceSub',
		'typeSub'
	];

	public function hotel()
	{
		return $this->belongsTo(Hotel::class, 'idHotel');
	}
}
