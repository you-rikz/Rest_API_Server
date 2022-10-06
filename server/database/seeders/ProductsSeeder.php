<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'title'=> 'Microwave',
            'description'=> 'heat food using microwaves, a form of electromagnetic radiation similar to radio waves. Microwaves have three characteristics that allow them to be used in cooking: they are reflected by metal; they pass through glass, paper, plastic, and similar materials; and they are absorbed by foods.',
            'currency' => 'PHP',
            'price' => 4999,
            'brand' => 'Hanabishi',
            'category' => 'electronics',
            'image' => 'https://myhanabishi.com/wp-content/uploads/2020/03/HMO-20MBD.jpg'
        ],[

            'title'=> 'The Lord of the Rings',
            'description'=> 'The Lord of the Rings is an epic high-fantasy novel by English author and scholar J. R. R. Tolkien. Set in Middle-earth, intended to be Earth at some time in the distant past, the story began as a sequel to Tolkiens 1937 childrens book The Hobbit, but eventually developed into a much larger work.',
            'currency' => 'PHP',
            'price' => 4410,
            'brand' => 'Tolkien',
            'category' => 'book',
            'image' => 'https://static.wikia.nocookie.net/lotr/images/1/11/The_Lord_of_the_Rings_First_Copies.jpg/revision/latest?cb=20130619012726'
        ],[

            'title'=> 'DriFit',
            'description'=> 'high-performance, microfiber, polyester fabric that moves sweat away from the body and to the fabric surface, where it evaporates.',
            'currency' => 'PHP',
            'price' => 1895,
            'brand' => 'Spike',
            'category' => 'apparel',
            'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/873eaab7-cfec-4b70-b6af-19880a563637/england-strike-dri-fit-short-sleeve-football-top-kvxXF5.png'
            ]

        ]);
}
}
