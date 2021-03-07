<?php

namespace App\Controllers;

class Pages extends BaseController
{
    // Hanya Sample template, setelah project selesai bisa dihapus
    public function chartjs()
    {
        return view('pages/charts/chartjs');
    }
    public function forms()
    {
        return view('pages/forms/basic_elements');
    }
    public function icons()
    {
        return view('pages/icons/mdi');
    }
    public function samplesBlankPage()
    {
        return view('pages/samples/blank-page');
    }
    public function samplesError404()
    {
        return view('pages/samples/error-404');
    }
    public function samplesError500()
    {
        return view('pages/samples/error-500');
    }
    public function samplesLogin()
    {
        return view('pages/samples/login');
    }
    public function samplesRegister()
    {
        return view('pages/samples/register');
    }
    public function tables()
    {
        return view('pages/tables/basic-table');
    }
    public function uiFeaturesButton()
    {
        return view('pages/ui-features/buttons');
    }
    public function uiFeaturesTypography()
    {
        return view('pages/ui-features/typography');
    }
}
