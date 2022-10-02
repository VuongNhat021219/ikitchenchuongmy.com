<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\URL;

class CreateSiteMap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $sitemap = App::make('sitemap');
        $sitemap->add(URL::to('/'),Carbon::now(),'1.0','daily');
        // $sitemap = \App::make('sitemap');
        // // add home pages mặc định
        // $sitemap->add(URL::to('/'), Carbon::now(), '1.0', 'daily');
        
        // add bài viết
        $posts = DB::table('blog_models')
                ->orderBy('created_at', 'desc')
                ->get();
        foreach ($posts as $post) {
                $sitemap->add(route('post.detail', [$post->slug]), $post->created_at, '0.6', 'daily');
        }
         // add bài viết
         $product = DB::table('product_models')
         ->orderBy('created_at', 'desc')
         ->get();
            foreach ($product as $pro) {
                    $sitemap->add(route('post.detail', [$pro->slug]), $post->created_at, '0.6', 'daily');
            }
        // lưu file và phân quyền
        $sitemap->store('xml', 'sitemap');
        if (FacadesFile::exists(public_path() . '/sitemap.xml')) {
                chmod(public_path() . '/sitemap.xml', 0777);
        }
    }
}
