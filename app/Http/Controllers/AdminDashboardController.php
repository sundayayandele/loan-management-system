<?php

namespace App\Http\Controllers;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Charts\DisbursementsChart;
use App\Charts\OutStandingCollectionsChart;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    public function dashboard(DisbursementsChart $chart,OutStandingCollectionsChart $chart_collections){

       return view('admindashboard',[
       'chart' => $chart->build(),
       'chart_collections' => $chart_collections->build(),
    ]);
    }
}
