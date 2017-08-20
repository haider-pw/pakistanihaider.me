<?php

namespace App\Http\Controllers\Admin\System;

use App\Http\Controllers\AdminController;
use App\Models\System\Tool;
use Illuminate\Http\Request;

class ToolsController extends AdminController
{
    public function find(Request $request){
        $term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        $tags = Tool::search($term)->limit(5)->get();

        $formatted_tags = [];

        foreach ($tags as $tag) {
            $formatted_tags[] = ['id' => $tag->id, 'text' => $tag->label];
        }

        return \Response::json($formatted_tags);
    }
}
