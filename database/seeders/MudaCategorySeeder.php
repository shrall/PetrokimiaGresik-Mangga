<?php

namespace Database\Seeders;

use App\Models\MudaCategory;
use Illuminate\Database\Seeder;

class MudaCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new MudaCategory();
        $category->name = 'On-Farm';
        $category->type_id = 1;
        $category->save();

        $category = new MudaCategory();
        $category->name = 'Off-Farm';
        $category->type_id = 1;
        $category->save();

        $category = new MudaCategory();
        $category->name = 'Content Creator, Cinematography, Photography';
        $category->type_id = 2;
        $category->save();

        $category = new MudaCategory();
        $category->name = 'Fashion';
        $category->type_id = 2;
        $category->save();

        $category = new MudaCategory();
        $category->name = 'Food and Bevarages';
        $category->type_id = 2;
        $category->save();

        $category = new MudaCategory();
        $category->name = 'Furniture';
        $category->type_id = 2;
        $category->save();

        $category = new MudaCategory();
        $category->name = 'Home Appliances';
        $category->type_id = 2;
        $category->save();

        $category = new MudaCategory();
        $category->name = 'Otomotive';
        $category->type_id = 2;
        $category->save();

        $category = new MudaCategory();
        $category->name = 'Others';
        $category->type_id = 2;
        $category->save();
    }
}
