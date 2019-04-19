<?php

use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'car', 'icon' => 'fa fa-cutlery'],
            ['id' => 2, 'name' => 'eating items', 'icon' => 'fa fa-scissors'],
            ['id' => 3, 'name' => 'it products', 'icon' => 'fa fa-laptop'],
            ['id' => 4, 'name' => ' repair products', 'icon' => 'fa fa-wrench'],
            ['id' => 5, 'name' => 'Shopping center', 'icon' => 'fa fa-shopping-bag'],
            ['id' => 6, 'name' => 'books', 'icon' => 'fa fa-glass'],
            ['id' => 7, 'name' => 'children items', 'icon' => 'fa fa-briefcase'],
            ['id' => 8, 'name' => 'Accommodation', 'icon' => 'fa fa-bed'],
        ];

        foreach ($items as $item) {
            \App\Category::create($item);
        }
    }
}