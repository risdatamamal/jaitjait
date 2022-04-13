<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Articles;

class DashboardArticleController extends Controller
{
    public function index() 
    {
        $data = [
            'articles' => Articles::all()
        ];

        return view('pages.admin.article.index', $data);
    }
}
