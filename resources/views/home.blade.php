@extends('layouts.app')

@section('content')

<div id="page-content-wrapper">

    <div class="row">
        <div class="col-8">
            <p class="nobtmp headerPage">Indicadores</p>
            <p><strong>Secretaría de desarrollo económico y turístico</strong></p>
        </div>
        <div class="col-1">
            <button type="button" class="btn btn-blue-grey btn-block" ><i class="fa fa-th-large" aria-hidden="true"></i></button>
        </div>
        <div class="col-1">
            <button type="button" class="btn btn-blue-grey btn-block" tooltip="Descargar PDF"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
        </div>
        <div class="col-2 text-right">
            <button type="button" class="btn btn-blue-grey btn-block">Ver dependencias <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        </div>
    </div>

    <div class="row align-items-start">
        <div class="col-4" >
             <div class="col-md-12" style="Background-color:#0e457b;">
                    <span class="text-right">Acceptance of Services</span>

                     <div class="btn-group float-right">
                            <span class=" dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Meta planeada</a>
                                <a class="dropdown-item" href="#">Ver históricos</a>
                                <a class="dropdown-item" href="#">Enviar a histórico</a>                                
                                <a class="dropdown-item" href="#">Interacción con fuente de datos</a>
                                <a class="dropdown-item" href="#">Indicadores relacionados</a>
                            </div>
                        </div>    
                </div>
            <div class="panel panel-default chartbtm">                
                <div class="panel-body chartbg">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style="width:100%;">
                        {!! $lineChart->render() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4" >
             <div class="col-md-12" style="Background-color:#0e457b;">
                    <span class="text-right">Expenses by Las Vegas department</span>

                     <div class="btn-group float-right">
                            <span class=" dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Meta planeada</a>
                                <a class="dropdown-item" href="#">Ver históricos</a>
                                <a class="dropdown-item" href="#">Enviar a histórico</a>                                
                                <a class="dropdown-item" href="#">Interacción con fuente de datos</a>
                                <a class="dropdown-item" href="#">Indicadores relacionados</a>
                            </div>
                        </div>    
                </div>
            <div class="panel panel-default chartbtm">                

                <div class="panel-body chartbg">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style="width:100%;">
                        {!! $chartjspie->render() !!}
                    </div>
                </div>
            </div>
        </div>             

        <div class="col-4" >
             
              
                <div class="col-md-12" style="Background-color:#0e457b;">
                    <span class="text-right">Volunteers for Homeless Initiatives</span>

                     <div class="btn-group float-right">
                            <span class=" dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Meta planeada</a>
                                <a class="dropdown-item" href="#">Ver históricos</a>
                                <a class="dropdown-item" href="#">Enviar a histórico</a>                                
                                <a class="dropdown-item" href="#">Interacción con fuente de datos</a>
                                <a class="dropdown-item" href="#">Indicadores relacionados</a>
                            </div>
                        </div>    
                </div>
                
            <div class="panel panel-default chartbtm">                
                <div class="panel-body chartbg">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style="width:100%;">
                        {!! $VerticalBarChart->render() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4" >

             <div class="col-md-12" style="Background-color:#0e457b;">
                    <span class="text-right">Acceptance of Services</span>
                     <div class="btn-group float-right">
                            <span class=" dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Meta planeada</a>
                                <a class="dropdown-item" href="#">Ver históricos</a>
                                <a class="dropdown-item" href="#">Enviar a histórico</a>                                
                                <a class="dropdown-item" href="#">Interacción con fuente de datos</a>
                                <a class="dropdown-item" href="#">Indicadores relacionados</a>
                            </div>
                        </div>    
                </div>
            <div class="panel panel-default chartbtm">                
                <div class="panel-body chartbg">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style="width:100%;">
                        {!! $lineChart2->render() !!}
                    </div>
                </div>
            </div>
        </div>

         <div class="col-4" >
              
                <div class="col-md-12" style="Background-color:#0e457b;">
                    <span class="text-right">Bars</span>

                     <div class="btn-group float-right">
                            <span class=" dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Meta planeada</a>
                                <a class="dropdown-item" href="#">Ver históricos</a>
                                <a class="dropdown-item" href="#">Enviar a histórico</a>                                
                                <a class="dropdown-item" href="#">Interacción con fuente de datos</a>
                                <a class="dropdown-item" href="#">Indicadores relacionados</a>
                            </div>
                        </div>    
                </div>
                
            <div class="panel panel-default chartbtm">
                <!--<div class="panel-heading">Bars</div>-->

                <div class="panel-body chartbg">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style="width:100%;">
                        {!! $myDoughnutChart->render() !!}
                    </div>
                </div>
            </div>
        </div>

         <div class="col-4" >
             
               <div class="col-md-12" style="Background-color:#0e457b;">
                    <span class="text-right">Percent of Staff Attending 5+ Hours of Professional development by Department FY 2018</span>

                     <div class="btn-group float-right">
                            <span class=" dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Meta planeada</a>
                                <a class="dropdown-item" href="#">Ver históricos</a>
                                <a class="dropdown-item" href="#">Enviar a histórico</a>                                
                                <a class="dropdown-item" href="#">Interacción con fuente de datos</a>
                                <a class="dropdown-item" href="#">Indicadores relacionados</a>
                            </div>
                        </div>    
                </div>
            
                <div class="panel panel-default chartbtm">
                    <!--<div class="panel-heading">Percent of Staff Attending 5+ Hours of Professional development by Department FY 2018</div>-->

                    <div class="panel-body chartbg">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div style="width:100%;">
                            {!! $barChart->render() !!}
                        </div>
                    </div>
                </div>
        </div> 
        
    </div>
</div>
@endsection
