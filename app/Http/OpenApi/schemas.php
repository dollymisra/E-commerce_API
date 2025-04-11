<?php

namespace App\Http\OpenApi;

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

/**
 * @OA\Schema(
 *     schema="ProductRequest",
 *     required={"name", "description", "price", "stock", "sku"},
 *     @OA\Property(property="name", type="string", example="iPhone 15"),
 *     @OA\Property(property="description", type="string", example="Latest smartphone with advanced features"),
 *     @OA\Property(property="price", type="number", format="float", example=999.99),
 *     @OA\Property(property="stock", type="integer", example=50),
 *     @OA\Property(property="sku", type="string", example="IPH15256BLK"),
 *     @OA\Property(property="image_url", type="string", example="https://example.com/images/iphone15.jpg"),
 *     @OA\Property(property="is_active", type="boolean", example=true),
 *     @OA\Property(property="category", type="string", example="Electronics"),
 *     @OA\Property(property="tags", type="array", @OA\Items(type="string"), example={"smartphone", "apple", "5G"})
 * )
 */
class Schemas
{
    // This class exists just to hold the OpenAPI schema annotations
}