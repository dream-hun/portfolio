<?php

declare(strict_types=1);

namespace App\Http\Controllers;

final class CategoryController extends Controller
{
    public function __invoke()
    {
        return view('admin.categories.index');
    }
}
