<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
		'order_id',
		'cartitem_id',
		'product_code',
        'product_title',
        'product_description',
		'product_model_code',
		'quantity',
        'price',
        'reduction_amount'.
        'final_price',
		'total_price',
    ];
    protected array $fieldspec = [];



	public function product()
	{
		return $this->belongsTo('App\Product', 'product_code', 'code');
	}

	public function product_model()
	{
		return $this->belongsTo('App\ProductModel', 'product_model_code', 'code');
	}

	public function cart_item()
	{
		return $this->belongsTo('App\CartItem', 'cart_item_id', 'id');
	}

	public function order()
	{
		return $this->belongsTo('App\Order');
	}

    function getFieldSpec(): array
    {
        return $this->fieldspec;
    }

	public function scopeList($query)
	{
		return $query->with('product')->orderBy('created_at');
	}
}
