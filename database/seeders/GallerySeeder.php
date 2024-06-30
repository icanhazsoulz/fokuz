<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $directoryIterator = new \RecursiveDirectoryIterator(public_path('assets/heros'));
        $directoryIterator->setFlags(\FilesystemIterator::SKIP_DOTS);

        foreach (new \RecursiveIteratorIterator($directoryIterator, \RecursiveIteratorIterator::SELF_FIRST) as $dir) {
            if ($dir->isDir()) { // each directory inside Heros
                $fileIterator = new \DirectoryIterator($dir->getRealPath());
                if (iterator_count($fileIterator)) {
                    $slug = $dir->getFilename();

                    $gallery = Gallery::create([
                        'slug' => $slug,
                        'category' => 'slider',
                        'status' => 1,
                    ]);

                    foreach ($fileIterator as $file) {
                        if ($file->isFile()) $gallery->addMedia($file->getRealPath())->preservingOriginal()->toMediaCollection('default');
                    }

                    $page = Page::where('slug', $slug)->first();
                    $page->gallery()->associate($gallery);
                    $page->save();

                    $gallery->title = $page->title;
                    $gallery->save();
                }

            }
        }
    }
}
