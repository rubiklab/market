<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/{uuid}', function ($uuid) {
    $item = \App\Models\Item::firstWhere(['uuid' => $uuid]);

    return view('item', compact('item'));
})->name('item.view');

/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('dashboard');
});*/

Route::get('/media/{uuid}/{conversion?}', function ($uuid, $conversion = '') {
    $media = \Spatie\MediaLibrary\MediaCollections\Models\Media::where('uuid', $uuid)->first();
    if (!$media) {
        abort(404);
    }
    $image = Storage::disk('s3')->get($media->getPath($conversion));
    return response($image)->header('Content-Type', $media->mime_type);
})->name('media.s3');
