<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticlesResource;
use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function getArticles()
    {
        $data = ArticlesResource::collection(Articles::all());
        return response()->json($data);
    }
}
