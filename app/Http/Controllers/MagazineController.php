<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Magazine;

class MagazineController extends Controller
{
    public function MagazineView()
    {
        $files = Magazine::orderBy('created_at','desc')->get();

        return view('magazine.view', ["files" => $files]);
    }

    public function UploadView()
    {
        $files = Magazine::orderBy('created_at','desc')->get();

        return view('magazine.upload', ["files" => $files]);
    }

    public function UploadMagazine(Request $request)
    {
        $request->validate([
            'filename' => 'required',
            'file' => 'required',
        ]);
        
        $pdfFileName = $request->filename.".".$request->file->extension();
        $request->file->move(public_path('PdfFiles'),$pdfFileName);

        $files = new Magazine(); 
        $files->Name = $request->filename;
        $files->Path = $pdfFileName;
        $files->save();

        return back()->withSuccess('Files saved successfully');
    }

    public function ViewMagazine($id){
        $pdffile = Magazine::find($id);
        $pdfLink = $pdffile->Path;
        
        return view('magazine.magazineview',['strFilePath' => $pdfLink]);
    }

    public function DownloadMagazine($id)
    {
        $pdffile = Magazine::find($id);
        $pdfpath = $pdffile -> Path;
        $pdfLink = public_path("PdfFiles\\$pdfpath");

        return response() -> download($pdfLink);
    }

    public function DeleteMagazine($id)
    {        
        $pdffile = Magazine::find($id);
        $pdffile->delete();

        return back();
    }
}