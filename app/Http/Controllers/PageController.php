<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Display penebaran page
     *
     * @return \Illuminate\View\View
     */
    public function penebaran()
    {
        return view('pages.penebaran');
    }

        /**
     * Display pencucian page
     *
     * @return \Illuminate\View\View
     */
    public function pencucian()
    {
        return view('pages.pencucian');
    }

        /**
     * Display pemindahan page
     *
     * @return \Illuminate\View\View
     */
    public function pemindahan()
    {
        return view('pages.pemindahan');
    }

        /**
     * Display panen page
     *
     * @return \Illuminate\View\View
     */
    public function panen()
    {
        return view('pages.panen');
    }


}
