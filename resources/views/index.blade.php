@extends ('layout')

@section('content')
<section class="hero" style="height:600px; background-image: url('img/hero_1_a.jpg');">
        <div class="container ">
            <div class="row">
              <div class="col-lg-10">
  
                <div class="row mb-5">
                  <div class="col-lg-10 ">
                    <h2><strong>Renting a car</strong> is within your finger tips.</h2>
                  </div>
                </div>
                
                <form class="trip-form searchbar" action="car.html" method="GET">
                  
                  <div class="row align-items-center">
                    
                    <div class="mb-3 mb-md-0 col-md-3 px-3 ">
                      <select name="" id="" class="searchCommons2">
                        <option value="" ><div class="searchCommonsOpt">Sport</div></option>
                        <option value="" ><div class="searchCommonsOpt">Sport</div></option>
                        <option value="" ><div class="searchCommonsOpt">Sport</div></option>
                        <option value="" ><div class="searchCommonsOpt">Sport</div></option>

                      </select>
                    </div>
                    <div class="mb-3 mb-md-0 col-md-3">
                      <div class="form-control-wrap">
                      <input type="date" id="cf-3" placeholder="Pick up"  class="searchCommons datepicker px-3" required>
  
                      </div>
                    </div>
                    <div class="mb-3 mb-md-0 col-md-3">
                      <div class="form-control-wrap">
                      <input type="date" id="cf-3" placeholder="Pick up"  class="searchCommons datepicker px-3" required>
                      </div>
                    </div>
                    <div class="mb-3 mb-md-0 col-md-3">
                        <input type="submit" value="Search Now" class="btn btn-primary btn-block py-3 searchCommons blueBtn">
                    </div>
                  </div>
                  
                </form>
  
              </div>
            </div>
          </div>
    </section>
    <!-- Hero Section End -->
    <br>
    <!-- Services Section Begin -->
    <section class="container mb-6">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Services</span>
                        <h2>What We Offers</h2>
                       <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p> --> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-1.png" alt="">
                        <h5>Instant Booking</h5>
                        <p>Get the car you want where and when you want.</p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-2.png" alt="">
                        <h5>Car Deleviry</h5>
                        <p>Stay home stay safe, your car will be delivered to you.</p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-4.png" alt="">
                        <h5>Support 24/7</h5>
                        <p>some text here to explain this service. Lorem epsum.</p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
    </section>
    <!-- Services Section End -->


    <!-- map Secion-->
    <div class="container">
        <div class="row">
             <div id="map"></div>
             </div>
             </div>
    

    <!-- Car Section Begin -->
    <section class="car spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Best Cars For You</span>
                        <h2>Available Vehicles</h2>
                    </div>
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Most Researched</li>
                        <li data-filter=".sale">Latest on rent</li>
                    </ul>
                </div>
            </div>
            <div class="row car-filter">
                <div class=" col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-1.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-6.jpg" alt="">
                            <img src="img/cars/car-3.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2016</div>
                                <h5><a href="car-details.html">Porsche cayenne turbo s</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <a href="car-details.html">
                                    <span class="car-option btn btn-primary btn btn-primary">Rent</span>
                                </a>
                                <h6>$218<span>/Month</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-2.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-6.jpg" alt="">
                            <img src="img/cars/car-4.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2020</div>
                                <h5><a href="car-details.html">Toyota camry asv50l-jeteku</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <a href="car-details.html">
                                    <span class="car-option btn btn-primary btn btn-primary">Rent</span>
                                </a>
                                <h6>$73,900<span>/Day</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-3.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-6.jpg" alt="">
                            <img src="img/cars/car-5.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2017</div>
                                <h5><a href="car-details.html">Bmw s1000rr 2019 m</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <a href="car-details.html">
                                    <span class="car-option btn btn-primary btn btn-primary">Rent</span>
                                </a>
                                <h6>$299<span>/Day</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-4.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-2.jpg" alt="">
                            <img src="img/cars/car-1.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2019</div>
                                <h5><a href="car-details.html">Lamborghini huracan evo</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <a href="car-details.html">
                                    <span class="car-option btn btn-primary btn btn-primary">Rent</span>
                                </a>
                                <h6>$120,000<span>/Day</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-5.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-7.jpg" alt="">
                            <img src="img/cars/car-2.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2018</div>
                                <h5><a href="car-details.html">Audi q8 2020</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <a href="car-details.html">
                                    <span class="car-option btn btn-primary btn btn-primary">Rent</span>
                                </a>
                                <h6>$319<span>/Day</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-6.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-3.jpg" alt="">
                            <img src="img/cars/car-1.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2016</div>
                                <h5><a href="car-details.html">Mustang shelby gt500</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option btn btn-primary ">Rent</span>
                                <h6>$730,900<span>/Day</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-7.jpg" alt="">
                            <img src="img/cars/car-2.jpg" alt="">
                            <img src="img/cars/car-4.jpg" alt="">
                            <img src="img/cars/car-1.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2020</div>
                                <h5><a href="car-details.html">Lamborghini aventador A90</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <a href="car-details.html">
                                    <span class="car-option btn btn-primary btn btn-primary">Rent</span>
                                </a>
                                <h6>$422<span>/Day</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-3.jpg" alt="">
                            <img src="img/cars/car-5.jpg" alt="">
                            <img src="img/cars/car-2.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2017</div>
                                <h5><a href="car-details.html">Porsche cayenne turbo s</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <a href="car-details.html">
                                    <span class="car-option btn btn-primary btn btn-primary">Rent</span>
                                </a>
                                <h6>$322<span>/Day</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Car Section End -->

    <!-- 
    <div class="cta">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 col-md-6">
                    <div class="cta__item set-bg" data-setbg="img/cta/cta-2.jpg">
                        <h4>Do You Want To Rent A Car</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Cta Begin -->
    <!-- Cta End -->
    <!-- Chooseus Section Begin -->
    <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="chooseus__text">
                        <div class="section-title">
                            <h2>Why People Choose Us</h2>
                            <p>Duis aute irure dolorin reprehenderits volupta velit dolore fugiat nulla pariatur
                                excepteur sint occaecat cupidatat.</p>
                        </div>
                        <ul>
                            <li><i class="fa fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</li>
                            <li><i class="fa fa-check-circle"></i> Integer et nisl et massa tempor ornare vel id orci.
                            </li>
                            <li><i class="fa fa-check-circle"></i> Nunc consectetur ligula vitae nisl placerat tempus.
                            </li>
                            <li><i class="fa fa-check-circle"></i> Curabitur quis ante vitae lacus varius pretium.</li>
                        </ul>
                        <a href="#" class="primary-btn">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="chooseus__video set-bg" >
            <img src="img/chooseus-video.png" alt="">
            <a href="https://www.youtube.com/watch?v=Xd0Ok-MkqoE"
                class="play-btn video-popup"><i class="fa fa-play"></i></a>
        </div>
    </section>

    <script>
        //Initialize and add the map
        function initMap() {
          // The location of Uluru
          if(navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var positionInfo = {lat:position.coords.latitude,lng:position.coords.longitude}; 
                    const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 10,
                    center: positionInfo,
                 } );
            // The marker, positioned at Uluru
                        const currentMarker = new google.maps.Marker({
                            position: positionInfo,
                            map: map,
                            mapTypeId: "satellite",

                        });
                        const marker1 = new google.maps.Marker({
                            position: {lat: 32.39021727211449, lng: -9.136276007315006},
                            map: map,
                            title:'150$'
                        });
                        const marker2 = new google.maps.Marker({
                            position: {lat: 32.49021727211449, lng: -9.139276007315006},
                            map: map,
                            title:'200$'
                        });
                    
                });
                
                
            } else {
                alert("Sorry, your browser does not support HTML5 geolocation.");
            }
        
        ;   
          // The map, centered at Uluru
          
        }
      </script>
@endsection


