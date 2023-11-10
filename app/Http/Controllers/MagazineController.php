<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MagazineController extends Controller
{
    public function Index()
    {
        return view('index');
    }

    public function About()
    {
        return view('about');
    }

    public function ViewMagazine()
    {
        $strFilePath = "storage/magazines/FirstEdition.pdf";
        
        return view('magazine.view',['strFilePath'=>$strFilePath]);
    }

    public function DownloadMagazine()
    {
        // Note: Need to find good solution... Immediate change...
        // For windows \
        // For linux use /
        $strFilePath = public_path("storage\magazines\FirstEdition.pdf");

        return response() -> download($strFilePath);
    }
}
