<?php

declare(strict_types=1);

namespace App\Http\Controllers;

final class TagController extends Controller
{
    public function __invoke()
    {
        return view('admin.tags.index');
    }
}
