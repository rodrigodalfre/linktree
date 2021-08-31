<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

#Models
use App\Models\Page;
use App\Models\Link;
use App\Models\View;

class PageController extends Controller
{
    public function index($slug) {
        $page = Page::where('slug', $slug)->first();

        if($page){
            //Background
            $bg = '#F3f3f3';

            switch ($page->op_bg_type) {
                case 'image':
                    $bg = "url('".url('media/uploads/').$page->op_bg_value."')";
                    break;
                case 'color':
                    $colors = explode(',', $page->op_bg_value);
                    $bg = 'linear-gradient(45deg,';
                    $bg .= $colors[0].',';
                    $bg .= !empty($colors[1]) ? $colors[1] : $colors[0];
                    $bg .= ')';

                    break;
            }


            //Links
            $links = Link::where('id_page', $page->id)
                ->where('status', 1)
                ->orderBy('order')
            ->get();

            //Register the view
            $view = View::firstOrNew(
                ['id_page' => $page->id, 'view_date' => date('Y-m-d')]
            );
            $view->total++;
            $view->save();
            

            $data = [
                'font_color' => $page->op_font_color,
                'profile_image' => url('/media/uploads/'. $page->op_profile_image),
                'title' => $page->op_title,
                'description' => $page->op_description,
                'fb_pixel' => $page->op_fb_pixel,
                'bg' => $bg,
                'links' => $links
            ];

            return view('page', $data);
        }else {
            return view('404');
        }
    }
}
