<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Str;

class ProductObserver
{
    /**
     * Handle the Product "created" event.
     */
    public function creating(Product $product)
    {
        $product->first_name = 'observer-' . $product->first_name;
    }

    public function created(Product $product)
    {
        $product->person = Str::slug($product->first_name);
        $product->save();
    }

    /**
     *
     * Handle the Product "updated" event.
     */
    // public function updated(Product $product): void
    // {
    //     Product::create(['first_name'=>id,'last_name'=>'updated']);
    // }

    /**
     * Handle the Product "deleted" event.
     */
    public function deleted(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "restored" event.
     */
    public function restored(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "force deleted" event.
     */
    public function forceDeleted(Product $product): void
    {
        //
    }
}
