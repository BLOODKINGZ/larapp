<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Welcome to Laravel Blood!";
        return view("pages.index")->with("index_title", $title);
    }

    public function about()
    {
        $title = "About Us";
        return view("pages.about")->with("about_title", $title);
    }

    public function services()
    {
        $data = array(
            "title" => "Services we provide",
            "info" => "We are a good software developer company",
            "services" => ["Java", "PHP", "Android", "Nothing"]
        );
        return view("pages.services")->with($data);
    }

}
