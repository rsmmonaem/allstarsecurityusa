<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MediaController extends Controller
{
    public function index()
    {
        $mediaItems = Media::all();
        return view('super-admin.medias.index', compact('mediaItems'));
    }

    public function create()
    {
        return view('super-admin.medias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'img_name' => 'required|string',
            'file' => 'required|image|max:8048', // Adjust max size if needed
        ]);

        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('medias', $fileName, 'public');

            // Save to the database
            Media::create([
                'path_src' => $filePath,
                'img_name' => $request->img_name,
            ]);

            return redirect()->route('media.index')->with('success', 'Media created successfully.');
        }

        return back()->withErrors('File upload failed.');
    }

    public function destroy(Media $media)
    {
        // Delete the file from storage
        \Storage::disk('public')->delete($media->path_src);
        $media->delete();
        
        return redirect()->route('media.index')->with('success', 'Media deleted successfully.');
    }
}
