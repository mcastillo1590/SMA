<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
              
      $dataGraphic=array();           

      $lineChart = $this->loadLineChart('https://opendata.lasvegasnevada.gov/api/views/i8yc-5tvg/rows.json?accessType=DOWNLOAD');
       
      $barChart = $this->loadBarChart('https://opendata.lasvegasnevada.gov/api/views/yhtr-ufth/rows.json?accessType=DOWNLOAD');
        
      $chartjspie = $this->loadPieChart('https://opendata.lasvegasnevada.gov/api/views/xiym-swpf/rows.json?accessType=DOWNLOAD');

      $VerticalBarChart = $this->loadVerticalBarChart('https://opendata.lasvegasnevada.gov/api/views/8w2c-whxz/rows.json?accessType=DOWNLOAD');

      $lineChart2 = $this->loadLineChart2('https://opendata.lasvegasnevada.gov/api/views/tgvr-im53/rows.json?accessType=DOWNLOAD');
      
    
      $myDoughnutChart= $this->loadmyDoughnutChart('noURL');

        
        return view('home', compact(['lineChart','barChart','chartjspie','myDoughnutChart','VerticalBarChart','lineChart2']));

    }


    public function getDataWS($url,$poslabel,$posvalue)
    {
        $labels=array();
        $data_array=array();
        $colors=array();
        $rUrl = $url;
        $data = json_decode(file_get_contents($rUrl), true);
        $arr_return=array();
        foreach ($data['data'] as &$valor) 
        {          
           array_push($labels,$valor[$poslabel]);
           array_push($data_array,$valor[$posvalue]);
           array_push($colors,'#'.substr(md5(rand()), 0, 6));            
        }  
        array_push($arr_return,$labels);
        array_push($arr_return,$data_array);
        array_push($arr_return,$colors);    

        Log::info('labels'.print_r($labels, true));
        Log::info('data'.print_r($data_array, true));
        return($arr_return);
    }

    public function getDataBidWS($url,$poslabel,$posvalue1,$posvalue2)
    {
        $labels=array();
        $data_array1=array();
        $data_array2=array();
        $colors=array();
        $rUrl = $url;
        $data = json_decode(file_get_contents($rUrl), true);
        $arr_return=array();
        foreach ($data['data'] as &$valor) 
        {          
           array_push($labels,$valor[$poslabel]);
           array_push($data_array1,$valor[$posvalue1]);
           array_push($data_array2,$valor[$posvalue2]);
           array_push($colors,'#'.substr(md5(rand()), 0, 6));            
        }  
        array_push($arr_return,$labels);
        array_push($arr_return,$data_array1);
        array_push($arr_return,$data_array2);
        array_push($arr_return,$colors);    

        Log::info('labels'.print_r($labels, true));
        Log::info('data1'.print_r($data_array1, true));
        Log::info('data2'.print_r($data_array2, true));
        return($arr_return);
    }

    public function loadPieChart($url){
         $dataGraphic = $this->getDataWS($url,8,9);
         $chartjspie = app()->chartjs
        ->name('pieChartTest')
        ->type('pie')
        ->size(['width' => 400, 'height' => 200])        
        ->labels( $dataGraphic[0] )
        ->datasets([
            [                
                'backgroundColor' => $dataGraphic[2],                          
                'data' => $dataGraphic[1] 
            ]
        ])
        ->options([
            'legend' => [
            'display' => false,
           ]
        ]);

        return($chartjspie);
    }

    public function loadmyDoughnutChart($url)
    {
         $myDoughnutChart = app()-> chartjs
            ->name('doughnutchart')
            ->type('doughnut')
            ->labels(['dato1','dato2','dato3','dato4'])
            ->datasets([
                [
                    'backgroundColor' => ['#AF6384', '#36D2EB','#FF6304', '#36A5EB'],
                    'data'=>[10,56,20,15]
                ]
            ])                    
        ->options([]);

        return($myDoughnutChart);
    }

    public function loadLineChart($url)
    {
        $dataGraphic = $this->getDataWS($url,8,14);
        
         $lineChart = app()->chartjs
        ->name('lineChartTest')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels( $dataGraphic[0] )
       ->datasets([
            [     
                "label" => "Total Contact Accepted Services",           
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",                    
                'data' => $dataGraphic[1] 
            ]
        ])
        ->options([]);

        return($lineChart);
    }

     public function loadLineChart2($url)
    {
        $dataGraphic = $this->getDataBidWS($url,12,10,9);
        
         $lineChart2 = app()->chartjs
        ->name('lineChartbid')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels( $dataGraphic[0] )
        ->datasets([
           [
                "label" => "Overall Engagement",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => $dataGraphic[1],
            ],
            [
                "label" => "Accomplishments are frequently recognized by co-workers/peers",
                'backgroundColor' => "rgba(255, 185, 154, 0.31)",
                'borderColor' => "rgba(255, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(255, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(255, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => $dataGraphic[2],
            ]
        ])
        ->options([]);

        return($lineChart2);
    }
    
    public function loadBarChart($url)
    {
         $dataGraphic = $this->getDataWS($url,13,12);
         $barChart = app()->chartjs
         ->name('barChartTest')
         ->type('horizontalBar')
         ->size(['width' => 400, 'height' => 600])
         ->labels( $dataGraphic[0] )
         ->datasets([
             [
                 "label" => "Attending",
                 'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                 'data'=> $dataGraphic[1]
             ]
         ])
         ->options([]);

         return($barChart);

    }

     public function loadVerticalBarChart($url)
    {
         $dataGraphic = $this->getDataWS($url,8,9);
         $verticalBarChart = app()->chartjs
         ->name('verticalBarChart')
         ->type('bar')
         ->size(['width' => 400, 'height' => 200])
         ->labels( $dataGraphic[0] )
         ->datasets([
             [
                 "label" => "Volunteers",
                'backgroundColor' => 'rgba(100, 210, 152, 0.2)',
                 'data'=> $dataGraphic[1]
             ]
         ])
         ->options([]);

         return($verticalBarChart);

    }
    
}
