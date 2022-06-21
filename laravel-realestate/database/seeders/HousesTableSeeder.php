<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $houses = [
            [
                'price' => 200000,
                'address' => 'Via Mazzini 127',
                'post_code' => 19038,
                'city' => 'Sarzana',
                'square_meters' => 100,
                'rooms' => 2,
                'bathrooms' => 2,
                'floors' => 1,
                'description' => 'lorem ipsum dolor sit',
                'note' => 'lorem ipsum',
                'type' => 'negozio',
                'image' => 'https://e291f1206726d700191b-d0cedd1cc05016668dc83bc2742129e5.ssl.cf1.rackcdn.com/windsong/media/windsong-gallery-1-5fb4391576f56.jpg',
                'is_avaiable' => true,
                'contract' => 'affitto'
            ],
            [
                'price' => 20000,
                'address' => 'Viale Virgilio 123',
                'post_code' => 12131,
                'city' => 'Ravenna',
                'square_meters' => 70,
                'rooms' => 2,
                'bathrooms' => 2,
                'floors' => 1,
                'description' => 'lorem ipsum dolor sit',
                'note' => 'lorem ipsum',
                'type' => 'casa',
                'image' => 'https://www.turismo.ra.it/wp-content/uploads/2021/01/ravenna-lido-adriano.jpg',
                'is_avaiable' => true,
                'contract' => 'affitto'
            ],
            [
                'price' => 40000,
                'address' => 'Via Pietro da Cemmo 1',
                'post_code' => 20155,
                'city' => 'Milano',
                'square_meters' => 125,
                'rooms' => 4,
                'bathrooms' => 1,
                'floors' => 4,
                'description' => 'lorem ipsum dolor sit',
                'note' => 'lorem ipsum',
                'type' => 'casa',
                'image' => 'https://static.open.online/wp-content/uploads/2020/03/MILANO-TAG.jpg',
                'is_avaiable' => true,
                'contract' => 'vendita'
            ]
        ];

        foreach ($houses as $house) {
            $new_house = new House();
            $new_house->price = $house['price'];
            $new_house->address = $house['address'];
            $new_house->post_code = $house['post_code'];
            $new_house->city = $house['city'];
            $new_house->square_meters = $house['square_meters'];
            $new_house->rooms = $house['rooms'];
            $new_house->bathrooms = $house['bathrooms'];
            $new_house->floors = $house['floors'];
            $new_house->description = $house['description'];
            $new_house->note = $house['note'];
            $new_house->type = $house['type'];
            $new_house->image = $house['image'];
            $new_house->is_avaiable = $house['is_avaiable'];
            $new_house->contract = $house['contract'];
            $new_house->save();

        }
    }
}
