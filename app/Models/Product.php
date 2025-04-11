<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Correct import
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;


/**
 * @OA\Schema(
 *     schema="Product",
 *     required={"name", "description", "price", "stock", "sku"},
 *     @OA\Property(property="id", type="integer", format="int64", example=1),
 *     @OA\Property(property="name", type="string", example="iPhone 15"),
 *     @OA\Property(property="description", type="string", example="Latest smartphone with advanced features"),
 *     @OA\Property(property="price", type="number", format="float", example=999.99),
 *     @OA\Property(property="stock", type="integer", example=50),
 *     @OA\Property(property="sku", type="string", example="IPH15256BLK"),
 *     @OA\Property(property="image_url", type="string", example="https://example.com/images/iphone15.jpg"),
 *     @OA\Property(property="is_active", type="boolean", example=true),
 *     @OA\Property(property="category", type="string", example="Electronics"),
 *     @OA\Property(property="tags", type="array", @OA\Items(type="string"), example={"smartphone", "apple", "5G"}),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */


class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'sku',
        'image_url',
        'is_active',
        'category',
        'tags',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean',
        'tags' => 'array',
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        // Clear cache when a product is created, updated, or deleted
        static::saved(function () {
            Cache::forget('products.all');
        });

        static::deleted(function () {
            Cache::forget('products.all');
        });
    }
}
