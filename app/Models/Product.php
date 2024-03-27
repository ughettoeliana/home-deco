<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $name
 * @property string $category
 * @property int $price
 * @property string $description
 * @property string|null $img
 * @property string|null $img_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImgDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'category',
        'description',
        'price',
        'img',
        'img_description'
    ];

    public static function validationRules(): array
    {
        return [
            'name' => 'required|min:2',
            'price' => 'required|numeric',
            'description' => 'required|min:2',
            'img' => 'min:2',
            'img-description' => 'min:2',
            'category' => 'required|min:2',
        ];
    }

    public static function validationMessages(): array
    {
        return [
            'name.required' => 'The product must have a name',
            'name.min' => 'The product name must have at least :min caracters',
            'price.required' => 'The product must have a price',
            'price.numeric' => 'The product price must be numeric ',
        ];
    }
}
