<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            (object) [
                'name' => 'Resenha',
                'slug' => Str::slug('Resenha'),
                'description' => 'Pra resenhar junto com a galera',
                'image' => '/assets/images/categories/happy.svg'
            ],
            (object) [
                'name' => 'Festa',
                'slug' => Str::slug('Festa'),
                'description' => 'Leve e descontraída',
                'image' => '/assets/images/categories/tongue.svg'
            ],
            (object) [
                'name' => 'Eu Nunca Leve',
                'slug' => Str::slug('Eu Nunca Leve'),
                'description' => 'Uma brincadeira do Eu Nunca leve',
                'image' => '/assets/images/categories/angel.svg'
            ],
            (object) [
                'name' => 'Eu Nunca Normal',
                'slug' => Str::slug('Eu Nunca Normal'),
                'description' => 'Uma brincadeira do Eu Nunca normal',
                'image' => '/assets/images/categories/alien.svg'
            ],
            (object) [
                'name' => 'Eu Nunca Pesado',
                'slug' => Str::slug('Eu Nunca Pesado'),
                'description' => 'Uma brincadeira do Eu Nunca pesadíssima, cuidado!',
                'image' => '/assets/images/categories/devil.svg'
            ],
            (object) [
                'name' => 'Picante',
                'slug' => Str::slug('Picante'),
                'description' => 'As coisas estão começando a ficar interessante por aqui!',
                'image' => '/assets/images/categories/smart.svg'
            ],
        ];

        foreach ($categorias as $categoria) {
            DB::table('categories')->insert([
                'name' => $categoria->name,
                'slug' => $categoria->slug,
                'description' => $categoria->description,
                'image' => $categoria->image
            ]);
        }
    }
}
