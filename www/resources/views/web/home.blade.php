@extends('web.layout')
@section('content')
<section id="banners-mosaic">
    <div class="container no-padding mosaic-holder">
        <div class="col-xs-12 col-md-6 ">

            <div class="mosaic-banner big  wow bounceInLeft">
                <img alt="" src="images/mosaic01.jpg"/>
                <div class="caption">
                    <h1>
                        <span class="light">high heel</span><br>
                        collection
                    </h1>
                    <a class="le-btn medium" href="#">learn more</a>
                </div>


            </div>


        </div>
        <div class="col-xs-12 col-md-3 ">
            <div class="mosaic-banner inverse wow bounceInRight">
                <img alt="" src="images/mosaic02.jpg"/>
                <div class="caption">
                    <h1>
                        <span class="light">best style</span><br>
                        for party
                    </h1>
                    <a class="le-btn small" href="#">learn more</a>
                </div>

            </div>

            <div class="mosaic-banner wow bounceInRight">
                <img alt="" src="images/mosaic03.jpg"/>
                <div class="caption">
                    <h1>
                        <span class="light">very unique</span><br>
                        collection
                    </h1>
                    <a class="le-btn small" href="#">learn more</a>
                </div>

            </div>
        </div>
        <div class="col-xs-12 col-md-3 ">
            <div class="mosaic-banner wow bounceInRight" data-wow-delay="0.1s">
                <img alt="" src="images/mosaic04.jpg"/>
                <div class="caption">
                    <h1>
                        <span class="light">vintage</span><br>
                        style
                    </h1>
                    <a class="le-btn small" href="#">learn more</a>
                </div>

            </div>

            <div class="mosaic-banner wow bounceInRight" data-wow-delay="0.1s">
                <img alt="" src="images/mosaic05.jpg"/>
                <div class="caption">
                    <h1>
                        <span class="light">new</span><br>
                        season
                    </h1>
                    <a class="le-btn small" href="#">learn more</a>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="featured-products">
    <div class="container">
        <div class="iconic-nav-bar">
            <div class="icon-holder">
                <i class="fa fa-star"></i>
                <span class="triangle"></span>
            </div>
            <div class="bar">
                <h2>featured <span class="bold">products</span></h2>

                <div class="nav-buttons">
                    <a class="btn-prev" href="#prev"></a>
                    <a class="btn-next" href="#next"></a>
                </div>
            </div>

        </div>

        <div class="products-holder product-carousel owl-carousel">
            <div class="product-item">
                <div class="head">
                    <div class="le-ribbon green right"><span>50%</span></div>

                    <div class="thumb">
                        <img alt="" src="images/products/product01.png"/>
                    </div>

                    <div class="price">
                        <div class="price-old">
                            <span class="currency">$</span>250
                        </div>
                        <div class="price-current">
                            <span class="currency">$</span>145
                        </div>
                    </div>
                    <div class="star-holder">
                        <div class="star" data-score="3"></div>
                    </div>
                    <button class="btn-compare  btn-iconic"></button>
                </div>
                <div class="body">
                    <h3><a href="single-product.html">consectetur adipiscing elit</a></h3>
                    <div class="excerpt">
                        Looking lorem round, to ascertain that they...
                    </div>

                    <div class="merged-buttons">
                        <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                        <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                    </div>
                </div>
            </div>

            <div class="product-item">
                <div class="head">

                    <div class="thumb">
                        <img alt="" src="images/products/product02.png"/>
                    </div>

                    <div class="price">
                        <div class="price-old">
                            <span class="currency">$</span>350
                        </div>
                        <div class="price-current">
                            <span class="currency">$</span>245
                        </div>
                    </div>
                    <div class="star-holder">
                        <div class="star" data-score="4"></div>
                    </div>
                    <button class="btn-compare  btn-iconic"></button>
                </div>
                <div class="body">
                    <h3><a href="single-product.html">Man sport Hiking shoe</a></h3>

                    <div class="excerpt">
                        Looking lorem round, to ascertain that they...
                    </div>

                    <div class="merged-buttons">
                        <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                        <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                    </div>
                </div>
            </div>

            <div class="product-item">
                <div class="head">
                    <div class="le-badge orange"><span>50% off</span></div>

                    <div class="thumb">
                        <img alt="" src="images/products/product03.png"/>
                    </div>

                    <div class="price">
                        <div class="price-old">
                            <span class="currency">$</span>450
                        </div>
                        <div class="price-current">
                            <span class="currency">$</span>245
                        </div>
                    </div>
                    <div class="star-holder">
                        <div class="star" data-score="4"></div>
                    </div>
                    <button class="btn-compare  btn-iconic"></button>
                </div>
                <div class="body">
                    <h3><a href="single-product.html">Woman highheel shoe</a></h3>

                    <div class="excerpt">
                        Looking lorem round, to ascertain that they...
                    </div>

                    <div class="merged-buttons">
                        <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                        <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                    </div>
                </div>
            </div>

            <div class="product-item">
                <div class="head">
                    <div class="le-badge green"><span>new</span></div>
                    <div class="thumb">
                        <img alt="" src="images/products/product04.png"/>
                    </div>

                    <div class="price">
                        <div class="price-old">
                            <span class="currency">$</span>120
                        </div>
                        <div class="price-current">
                            <span class="currency">$</span>95
                        </div>
                    </div>
                    <div class="star-holder">
                        <div class="star" data-score="2"></div>
                    </div>
                    <button class="btn-compare  btn-iconic"></button>
                </div>
                <div class="body">
                    <h3><a href="single-product.html">Woman highheel shoe</a></h3>

                    <div class="excerpt">
                        Looking lorem round, to ascertain that they...
                    </div>

                    <div class="merged-buttons">
                        <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                        <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                    </div>
                </div>
            </div>

            <div class="product-item">
                <div class="head">

                    <div class="thumb">
                        <img alt="" src="images/products/product03.png"/>
                    </div>

                    <div class="price">
                        <div class="price-old">
                            <span class="currency">$</span>450
                        </div>
                        <div class="price-current">
                            <span class="currency">$</span>245
                        </div>
                    </div>
                    <div class="star-holder">
                        <div class="star" data-score="4"></div>
                    </div>
                    <button class="btn-compare  btn-iconic"></button>
                </div>
                <div class="body">
                    <h3><a href="single-product.html">Woman highheel shoe</a></h3>

                    <div class="excerpt">
                        Looking lorem round, to ascertain that they...
                    </div>

                    <div class="merged-buttons">
                        <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                        <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                    </div>
                </div>
            </div>

            <div class="product-item">
                <div class="head">

                    <div class="thumb">
                        <img alt="" src="images/products/product02.png"/>
                    </div>

                    <div class="price">

                        <div class="price-current">
                            <span class="currency">$</span>245
                        </div>
                    </div>
                    <div class="star-holder">
                        <div class="star" data-score="4"></div>
                    </div>
                    <button class="btn-compare  btn-iconic"></button>
                </div>
                <div class="body">
                    <h3><a href="single-product.html">Man sport Hiking shoe</a></h3>

                    <div class="excerpt">
                        Looking lorem round, to ascertain that they...
                    </div>

                    <div class="merged-buttons">
                        <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                        <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                    </div>
                </div>
            </div>


            <div class="product-item">
                <div class="head">

                    <div class="thumb">
                        <img alt="" src="images/products/product04.png"/>
                    </div>

                    <div class="price">

                        <div class="price-current">
                            <span class="currency">$</span>95
                        </div>
                    </div>
                    <div class="star-holder">
                        <div class="star" data-score="2"></div>
                    </div>
                    <button class="btn-compare  btn-iconic"></button>
                </div>
                <div class="body">
                    <h3><a href="single-product.html">colorful cool runnig shoes</a></h3>

                    <div class="excerpt">
                        Looking lorem round, to ascertain that they...
                    </div>

                    <div class="merged-buttons">
                        <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                        <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                    </div>
                </div>
            </div>

            <div class="product-item">
                <div class="head">

                    <div class="thumb">
                        <img alt="" src="images/products/product01.png"/>
                    </div>

                    <div class="price">

                        <div class="price-current">
                            <span class="currency">$</span>145
                        </div>
                    </div>
                    <div class="star-holder">
                        <div class="star" data-score="3"></div>
                    </div>
                    <button class="btn-compare  btn-iconic"></button>
                </div>
                <div class="body">
                    <h3><a href="single-product.html">consectetur adipiscing elit</a></h3>

                    <div class="excerpt">
                        Looking lorem round, to ascertain that they...
                    </div>

                    <div class="merged-buttons">
                        <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                        <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>


<section id="bestsellers">
    <div class="container">
        <div class="iconic-nav-bar">
            <div class="icon-holder">
                <i class="fa fa-dollar"></i>
                <span class="triangle"></span>
            </div>
            <div class="bar">
                <h2>best <span class="bold">sellers</span></h2>


            </div>

        </div>

        <div class="products-holder simple-grid">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                <div class="product-item">
                    <div class="head">
                        <div class="le-ribbon blue right"><span>new!</span></div>
                        <div class="thumb">
                            <img alt="" src="images/products/product01.png"/>
                        </div>

                        <div class="price">
                            <div class="price-old">
                                <span class="currency">$</span>250
                            </div>
                            <div class="price-current">
                                <span class="currency">$</span>145
                            </div>
                        </div>
                        <div class="star-holder">
                            <div class="star" data-score="3"></div>
                        </div>
                        <button class="btn-compare  btn-iconic"></button>
                    </div>
                    <div class="body">
                        <h3><a href="single-product.html">consectetur adipiscing elit</a></h3>

                        <div class="excerpt">
                            Looking lorem round, to ascertain that they...
                        </div>

                        <div class="merged-buttons">
                            <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                            <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                <div class="product-item">
                    <div class="head">

                        <div class="thumb">
                            <img alt="" src="images/products/product02.png"/>
                        </div>

                        <div class="price">
                            <div class="price-old">
                                <span class="currency">$</span>350
                            </div>
                            <div class="price-current">
                                <span class="currency">$</span>245
                            </div>
                        </div>
                        <div class="star-holder">
                            <div class="star" data-score="4"></div>
                        </div>
                        <button class="btn-compare  btn-iconic"></button>
                    </div>
                    <div class="body">

                        <h3><a href="single-product.html">Man sport Hiking shoe</a></h3>
                        <div class="excerpt">
                            Looking lorem round, to ascertain that they...
                        </div>

                        <div class="merged-buttons">
                            <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                            <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                <div class="product-item">
                    <div class="head">
                        <div class="le-badge orange"><span>50% off</span></div>

                        <div class="thumb">
                            <img alt="" src="images/products/product03.png"/>
                        </div>

                        <div class="price">
                            <div class="price-old">
                                <span class="currency">$</span>450
                            </div>
                            <div class="price-current">
                                <span class="currency">$</span>245
                            </div>
                        </div>
                        <div class="star-holder">
                            <div class="star" data-score="4"></div>
                        </div>
                        <button class="btn-compare  btn-iconic"></button>
                    </div>
                    <div class="body">
                        <h3><a href="single-product.html">Woman highheel shoe</a></h3>
                        <div class="excerpt">
                            Looking lorem round, to ascertain that they...
                        </div>

                        <div class="merged-buttons">
                            <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                            <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                <div class="product-item">
                    <div class="head">

                        <div class="le-badge green"><span>new</span></div>
                        <div class="thumb">
                            <img alt="" src="images/products/product04.png"/>
                        </div>

                        <div class="price">
                            <div class="price-old">
                                <span class="currency">$</span>120
                            </div>
                            <div class="price-current">
                                <span class="currency">$</span>95
                            </div>
                        </div>
                        <div class="star-holder">
                            <div class="star" data-score="2"></div>
                        </div>
                        <button class="btn-compare  btn-iconic"></button>
                    </div>
                    <div class="body">
                        <h3><a href="single-product.html">colorful cool runnig shoes</a></h3>
                        <div class="excerpt">
                            Looking lorem round, to ascertain that they...
                        </div>

                        <div class="merged-buttons">
                            <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                            <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                <div class="product-item">
                    <div class="head">

                        <div class="thumb">
                            <img alt="" src="images/products/product03.png"/>
                        </div>

                        <div class="price">
                            <div class="price-old">
                                <span class="currency">$</span>450
                            </div>
                            <div class="price-current">
                                <span class="currency">$</span>245
                            </div>
                        </div>
                        <div class="star-holder">
                            <div class="star" data-score="4"></div>
                        </div>
                        <button class="btn-compare  btn-iconic"></button>
                    </div>
                    <div class="body">
                        <h3><a href="single-product.html">Woman highheel shoe</a></h3>
                        <div class="excerpt">
                            Looking lorem round, to ascertain that they...
                        </div>

                        <div class="merged-buttons">
                            <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                            <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                <div class="product-item">
                    <div class="head">

                        <div class="thumb">
                            <img alt="" src="images/products/product02.png"/>
                        </div>

                        <div class="price">

                            <div class="price-current">
                                <span class="currency">$</span>245
                            </div>
                        </div>
                        <div class="star-holder">
                            <div class="star" data-score="4"></div>
                        </div>
                        <button class="btn-compare  btn-iconic"></button>
                    </div>
                    <div class="body">
                        <h3><a href="single-product.html">Man sport Hiking shoe</a></h3>
                        <div class="excerpt">
                            Looking lorem round, to ascertain that they...
                        </div>

                        <div class="merged-buttons">
                            <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                            <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                <div class="product-item">
                    <div class="head">

                        <div class="thumb">
                            <img alt="" src="images/products/product04.png"/>
                        </div>

                        <div class="price">

                            <div class="price-current">
                                <span class="currency">$</span>95
                            </div>
                        </div>
                        <div class="star-holder">
                            <div class="star" data-score="2"></div>
                        </div>
                        <button class="btn-compare  btn-iconic"></button>
                    </div>
                    <div class="body">
                        <h3><a href="single-product.html">colorful cool runnig shoes</a></h3>
                        <div class="excerpt">
                            Looking lorem round, to ascertain that they...
                        </div>

                        <div class="merged-buttons">
                            <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                            <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                <div class="product-item">
                    <div class="head">

                        <div class="thumb">
                            <img alt="" src="images/products/product01.png"/>
                        </div>

                        <div class="price">

                            <div class="price-current">
                                <span class="currency">$</span>145
                            </div>
                        </div>
                        <div class="star-holder">
                            <div class="star" data-score="3"></div>
                        </div>
                        <button class="btn-compare  btn-iconic"></button>
                    </div>
                    <div class="body">
                        <h3><a href="single-product.html">consectetur adipiscing elit</a></h3>
                        <div class="excerpt">
                            Looking lorem round, to ascertain that they...
                        </div>

                        <div class="merged-buttons">
                            <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                            <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<section id="newsletter" class="section-newsletter">
    <div class="container">


        <div class="col-xs-12 col-md-1">
            <div class="icon-holder big">
                <i class="fa fa-newspaper-o"></i>
                <span class="triangle"></span>
            </div>
        </div>
        <div class="col-xs-12 col-md-4">
            <div class="text">
                sign up for our newsletter to<br>
                get best offers and news.
            </div>
        </div>
        <div class="col-xs-12 col-md-7">
            <form class="subscribe-form">
                <input data-placeholder="Enter Your Email Here..." class="le-input col-xs-12 col-md-10">
                <button type="submit" class="le-btn icon-btn fa fa-send"></button>
            </form>
        </div>
    </div>
</section>

<section class="banner-slider wow fadeInUp">
    <div class="container">

        <a class="btn-next nav-btn circular-icon" href="#"></a>
        <a class="btn-prev nav-btn circular-icon" href="#"></a>

        <div class="banner-carousel owl-carousel">
            <div class="item">
                <div class="caption">
                    <h1>great stuff</h1>
                    <div class="short-tag">
                        <p>
                            it was some time before the obtained any answer,<br>
                            and the reply, when made, was awesome!
                        </p>
                    </div>
                    <a class="le-btn" href="#">buy now</a>
                </div>
                <img src="images/banner-slide-01.jpg" alt="">
            </div>

            <div class="item">
                <div class="caption">
                    <h1>great stuff</h1>
                    <div class="short-tag">
                        <p>
                            it was some time before the obtained any answer,<br>
                            and the reply, when made, was awesome!
                        </p>
                    </div>
                    <a class="le-btn" href="#">buy now</a>
                </div>
                <img src="images/banner-slide-01.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<a class="goto-top" href="#gotop"></a>
@endsection
