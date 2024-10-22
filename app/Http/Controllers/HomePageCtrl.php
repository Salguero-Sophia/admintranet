<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomePageCtrl extends Controller
{
    public function Home()
    {
        $bannerImages     = HomePage::where('section', 'banner')->orderBy('order', 'asc')->get();
        $categoriesImages = HomePage::where('section', 'categories')->orderBy('order', 'asc')->get();
        $reserveImage     = HomePage::where('section', 'reserve')->orderBy('order', 'asc')->first();
        $favoritesImages  = HomePage::where('section', 'favorites')->orderBy('order', 'asc')->get();
    
        foreach ($bannerImages as $bannerImage) {
            $imageUrl = Storage::disk('s3')->temporaryUrl($bannerImage->image_path, now()->addMinutes(5));
            $bannerImage->image_path = $imageUrl;
        }

        foreach ($categoriesImages as $categoryImage) {
            $imageUrl = Storage::disk('s3')->temporaryUrl($categoryImage->image_path, now()->addMinutes(5));
            $categoryImage->image_path = $imageUrl;
        }
    
        return view('frontend.home.home', [
            'bannerImages'     => $bannerImages,
            'categoriesImages' => $categoriesImages,
            'reserveImage'     => $reserveImage,
            'favoritesImages'  => $favoritesImages,
        ]);
    }
    

    public function HomePageEditor()
    {
        $bannerImages     = HomePage::where('section', 'banner')->orderBy('order', 'asc')->get();

        $categoriesImages = HomePage::where('section', 'categories')->orderBy('order', 'asc')->get();

        $reserveImage     = HomePage::where('section', 'reserve')->orderBy('order', 'asc')->first();

        $favoritesImages  = HomePage::where('section', 'favorites')->orderBy('order', 'asc')->limit(6)->get();

        return view('backend.HomePage.homePageEditor',
            [
                'bannerImages'     => $bannerImages,
                'categoriesImages' => $categoriesImages,
                'reserveImage'     => $reserveImage,
                'favoritesImages'  => $favoritesImages,
            ]
        );
    }

    public function ChangeImage(Request $request)
    {
        $image = HomePage::find($request->imageId);

        $imagePath = $image->image_path;

        if ($request->hasFile('attachment_info')) {

            Storage::disk('s3')->delete($image->image_path);

            $newImage = $request->file('attachment_info');

            $imagePath = 'intranet/banners/' . time() . '_' . $newImage->getClientOriginalName();

            Storage::disk('s3')->put($imagePath, file_get_contents($newImage));
        }

        $image->name       = $request->name ?? $image->name;
        $image->image_path = $imagePath;
        $image->href       = $request->href ?? $image->href;
        $image->updated_by = Auth::user()->name;
        $image->order      = $request->order;
        $image->save();

        return redirect()->route('homePageEditor')->with('success', 'Imagen modificada correctamente!');
    }
}
