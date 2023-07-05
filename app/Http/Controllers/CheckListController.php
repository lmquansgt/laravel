<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckListController extends Controller
{
    public function update(Request $req)
    {
        dd($req);
        $id = $req->data->id;
        $list = $req->session()->get('checkList');
        if (in_array($id, $list)) {
            unset($list[$id]);
        } else {
            $list[$id] = $id;
        }
        return $req->session()->put('checkList', $list);
    }
}
