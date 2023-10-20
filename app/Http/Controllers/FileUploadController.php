<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
 
class FileUploadController extends Controller
{
// app/Http/Controllers/FileController.php

public function upload(Request $request)
{
    dd($request);

    // Validate the file inputs
    $request->validate([
        'files.*' => 'required|file|mimes:jpg,png,pdf|max:2048', // Customize validation rules as needed
    ]);

    $uploadedFiles = [];

    // Handle the file uploads
    if ($request->hasFile('files')) {
        foreach ($request->file('files') as $file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            // You can save file details to the database here if needed
            $uploadedFiles[] = $fileName;
        }
    }

    // Perform any other actions you require
    return redirect()->back()->with('success', count($uploadedFiles) . ' file(s) uploaded successfully.');
}

}
