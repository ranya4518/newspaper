<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use faker\Factory as faker;

class ArticleController extends Controller
{
    public function index(){
    $faker=faker::create();
    $articels=[];
    for($i=0;$i<15;$i++){
    $articels[]=[
    'id'=>$i+1,
    'title'=>$faker->sentence,
    'body'=>$faker->paragraph,
    'created_at'=>$faker->date,
    'updated_at'=>$faker->date
    ];
    }
    return response()->json($articels);
    }
    public function show($id){
    $faker=faker::create();
    $articels=[];
    for($i=0;$i<15;$i++){
    $articels[]=[
    'id'=>$i+1,
    'title'=>$faker->sentence,
    'body'=>$faker->paragraph,
    'created_at'=>$faker->date,
    'updated_at'=>$faker->date
    ];
    }
        return response()->json($articels[$id-1]);
    }
}
