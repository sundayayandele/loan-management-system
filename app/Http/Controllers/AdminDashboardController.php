<?php

namespace App\Http\Controllers;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Charts\DisbursementsChart;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    public function dashboard(DisbursementsChart $chart){

       return view('admindashboard',
       ['chart' => $chart->build()]);
    }
}
