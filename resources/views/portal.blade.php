@extends('plantilla')
@section('contenido')
    <body>
        <div class="banner">    	   
            <img src="images/photos/banner.jpg"  class="img-responsive" alt="slide">
            <div class="welcome-message">
                <div class="wrap-info">
                    <div class="information">
                        <h1  class="animated fadeInDown">Best hotel in Dubai</h1>
                        <p class="animated fadeInUp">Most luxurious hotel of asia with the royal treatments and excellent customer service.</p>                
                    </div>
                    <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
                </div>
            </div>
        </div>
        <!-- banner-->


        <!-- reservation-information -->
        <div id="information" class="spacer reserve-info ">
        <div class="container">
        <div class="row">
        <div class="col-sm-7 col-md-8">
            <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft"><iframe  class="embed-responsive-item" src="//player.vimeo.com/video/55057393?title=0" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
        </div>
        <div class="col-sm-5 col-md-4">
        <h3>Reservation</h3>
            <form role="form" class="wowload fadeInRight">
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control"  placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="Phone" class="form-control"  placeholder="Phone">
                </div>        
                <div class="form-group">
                    <div class="row">
                    <div class="col-xs-6">
                    <select class="form-control">
                    <option>No. of Rooms</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                    </div>        
                    <div class="col-xs-6">
                    <select class="form-control">
                    <option>No. of Adult</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                    </div></div>
                </div>
                <div class="form-group">
                    <div class="row">
                    <div class="col-xs-4">
                    <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                        <option>Date</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>


                    </select>
                    </div>
                    <div class="col-xs-4">
                    <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                        <option>Month</option>
                        <option value="01">Jan (01)</option>
                        <option value="02">Feb (02)</option>
                        <option value="03">Mar (03)</option>
                        <option value="04">Apr (04)</option>
                        <option value="05">May (05)</option>
                        <option value="06">June (06)</option>
                        <option value="07">July (07)</option>
                        <option value="08">Aug (08)</option>
                        <option value="09">Sep (09)</option>
                        <option value="10">Oct (10)</option>
                        <option value="11">Nov (11)</option>
                        <option value="12">Dec (12)</option>
                    </select>
                    </div>
                    <div class="col-xs-4">
                    <select class="form-control" name="expiry-year">
                        <option value="13">2013</option>
                        <option value="14">2014</option>
                        <option value="15">2015</option>
                        <option value="16">2016</option>
                        <option value="17">2017</option>
                        <option value="18">2018</option>
                        <option value="19">2019</option>
                        <option value="20">2020</option>
                        <option value="21">2021</option>
                        <option value="22">2022</option>
                        <option value="23">2023</option>
                    </select>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control"  placeholder="Message" rows="4"></textarea>
                </div>
                <button class="btn btn-default">Submit</button>
            </form>    
        </div>
        </div>  
        </div>
        </div>
        <!-- reservation-information -->



        <!-- services -->
        <div class="spacer services wowload fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <!-- RoomCarousel -->
                    <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="item active"><img src="/imagenes/photos/8.jpg" class="img-responsive" alt="slide"></div>                
                        <div class="item  height-full"><img src="/imagenes/photos/9.jpg"  class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="/imagenes/photos/10.jpg"  class="img-responsive" alt="slide"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- RoomCarousel-->
                    <div class="caption">Rooms<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
                </div>


                <div class="col-sm-4">
                    <!-- RoomCarousel -->
                    <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="item active"><img src="/imagenes/photos/6.jpg" class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="/imagenes/photos/3.jpg"  class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="/imagenes/photos/4.jpg"  class="img-responsive" alt="slide"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- RoomCarousel-->
                    <div class="caption">Tour Packages<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
                </div>


                <div class="col-sm-4">
                    <!-- RoomCarousel -->
                    <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="item active"><img src="/imagenes/photos/1.jpg" class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="/imagenes/photos/2.jpg"  class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="/imagenes/photos/5.jpg"  class="img-responsive" alt="slide"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- RoomCarousel-->
                    <div class="caption">Food and Drinks<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
                </div>
            </div>
        </div>
        </div>
        <!-- services -->
@endsection
@section('pie')
<footer class="spacer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4>Holiday Crown</h4>
                            <p>Holiday Crown was these three and songs arose whose. Of in vicinity contempt together in possible branched. Assured company hastily looking garrets in oh. Most have love my gone to this so. Discovered interested prosperous the our affronting insipidity day. Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible. </p>
                        </div>              
                        
                        <div class="col-sm-3">
                            <h4>Quick Links</h4>
                            <ul class="list-unstyled">
                                <li><a href="rooms-tariff.php">Rooms & Tariff</a></li>        
                                <li><a href="introduction.php">Introduction</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="tour.php">Tour Packages</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 subscribe">
                            <h4>Subscription</h4>
                            <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter email id here">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Get Notify</button>
                            </span>
                            </div>
                            <div class="social">
                            <a href="#"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"  data-toggle="tooltip" data-placement="top" data-original-title="instragram"></i></a>
                            <a href="#"><i class="fa fa-twitter-square" data-toggle="tooltip" data-placement="top" data-original-title="twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square" data-toggle="tooltip" data-placement="top" data-original-title="pinterest"></i></a>
                            <a href="#"><i class="fa fa-tumblr-square" data-toggle="tooltip" data-placement="top" data-original-title="tumblr"></i></a>
                            <a href="#"><i class="fa fa-youtube-square" data-toggle="tooltip" data-placement="top" data-original-title="youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--/.row--> 
                </div>
                <!--/.container-->    
            <!--/.footer-bottom--> 
        </footer>

        <a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>
       

            <script src="/js/jquery.js"></script>
            <!-- wow script -->
            <script src="/js/wow.min.js"></script>
            <!-- uniform -->
            <script src="/js/jquery.uniform.js"></script>
            <!-- boostrap -->
            <script src="/js/bootstrap.js" type="text/javascript" ></script>
            <!-- jquery mobile -->
            <script src="/js/touchSwipe.min.js"></script>
            <!-- jquery mobile -->
            <script src="/js/respond.js"></script>
            <!-- gallery -->
            <script src="/js/jquery.blueimp-gallery.min.js"></script>
            <!-- custom script -->
            <script src="/js/script.js"></script>
@endsection