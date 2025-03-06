<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\article;

class ArticleMake extends Controller
{
    function createArticle(Request $request) {
        $user = article::create([
            "title" => "wealthy",
            "content" => "I am a wealthy person"]);
            return $user;
    }
    function getArticle() {
        $data = article::all();
        return $data;
    }
    function getArticleById($id) {
        $data = article::find($id);
        return $data;
    }
    function deleteArticle($id) {
        $data = article::find($id);
        $data->delete();
        return $data;
    }
    function updateArticle($id, Request $request) {
        $data = article::find($id);
        $data->title = $request->title;
        $data->content = $request->content;
        $data->save();
        return $data;
    }
}

// find() method is used to find the data in the database like select * from table where id = $id
// save() method is used to save the data in the database like insert into table (column1, column2) values (value1, value2)