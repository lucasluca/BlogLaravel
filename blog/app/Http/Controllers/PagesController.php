<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller {

    public function getIndex() {

        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();

        $nome = "lucasluca";

        return view('pages.welcome')->with("nomecompleto", $nome)->withPosts($posts);
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function getContact() {
        return view('pages.contact');
    }

}