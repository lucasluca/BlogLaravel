<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {


        $nome = "lucasluca";

        return view('pages.welcome')->with("nomecompleto", $nome);
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function getContact() {
        return view('pages.contact');
    }

}