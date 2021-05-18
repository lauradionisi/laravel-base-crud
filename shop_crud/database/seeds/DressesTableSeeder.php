<?php

use Illuminate\Database\Seeder;
use App\Dress;

class DressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dresses = [
            [
                'name' => 'Giacca',
                'color' => 'Viola',
                'size' => 'M',
                'fabric' => 'Cotton',
                'price' => '12',
                'season' => 'primaverile'
            ],
            [
                'name' => 'Gonna',
                'color' => 'Rossa',
                'size' => 'M',
                'fabric' => 'Silk',
                'price' => '12',
                'season' => 'estiva'
            ],
            [
                'name' => 'Jeans',
                'color' => 'Blu',
                'size' => 'M',
                'fabric' => 'Denim',
                'price' => '13',
                'season' => 'estiva'
            ]
    ];

    foreach ($dresses as $dress) {
        $newDress = new Dress();

        $newDress->name = $dress['name'];
        $newDress->color = $dress['color'];
        $newDress->size = $dress['size'];
        $newDress->fabric = $dress['fabric'];
        $newDress->price = $dress['price'];
        $newDress->season = $dress['season'];

        $newDress->save();
    }
    }
}
