<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Galeri extends Model
{
    use HasFactory,Sluggable;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'foto'
            ]
        ];
    }
    public function image()
    {
        if ($this->foto && file_exists(public_path('images/galeri/' . $this->foto))) {
            return asset('images/galeri/' . $this->foto);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/galeri/' . $this->foto))) {
            return unlink(public_path('images/galeri/' . $this->foto));
        }
    }

}
