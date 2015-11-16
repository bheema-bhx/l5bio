@extends('frontend.layouts.master')



@section('content')
    
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        

                                    
<div class="widget">
    <div class="widgetTitle">
        <h3>Browse By Category </h3>
        <span class="alignRight">+ <a href="http://localhost.com/category/all" style="color:white;">View all</a></span>
    </div>
    <!-- /.widgetTitle -->
    <div class="widgetContent" style="padding: 20px 10px">

                
            <div class="col-sm-4 col-xs-6">
                <div class="category-image">
                    <i class="fa fa-pagelines fa-2x pull-left fa-border fa-yellow"></i>
                    <h2 id="text" class="vcenter"><a href="http://localhost.com/demo/v4/usk-wa/agriculture-forestry-fishing">Jobs</a></h2>
                </div>
            </div>
                
            <div class="col-sm-4 col-xs-6">
                <div class="category-image">
                    <i class="fa fa-road fa-2x pull-left fa-border fa-yellow"></i>
                    <h2 id="text" class="vcenter"><a href="http://localhost.com/demo/v4/usk-wa/construction">For Sale</a></h2>
                </div>
            </div>
                
            <div class="col-sm-4 col-xs-6">
                <div class="category-image">
                    <i class="fa fa-money fa-2x pull-left fa-border fa-yellow"></i>
                    <h2 id="text" class="vcenter"><a href="http://localhost.com/demo/v4/usk-wa/finance-insurance-retail-estate"> For Rent</a></h2>
                </div>
            </div>
                
            <div class="col-sm-4 col-xs-6">
                <div class="category-image">
                    <i class="fa fa-female fa-2x pull-left fa-border fa-yellow"></i>
                    <h2 id="text" class="vcenter"><a href="http://localhost.com/demo/v4/usk-wa/life-style">Exams</a></h2>
                </div>
            </div>
                
            <div class="col-sm-4 col-xs-6">
                <div class="category-image">
                    <i class="fa fa-futbol-o fa-2x pull-left fa-border fa-yellow"></i>
                    <h2 id="text" class="vcenter"><a href="http://localhost.com/demo/v4/usk-wa/manufacturing"> Movies</a></h2>
                </div>
            </div>
                
            <div class="col-sm-4 col-xs-6">
                <div class="category-image">
                    <i class="fa fa-puzzle-piece fa-2x pull-left fa-border fa-yellow"></i>
                    <h2 id="text" class="vcenter"><a href="http://localhost.com/demo/v4/usk-wa/retail-trade"> Events</a></h2>
                </div>
            </div>
                
            <div class="col-sm-4 col-xs-6">
                <div class="category-image">
                    <i class="fa fa-paper-plane fa-2x pull-left fa-border fa-yellow"></i>
                    <h2 id="text" class="vcenter"><a href="http://localhost.com/demo/v4/usk-wa/services"> Services</a></h2>
                </div>
            </div>
                
            <div class="col-sm-4 col-xs-6">
                <div class="category-image">
                    <i class="fa fa-truck fa-2x pull-left fa-border fa-yellow"></i>
                    <h2 id="text" class="vcenter"><a href="http://localhost.com/demo/v4/usk-wa/transportation-communication-electric-gas-sanitary-services"> Schools</a></h2>
                </div>
            </div>
                
            <div class="col-sm-4 col-xs-6">
                <div class="category-image">
                    <i class="fa fa-rocket fa-2x pull-left fa-border fa-yellow"></i>
                    <h2 id="text" class="vcenter"><a href="http://localhost.com/demo/v4/usk-wa/wholesale-trade"> Colleges</a></h2>
                </div>
            </div>
        

    </div>
    <!-- /.widgetContent -->
</div>
<!-- /.widget -->



    <div class="resp-tabs-container">
                                        <h2 aria-controls="tab_item-0" class="resp-accordion resp-tab-active" role="tab">
                                            <span class="resp-arrow"></span>Events Listings
                                        </h2>

                                        @foreach ($events as $event)
                                        <div style="display:block" class="resp-tab-content  resp-tab-content-active resp-accordion-closed" aria-labelledby="tab_item-0">
                                            
                                            
                                            <div class="row1 clearfix">
                                                <div class="col-md-3 col-lg-3 col-xs-4">
                                                    <a href="http://localhost.com/demo/v4/seattle-wa/michael-r-yantis-assoc/engineering-accounting-research-management-related-svcs/8">
                                                        <img class="img-responsive" src="yellow/l9.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-xs-8">
                                                    <h1>
                                                        <a href="http://localhost.com/demo/v4/seattle-wa/michael-r-yantis-assoc/engineering-accounting-research-management-related-svcs/8">{{ $event->title }} </a>
                                                    </h1>
                                                <h4 class="thin"> {{ $event->entry_type }} </h4>
                                                
                                                <p class="thin">
                                                    <a class="" href="http://localhost.com/demo/v4/seattle-wa"> {{ $event->place }}</a>                  <!-- 
                                                    <a
                                                    href="http://localhost.com/demo/v4/seattle-wa">Seattle,
                                                    </a>
                                                    <a
                                                    href="http://localhost.com/demo/v4/washington-wa">Washington,
                                                    </a>
                                                    -->
                                                </p>
                                                <p class="thin">
                                                    <a class="text-warning" href="http://localhost.com/demo/v4/usk-wa/engineering-accounting-research-management-related-svcs">Engineering, Accounting, Research, Management &amp; Related Svcs </a>, <a class="text-warning" href="http://localhost.com/demo/v4/usk-wa/services"> Services </a>                  <!-- 
                                                    <a
                                                    href="http://localhost.com/demo/v4/usk-wa/engineering-accounting-research-management-related-svcs"
                                                    class="text-warning">Engineering, Accounting, Research, Management & Related Svcs,</a>
                                                    <a
                                                    href="http://localhost.com/demo/v4/usk-wa/services"
                                                    class="text-warning"> Services,</a>
                                                    -->
                                                </p>
                                                <p class="thin small">{{ $event->description }}                  </p>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xs-12">
                                                <h3 class="text-right">
                                                {{ $event->phone }}                 </h3>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach

                                </div>
                            </div>
    </div>
@endsection