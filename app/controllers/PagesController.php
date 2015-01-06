<?php

class PagesController extends BaseController {

    public function show() 
    {
    
        return View::make('hello')->with('name', 'Dave');
    
    }

}

