<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Motori', 'Animali', 'Elettronica', 'Libri', 'Videogiochi', 'Sport', 'Immobili', 'Telefonia', 'Arredamento'];

        foreach($categories as $category){
            DB::table('categories')->insert(
                [
                    'name'=>$category,
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ]
            );
        }
    }

}
