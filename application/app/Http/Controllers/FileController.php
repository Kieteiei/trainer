<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function getStorageFile($dir, $path)
	{
		return response()->download(storage_path('app/'. $dir .'/'. $path), null, [], null);
	}
}
