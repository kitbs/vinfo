<?php

namespace Vinfo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Bottle extends Model
{
	use SoftDeletes;

	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at',
		'purchased_at',
		'consumed_at',
	];

	protected $inheritable = [
		'vintage_id',
		'rack_id',
		'shelf_id',
		'bottle_size_id',
		'vendor_id',
		'purchased_at',
		'consumed_reason_id',
		'consumed_at',
	];

	protected $fillable = [
		'vintage_id',
		'rack_id',
		'shelf_id',
		'bottle_size_id',
		'case_id',
		'case_override',
		'vendor_id',
		'purchased_at',
		'purchased_at_date',
		'consumed_reason_id',
		'consumed_at',
		'consumed_at_date',
	];

	protected $casts = [
		'case_override' => 'json',
	];

	public static function getInheritable()
	{
		$instance = new static;
		return $instance->inheritable;
	}

	public function user()
	{
		return $this->belongsTo('Vinfo\User');
	}

	public function vintage()
	{
		return $this->belongsTo('Vinfo\Vintage');
	}

	public function wine()
	{
		return $this->vintage()->wine();
	}

	public function rack()
	{
		return $this->belongsTo('Vinfo\Rack');
	}

	public function shelf()
	{
		return $this->belongsTo('Vinfo\Shelf');
	}

	public function size()
	{
		return $this->belongsTo('Vinfo\BottleSize', 'bottle_size_id');
	}

	public function vendor()
	{
		return $this->belongsTo('Vinfo\Vendor');
	}

	public function consumedReason()
	{
		return $this->belongsTo('Vinfo\ConsumedReason');
	}

	public function prices()
    {
        return $this->morphMany('Vinfo\Price', 'priceable');
    }

	public function bottleCase()
	{
		return $this->belongsTo('Vinfo\BottleCase', 'case_id');
	}

	public function getNameAttribute()
	{
		return $this->vintage->name;
	}

	public function scopeForCurrentUser($query)
	{
		return $query->where('user_id', Auth::user()->id);
	}

	public function scopeConsumed($query)
	{
		return $query->whereNotNull('consumed_reason_id');
	}

	public function scopeNotConsumed($query)
	{
		return $query->where('consumed_reason_id', null);
	}

	public function getPurchasedAtDateAttribute()
	{
		return $this->purchased_at ? $this->purchased_at->format('Y-m-d') : null;
	}

	public function getConsumedAtDateAttribute()
	{
		return $this->consumed_at ? $this->consumed_at->format('Y-m-d') : null;
	}

	public function setPurchasedAtDateAttribute($date)
	{
		$this->purchased_at = $date ?: null;
	}

	public function setConsumedAtDateAttribute($date)
	{
		$this->consumed_at = $date ?: null;
	}

	public function setConsumedReasonIdAttribute($value)
	{
		$this->attributes['consumed_reason_id'] = $value ?: null;
	}

	public function setVendorIdAttribute($value)
	{
		$this->attributes['vendor_id'] = $value ?: null;
	}

}
