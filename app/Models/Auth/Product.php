<?php

namespace App\Models\Auth;

use App\Models\Traits\Uuid;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use App\Models\Auth\Traits\Scope\ProductScope;
use App\Models\Auth\Traits\Method\ProductMethod;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Auth\Traits\Attribute\ProductAttribute;
use App\Models\Auth\Traits\Relationship\ProductRelationship;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product.
 */
class Product extends Model
{
    use HasRoles,
        Notifiable,
        SoftDeletes,
        ProductAttribute,
        ProductMethod,
        ProductRelationship,
        ProductScope,
        Uuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'image_type',
        'image_location',
        'active',
        'fecha',
        'category',
        'direccion',
        'lat',
        'lng',
        'stock',
        'user_id',
        'status',
        'number_product',
        'evidence_type',
        'evidence_location',
        'evidence_text',
        
    ];

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The dynamic attributes from mutators that should be returned with the product object.
     * @var array
     */
    protected $appends = ['full_name'];
}
