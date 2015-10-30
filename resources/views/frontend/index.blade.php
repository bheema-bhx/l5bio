@extends('frontend.layouts.master')

@section('content')



    <div class="row">
        <div class="col-md-10 col-md-offset-1">
    
            <!--  <script type="text/javascript" src="{{ URL::asset('yellow/modernizr-2.js') }}"></script> -->
              
            <!-- the sections with triggers -->
            <section id="slide-1" class="ha-waypoint">
                <div class="bcg11">
                    <div class="hsContainer">
                        <div class="hsContent">
                            <div class="innerpageContent">
                                <div class="newpge row">

                                    <div class="col-lg-12">

                                        <style>
                                            .widgetr{
                                            background-color: burlywood;
                                            height: 30px;
                                            }
                                            ul, li {list-style: none}
                                            .news-item{margin-bottom:20px;}
                                            .news-item h4{margin-bottom:10px;}
                                            img {
                                                width: 100%;
                                            }
                                        </style>

                                        <div style="display: block; width: 100%; margin: 0px;" class="respotbs finder">
                                            <ul class="resp-tabs-list">
                                                <li role="tab" aria-controls="tab_item-0" class="resp-tab-item resp-tab-active">Services</li>
                                                <li role="tab" aria-controls="tab_item-1" class="resp-tab-item">Jobs</li>
                                                <li role="tab" aria-controls="tab_item-2" class="resp-tab-item">For Sale</li>
                                                <li role="tab" aria-controls="tab_item-3" class="resp-tab-item">For Rent</li>
                                                <li role="tab" aria-controls="tab_item-4" class="resp-tab-item">Exam</li>
                                                <!--<li>Buy Lead</li>-->
                                            </ul>
                                            <div class="resp-tabs-container">
                                                <h2 aria-controls="tab_item-0" class="resp-accordion resp-tab-active" role="tab"><span class="resp-arrow"></span>Services</h2>
                                                <div style="display:block" aria-labelledby="tab_item-0" class="resp-tab-content resp-tab-content-active" id="services">
                                                    <form name="product" method="post" action="http://localhost.com/demo/v4/search/services/">
                                                        <div class="col-sm-6">
                                                            <h1>What?</h1>
                                                            <p>e.g. Web Development </p>
                                                            <div class="select2-wrapper ">
                                                                <div id="s2id_selectbox-o" class="select2-container search-field f-left ui-autocomplete-input select2"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span id="select2-chosen-1" class="select2-chosen">Choose An Option..</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen"></label><input id="s2id_autogen1" aria-labelledby="select2-chosen-1" class="select2-focusser select2-offscreen" aria-haspopup="true" role="button" type="text"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen1_search" class="select2-offscreen"></label>       <input placeholder="" id="s2id_autogen1_search" aria-owns="select2-results-1" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" type="text">   </div>   <ul id="select2-results-1" class="select2-results" role="listbox">   </ul></div></div><input title="" tabindex="-1" name="term" id="selectbox-o" class="search-field f-left ui-autocomplete-input select2 select2-offscreen" data-placeholder="Choose An Option.." type="hidden">
                                                        </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h1>Where?</h1>
                                                            <p>
                                                                                         Usk (WA) <a href="#" id="clear_location" class="badge">Clear</a>                    </p>
                                                            <div id="s2id_selectbox-location" class="select2-container search-field f-right ui-autocomplete-input select2"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span id="select2-chosen-2" class="select2-chosen">Usk (WA)</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input id="s2id_autogen2" aria-labelledby="select2-chosen-2" class="select2-focusser select2-offscreen" aria-haspopup="true" role="button" type="text"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input placeholder="" id="s2id_autogen2_search" aria-owns="select2-results-2" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" type="text">   </div>   <ul id="select2-results-2" class="select2-results" role="listbox">   </ul></div></div><input title="" tabindex="-1" name="location" id="selectbox-location" class="search-field f-right ui-autocomplete-input select2 select2-offscreen" data-placeholder="Usk (WA)" type="hidden">
                                                            <input name="loc" value="usk-wa" type="hidden">
                                                            <button type="submit" class="btn btn-inverse submitbtn" id="btn_prod"><i class="fa fa-search fa-lg"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>

                                                <h2 aria-controls="tab_item-1" class="resp-accordion" role="tab"><span class="resp-arrow"></span>Jobs</h2>
                                                <div aria-labelledby="tab_item-1" class="resp-tab-content" id="business">

                                                    <form name="business" method="post" action="http://localhost.com/demo/v4/search/business/">
                                                        <div class="col-sm-6">
                                                            <h1>Job Title</h1>
                                                            <p>e.g. Accountent, Web Developer </p>
                                                            <div class="select2-wrapper ">
                                                                <div id="s2id_selectbox-business" class="select2-container search-field f-left ui-autocomplete-input select2"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span id="select2-chosen-4" class="select2-chosen">Choose An Option.. </span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen4" class="select2-offscreen"></label><input id="s2id_autogen4" aria-labelledby="select2-chosen-4" class="select2-focusser select2-offscreen" aria-haspopup="true" role="button" type="text"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen4_search" class="select2-offscreen"></label>       <input placeholder="" id="s2id_autogen4_search" aria-owns="select2-results-4" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" type="text">   </div>   <ul id="select2-results-4" class="select2-results" role="listbox">   </ul></div></div><input title="" tabindex="-1" name="selectbox-business" id="selectbox-business" class="search-field f-left ui-autocomplete-input select2 select2-offscreen" data-placeholder="Choose An Option.. " type="hidden">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h1>Where?</h1>

                                                            <p>
                                                                    E.g. Kakinada <a href="#" id="clear_location" class="badge">Clear</a>                    </p>

                                                            <div id="s2id_selectbox-location2" class="select2-container search-field f-right ui-autocomplete-input"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span id="select2-chosen-3" class="select2-chosen">Usk (WA)</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen3" class="select2-offscreen"></label><input id="s2id_autogen3" aria-labelledby="select2-chosen-3" class="select2-focusser select2-offscreen" aria-haspopup="true" role="button" type="text"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen3_search" class="select2-offscreen"></label>       <input placeholder="" id="s2id_autogen3_search" aria-owns="select2-results-3" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" type="text">   </div>   <ul id="select2-results-3" class="select2-results" role="listbox">   </ul></div></div><input title="" tabindex="-1" name="selectbox-location2" id="selectbox-location2" class="search-field f-right ui-autocomplete-input select2-offscreen" data-placeholder="Usk (WA)" type="hidden">
                                                            <input name="loc" value="usk-wa" type="hidden">
                                                            <button type="submit" class="btn btn-inverse submitbtn" id="btn_buisn"><i class="fa fa-search fa-lg"></i>
                                                            </button>
                                                        </div>
                                                    </form>


                                                </div>

                                                <h2 aria-controls="tab_item-2" class="resp-accordion" role="tab"><span class="resp-arrow"></span>Jobs</h2>
                                                <div aria-labelledby="tab_item-2" class="resp-tab-content" id="products">
                                                    <form name="products" method="post" action="http://localhost.com/demo/v4/search/products/">
                                                       
                                                                    <div class="col-sm-6">
                                                                        <h1>Products?</h1>
                                                                        <p>e.g. i.e MatrixInfoline</p>
                                                                            <div class="select2-wrapper ">
                                                                                <div id="s2id_selectbox-3" class="select2-container search-field f-right ui-autocomplete-input">
                                                                                    <a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   
                                                                                        <span id="select2-chosen-5" class="select2-chosen">Choose An Option..</span><abbr class="select2-search-choice-close"></abbr>  
                                                                                         <span class="select2-arrow" role="presentation"><b role="presentation"></b></span>
                                                                                    </a><label for="s2id_autogen5" class="select2-offscreen"></label>
                                                                                    <input id="s2id_autogen5" aria-labelledby="select2-chosen-5" class="select2-focusser select2-offscreen" aria-haspopup="true" role="button" type="text">
                                                                                    <div class="select2-drop select2-display-none select2-with-searchbox"> 
                                                                                        <div class="select2-search">
                                                                                            <label for="s2id_autogen5_search" class="select2-offscreen"></label>
                                                                                            <input placeholder="" id="s2id_autogen5_search" aria-owns="select2-results-5"
                                                                                            autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"
                                                                                            class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" type="text">  
                                                                                        </div>  
                                                                                        <ul id="select2-results-5" class="select2-results" role="listbox">   </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <input title=""
                                                                                        tabindex="-1" name="selectbox-3" id="selectbox-3" class="search-field f-right
                                                                                        ui-autocomplete-input select2-offscreen" data-placeholder="Choose An Option.."
                                                                                        type="hidden">
                                                                                    
                                                                                    
                                                                                    <!--      <input type="hidden"  name="selectbox-3" id="selectbox-3" class="search-field f-left ui-autocomplete-input select2" data-placeholder="Choose An Option.." />
                                                                                        -->
                                                                                        <button type="submit" class="btn btn-inverse submitbtn" id="btn_product"><i class="fa fa-search fa-lg"></i></button>
                                                                            </div>
                                                          
                                                                    </div>
                                                          
                                                    </form>
                                                </div>      
                                            </div>
                                        <div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row hidden-xs">
                            <div class="col-lg-12">
                                <div class="counter">

                                    <marquee scrolldelay="200">Another example: SCROLLDELAY marquee 200</marquee>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</div>
</div>
</div>

</br>


<div class="row">
    <div class="col-md-10 col-md-offset-1">
                                <div class="col-sm-12">
                                    <style>
                                        .twoColTab1{ margin-bottom:30px !important;}
                                        .lsidebar{}
                                        .twoColTab1 .row1{ padding-bottom:10px; border-bottom:1px solid #ccc; margin-bottom:10px;}
                                        .twoColTab1 .row1:last-child{ margin:0; border:0; padding-bottom:0}
                                        .twoColTab1 .row1 .col-md-12 h3 + p{ border: 1px dashed #a2561e; padding:10px; margin:10px 0}
                                    </style>
                                    <div class="respotbs twoColTab1" style="display: block; width: 100%; margin: 10px;">
                                        <ul class="resp-tabs-list">
                                        <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">Govt Jobs</li>
                                        <li class="resp-tab-item" aria-controls="tab_item-1" role="tab">Pvt Jobs</li>
                                        <li class="resp-tab-item" aria-controls="tab_item-2" role="tab">For Sale</li>
                                        <li class="resp-tab-item" aria-controls="tab_item-3" role="tab">For Rent</li>
                                        <li class="resp-tab-item" aria-controls="tab_item-4" role="tab">Events</li>
                                    </ul>
                                    <!-- widget + accordion 
                                     Closed By rahul 15/11/2014 -->
                                    <div class="resp-tabs-container">
                                        <h2 aria-controls="tab_item-0" class="resp-accordion resp-tab-active" role="tab">
                                            <span class="resp-arrow"></span>Premium Listings
                                        </h2>
                                        <div style="display:block" class="resp-tab-content  resp-tab-content-active resp-accordion-closed" aria-labelledby="tab_item-0">
                                            <div class="row1 clearfix">
                                                <div class="col-md-3 col-lg-3 col-xs-4">
                                                    <a href="http://localhost.com/demo/v4/seattle-wa/michael-r-yantis-assoc/engineering-accounting-research-management-related-svcs/8">
                                                        <img class="img-responsive" src="yellow/l9.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-xs-8">
                                                    <h1>
                                                        <a href="http://localhost.com/demo/v4/seattle-wa/michael-r-yantis-assoc/engineering-accounting-research-management-related-svcs/8">Michael R Yantis Assoc                      </a>
                                                    </h1>
                                                <h4 class="thin">1809 7th Ave                    </h4>
                                                <p class="thin">                    </p>
                                                <p class="thin">
                                                    <a class="" href="http://localhost.com/demo/v4/seattle-wa">Seattle (WA) </a>, <a class="" href="http://localhost.com/demo/v4/washington-wa">Washington (WA) </a>                  <!-- 
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
                                                <p class="thin small">Michael R Yantis Assoc, Acoustical Consultants in Seattle                   </p>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xs-12">
                                                <h3 class="text-right">
                                                (206) 583-0465                  </h3>
                                            </div>
                                        </div>
                                        <div class="row1 clearfix">
                                            <div class="col-md-3 col-lg-3 col-xs-4">
                                                <a href="http://localhost.com/demo/v4/plymouth-in/house-heminger/social-services/6">
                                                    <img class="img-responsive" src="yellow/l8.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xs-8">
                                                <h1>
                                                    <a href="http://localhost.com/demo/v4/plymouth-in/house-heminger/social-services/6">House Heminger                     </a>
                                                </h1>
                                                <h4 class="thin">               </h4>
                                                <p class="thin">                </p>
                                                <p class="thin">
                                                    <a class="" href="http://localhost.com/demo/v4/plymouth-in">Plymouth (IN) </a>, <a class="" href="http://localhost.com/demo/v4/indiana-in">Indiana (IN) </a>                  <!-- 
                                                    <a
                                                    href="http://localhost.com/demo/v4/plymouth-in">Plymouth,
                                                    </a>
                                                    <a
                                                    href="http://localhost.com/demo/v4/indiana-in">Indiana,
                                                    </a>
                                                    -->
                                                </p>
                                                <p class="thin">
                                                    <a class="text-warning" href="http://localhost.com/demo/v4/usk-wa/social-services">Social Services </a>, <a class="text-warning" href="http://localhost.com/demo/v4/usk-wa/services"> Services </a>   <!-- 
                                                    <a
                                                    href="http://localhost.com/demo/v4/usk-wa/social-services"
                                                    class="text-warning">Social Services,</a>
                                                    <a
                                                    href="http://localhost.com/demo/v4/usk-wa/services"
                                                    class="text-warning"> Services,</a>
                                                    -->
                                                </p>
                                                <p class="thin small">
                                                House Heminger, Abuse Information &amp; Treatment in Plymouth                   </p>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xs-12">
                                                <h3 class="text-right">
                                                (574) 936-7233                  </h3>
                                            </div>
                                        </div>
                                        <div class="row1 clearfix">
                                            <div class="col-md-3 col-lg-3 col-xs-4">
                                                <a href="http://localhost.com/demo/v4/freeland-wa/skymeadow-farm-inc/agricultural-services/236">
                                                    <img class="img-responsive" src="yellow/l1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xs-8">
                                                <h1>
                                                    <a href="http://localhost.com/demo/v4/freeland-wa/skymeadow-farm-inc/agricultural-services/236">Skymeadow Farm Inc                     </a>
                                                </h1>
                                                <h4 class="thin">
                                                PO Box 100                      </h4>
                                                <p class="thin">
                                                </p>
                                                <p class="thin">
                                                <a class="" href="http://localhost.com/demo/v4/freeland-wa">Freeland (WA) </a>, <a class="" href="http://localhost.com/demo/v4/washington-wa">Washington (WA) </a>                    <!-- 
                                                <a
                                                href="http://localhost.com/demo/v4/freeland-wa">Freeland,
                                                </a>
                                                <a
                                                href="http://localhost.com/demo/v4/washington-wa">Washington,
                                                </a>
                                                -->
                                                </p>

                                                <p class="thin">
                                                <a class="text-warning" href="http://localhost.com/demo/v4/usk-wa/agricultural-services">Agricultural Services </a>, <a class="text-warning" href="http://localhost.com/demo/v4/usk-wa/agriculture-forestry-fishing">Agriculture &amp; Fishing  </a>                  <!-- 
                                                <a
                                                href="http://localhost.com/demo/v4/usk-wa/agricultural-services"
                                                class="text-warning">Agricultural Services,</a>
                                                <a
                                                href="http://localhost.com/demo/v4/usk-wa/agriculture-forestry-fishing"
                                                class="text-warning">Agriculture & Fishing ,</a>
                                                -->
                                                </p>
                                                <p class="thin small">
                                                Skymeadow Farm Inc, Animal Breeding Services in Freeland                    </p>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xs-12">
                                                <h3 class="text-right">
                                                (360) 730-1227                  </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 aria-controls="tab_item-1" class="resp-accordion" role="tab"><span class="resp-arrow"></span>Review     </h2><div class="resp-tab-content" aria-labelledby="tab_item-1">
                                    <style>
                                        .comment-block {
                                        padding: 10px 10px;
                                        margin-bottom: 10px;
                                        border-bottom: 1px dashed #ddd;
                                        }
                                    </style>
                                    <div style="display: block; width: 100%; margin: 0px;" class="respotbs twoColTab">
                                        <div class="widget">
                                            <div class="widgetTitle">
                                                <h3>Comments </h3>
                                            </div>
                                        </div>
                                        <div role="tab" class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" aria-labelledby="tab_item-1">
                                            <div class="row">
                                                <div class="clearfix comment-block">
                                                    <div class="col-lg-2">
                                                        <div class="ratting pull-left">3<span class="thin">/</span>5<p class="text">Ratting</p></div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <h3><strong>House Heminger </strong></h3>
                                                        <p class="thin">Good business and support</p>
                                                        <p class="pull-right"><small><strong>Posted By :</strong> <i class="text-danger">Dennis J</i></small> <small><strong>On</strong> <i class="text-danger">2015-03-28 19:06:50 </i> </small> </p>
                                                    </div>
                                                </div>
                                                <div class="clearfix comment-block">
                                                    <div class="col-lg-2">
                                                        <div class="ratting pull-left"> 4 <span class="thin">/</span>5<p class="text">Ratting</p></div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <h3> <strong>   Rahul Testing pvt.ltd </strong> </h3>   
                                                        <p class="thin"> This is a testing business description of this review on this site.... </p>
                                                        <p class="pull-right"><small><strong>Posted By :</strong> <i class="text-danger">Rahul Sinha</i></small> <small><strong>On</strong> <i class="text-danger">2015-03-13 17:49:51 </i> </small> </p>
                                                    </div>
                                                </div>
                                                <div class="clearfix comment-block">
                                                    <div class="col-lg-2">
                                                        <div class="ratting pull-left"> 2 <span class="thin">/</span>5<p class="text">Ratting</p></div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <h3>    <strong>    Michael R Yantis Assoc </strong> </h3>
                                                        <p class="thin"> This is a testing description of this listing This is a testing description of this listing </p>
                                                        <p class="pull-right"><small><strong>Posted By :</strong> <i class="text-danger">Rohit Sinha</i></small> <small><strong>On</strong> <i class="text-danger">2015-03-12 11:41:34 </i> </small> </p>
                                                    </div>
                                                </div>
                                                <div class="clearfix comment-block">
                                                    <div class="clearfix">
                                                        <div class="col-lg-12">
                                                            View all Comments ∽ <a href="http://localhost.com/demo/v4/comments/all" title="View all Comments"> Click here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div></div>
                                            </div>
                                        </div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.bcg -->
                </div>
                <!-- /.hsContainer -->
            </div>
            <!-- /.hsContent -->
        </section>
        <!-- /#slide-1 -->
    </div>
    </div>

	<div class="row">

		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-home"></i> {{ trans('navs.home') }}</div>

				<div class="panel-body">
					{{ trans('strings.welcome_to', ['place' => app_name()]) }}
				</div>
			</div><!-- panel -->

		</div><!-- col-md-10 -->

		@role('Administrator')
		    <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.based_on.role') . trans('strings.using_blade_extensions') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.test') . ' 1: ' . trans('strings.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
		@endrole

		@if (access()->hasRole('Administrator'))
		    <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.based_on.role') . trans('strings.using_access_helper.role_name') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.test') . ' 2: ' . trans('strings.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
		@endif

		@if (access()->hasRole(1))
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.based_on.role') . trans('strings.using_access_helper.role_id') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.test') . ' 3: ' . trans('strings.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif

        @if (access()->hasRoles(['Administrator', 1]))
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.based_on.role') . trans('strings.using_access_helper.array_roles_not') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.test') . ' 4: ' . trans('strings.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif

        {{-- The second parameter says the user must have all the roles specified. Administrator does not have the role with an id of 2, so this will not show. --}}
        @if (access()->hasRoles(['Administrator', 2], true))
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.based_on.role') . trans('strings.using_access_helper.array_roles') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif

        @if (access()->hasPermission('view_backend'))
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.based_on.permission') . trans('strings.using_access_helper.permission_name') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.test') . ' 5: ' . trans('strings.you_can_see_because_permission', ['permission' => 'view_backend']) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif

        @if (access()->hasPermission(1))
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.based_on.permission') . trans('strings.using_access_helper.permission_id') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.test') . ' 6: ' . trans('strings.you_can_see_because_permission', ['permission' => 'view_backend']) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif

        @if (access()->hasPermissions(['view_backend', 1]))
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.based_on.permission') . trans('strings.using_access_helper.array_permissions_not') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.test') . ' 7: ' . trans('strings.you_can_see_because_permission', ['permission' => 'view_backend']) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif

        {{-- The second parameter says the user must have all the roles specified. Administrator does not have the role with an id of 2, so this will not show. --}}
        @if (access()->hasPermissions(['view_backend', 2], true))
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.based_on.permission') . trans('strings.using_access_helper.array_permissions') }}</div>

                    <div class="panel-body">
                        {{ trans('strings.you_can_see_because_permission', ['permission' => 'view_backend']) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-home"></i> {{ trans('strings.js_injected_from_controller') }}</div>

                <div class="panel-body">
                    {{ trans('strings.test') . ' 8: ' . trans('strings.view_console_it_works') }}
                </div>
            </div><!-- panel -->

        </div><!-- col-md-10 -->

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-home"></i> Bootstrap Glyphicon {{ trans('strings.test') }}</div>

                <div class="panel-body">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon glyphicon-euro" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon glyphicon-cloud" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </div>
            </div><!-- panel -->

        </div><!-- col-md-10 -->

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-home"></i> Font Awesome {{ trans('strings.test') }}</div>

                <div class="panel-body">
                    <i class="fa fa-home"></i>
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-pinterest"></i>
                </div>
            </div><!-- panel -->

        </div><!-- col-md-10 -->


        <!--Bheema -->

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-home"></i> Photo Gallary {{ trans('strings.test') }}</div>

             
            </div><!-- panel -->

        </div><!-- col-md-10 -->

	</div><!-- row -->
@endsection

@section('after-scripts-end')
	<script>
		//Being injected from FrontendController
		console.log(test);
	</script>
@stop