<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Tweet;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Tweet $tweet)
    {
        $like = new Like(); // Aquí estás creando una nueva instancia de la clase Like, que representa un nuevo “like” en tu base de datos.
        $tweet->like()->save($like);
        /* 
        En cuanto a por qué se utiliza new Like() en lugar de create(), ambas son formas válidas de crear una nueva 
        instancia de un modelo. Sin embargo, cuando usas save() para guardar la relación, necesitas pasar una 
        instancia del modelo, no los atributos del modelo. Por eso se utiliza new Like() en lugar de create().
        */

        return redirect()->back();
    }
}
