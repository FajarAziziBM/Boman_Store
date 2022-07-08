@extends('layouts.main')

@section('container')
<section class="store-carousel">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
                <div id="storeCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li class="active" data-target="#storeCarousel" data-slide-to="0"></li>
                        <li data-target="#storeCarousel" data-slide-to="1"></li>
                        <li data-target="#storeCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/banner.png" alt="carousel image" class="d-block w-100" />
                        </div>
                        <div class="carousel-item">
                            <img src="/images/banner.png" alt="carousel image" class="d-block w-100" />
                        </div>
                        <div class="carousel-item">
                            <img src="/images/banner.png" alt="carousel image" class="d-block w-100" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="store-trend-catagories">
    <div class="container">
        <div class="row">
            <div class="col-12" data-aos="fade-up">
                <h5>Trend Catagories</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100ms">
                <a href="#" class="component-categories d-inline-block">
                    <div class="categories-image">
                        <img src="/images/categories-gadget.svg" alt="" class="w-100" />
                    </div>
                    <p class="categories-text">Gadgets</p>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200ms">
                <a href="#" class="component-categories d-inline-block">
                    <div class="categories-image">
                        <img src="/images/categories-furniture.svg" alt="" class="w-100" />
                    </div>
                    <p class="categories-text">Furniture</p>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300ms">
                <a href="#" class="component-categories d-inline-block">
                    <div class="categories-image">
                        <img src="/images/categories-makeup.svg" alt="" class="w-100" />
                    </div>
                    <p class="categories-text">Make Up</p>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400ms">
                <a href="#" class="component-categories d-inline-block">
                    <div class="categories-image">
                        <img src="/images/categories-sneaker.svg" alt="" class="w-100" />
                    </div>
                    <p class="categories-text">Sneakers</p>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500ms">
                <a href="#" class="component-categories d-inline-block">
                    <div class="categories-image">
                        <img src="/images/categories-tools.svg" alt="" class="w-100" />
                    </div>
                    <p class="categories-text">Tools</p>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600ms">
                <a href="#" class="component-categories d-inline-block">
                    <div class="categories-image">
                        <img src="/images/categories-baby.svg" alt="" class="w-100" />
                    </div>
                    <p class="categories-text">Baby</p>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="store-new-products">
    <div class="container">
        <div class="row">
            <div class="col-12" data-aos="fade-up">
                <h5>New Products</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100ms">
                <a href="/details.html" class="component-products d-block">
                    <div class="products-thumbnail">
                        <div class="products-images" style="
                      background-image: url('/images/produts-apple-watch.jpg');
                    "></div>
                    </div>
                    <div class="products-text">Apple Watch 4</div>
                    <div class="products-price">$990</div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200ms">
                <a href="/details.html" class="component-products d-block">
                    <div class="products-thumbnail">
                        <div class="products-images" style="
                      background-image: url('/images/produts-orange-bogotta.png');
                    "></div>
                    </div>
                    <div class="products-text">Orange Bogotta</div>
                    <div class="products-price">$94,509</div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300ms">
                <a href="/details.html" class="component-products d-block">
                    <div class="products-thumbnail">
                        <div class="products-images" style="
                      background-image: url('/images/produts-sofa-ternyaman.png');
                    "></div>
                    </div>
                    <div class="products-text">Sofa Ternyaman</div>
                    <div class="products-price">$1,409</div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400ms">
                <a href="/details.html" class="component-products d-block">
                    <div class="products-thumbnail">
                        <div class="products-images" style="
                      background-image: url('/images/produts-bubuk-maketti.png');
                    "></div>
                    </div>
                    <div class="products-text">Bubuk Maketti</div>
                    <div class="products-price">$225</div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500ms">
                <a href="/details.html" class="component-products d-block">
                    <div class="products-thumbnail">
                        <div class="products-images" style="
                      background-image: url('/images/produts-tatakan-gelas.png');
                    "></div>
                    </div>
                    <div class="products-text">Tatakan Gelas</div>
                    <div class="products-price">$45,184</div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600ms">
                <a href="/details.html" class="component-products d-block">
                    <div class="products-thumbnail">
                        <div class="products-images" style="
                      background-image: url('/images/produts-mavic-kawe.png');
                    "></div>
                    </div>
                    <div class="products-text">Mavic Kawe</div>
                    <div class="products-price">$503</div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700ms">
                <a href="/details.html" class="component-products d-block">
                    <div class="products-thumbnail">
                        <div class="products-images" style="
                      background-image: url('/images/produts-black-edition-nike.png');
                    "></div>
                    </div>
                    <div class="products-text">Black Edition Nike</div>
                    <div class="products-price">$70,482</div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100ms">
                <a href="/details.html" class="component-products d-block">
                    <div class="products-thumbnail">
                        <div class="products-images" style="
                      background-image: url('/images/produts-monkey-toys.png');
                    "></div>
                    </div>
                    <div class="products-text">Monkey Toys</div>
                    <div class="products-price">$783</div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection