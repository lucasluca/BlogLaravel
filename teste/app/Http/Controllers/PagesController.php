<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        return view('welcome');
    }

    public function getAbout() {
        $nome = "Lucas";
        $sobrenome = "Augusto";

        $completo = $nome . " " . $sobrenome;
        $email = "lucas@nanan.com";
        return view('about')->with("completo", $completo)->with("email", $email);
    }

    public function getContact() {
        return view('contact');
    }
 }