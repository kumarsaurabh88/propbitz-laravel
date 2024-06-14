<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;
use Auth;
use App\Http\Controllers\Traits\MasterTrait;

class ProductImport implements ToModel, WithHeadingRow
{
    use MasterTrait;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $offer_id = $row['offer_id'];
        $offer = $this->singleData("\App\Offer",["id" => $offer_id]);
        if($offer_id){
            $selling_price = (int)$row['price'] - ((int)$row['price'] * (int)$offer->discount /100);
        }else{
            $selling_price = (int)$row['price'];
        }
        return new Product([
            'owner_id' => Auth::id(),
            'name' => $row['name'],
            'slug' => Str::slug($row['name'],'-'),
            'category_id' => $row['category_id'],
            'short_description' => $row['short_description'],
            'sub_category_id' => $row['subcategory_id'],
            'brand_id' => $row['brand_id'],
            'offer_id' => $row['offer_id'],
            'feature'  => $row['feature'],
            'price'  => $row['price'],
			'selling_price'=> $selling_price,
			'product_type'=> $row['product_type'],
			'units'=> $row['units'],
			'sku'=> $row['sku'],
			'footprint'=> $row['footprint'],
			'wait'=> $row['weight'],
			'self_line'=> $row['self_line'],
            'color'=> $row['color'],
            'image1' => $row['image1'],
            'image2' => $row['image2'],
            'image3' => $row['image3'],
            'image4' => $row['image4'],
            'batch' => $row['batch'],
            'added_on' => $row['added_on'],
		]);
    }
}
