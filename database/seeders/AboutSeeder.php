<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Request $request)
    {
        //
        $about = new \App\Models\About();
        $about->title = "Membangun Komunitas Hewan";
        $about->subtitle = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quis fugiat a possimus laudantium recusandae veritatis alias magni ut ";
        $about->body = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique eos suscipit voluptates sapiente ex sit dignissimos incidunt impedit, ea iste accusantium iure ab error accusamus ullam itaque blanditiis, debitis excepturi?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti explicabo, laborum ex cupiditate voluptatum possimus voluptate quidem maxime vero? Obcaecati, quibusdam numquam quae expedita id tempore doloribus ratione mollitia dicta.";
        $about->excerpt = Str::limit(strip_tags($request->body), 300, '...');
        $about->save();
    }
}
