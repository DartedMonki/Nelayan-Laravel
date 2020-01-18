<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Display icons page
     *
     * @return \Illuminate\View\View
     */
    public function icons()
    {
        return view('pages.icons');
    }

    /**
     * Display maps page
     *
     * @return \Illuminate\View\View
     */
    public function maps()
    {
        return view('pages.maps');
    }

    /**
     * Display tables page
     *
     * @return \Illuminate\View\View
     */
    public function tables()
    {
        return view('pages.tables');
    }

    /**
     * Display notifications page
     *
     * @return \Illuminate\View\View
     */
    public function notifications()
    {
        return view('pages.notifications');
    }

    /**
     * Display rtl page
     *
     * @return \Illuminate\View\View
     */
    public function rtl()
    {
        return view('pages.rtl');
    }

    /**
     * Display typography page
     *
     * @return \Illuminate\View\View
     */
    public function typography()
    {
        return view('pages.typography');
    }

    /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function upgrade()
    {
        return view('pages.upgrade');
    }

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
