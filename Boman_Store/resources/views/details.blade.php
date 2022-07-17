@extends('layouts.main-2')
@section('container')
<div class="page-content page-details">
    <section class="store-breadcrumbs" data-aos="fade-out" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Product details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="/vendor/vue/vue.js"></script>
<script>
    var gallery = new Vue({
        el: "#gallery",
        mounted() {
            AOS.init();
        },
        data: {
            activePhoto: 1,
            photos: [{
                    id: 1,
                    url: "/images/product-detail-2.jpg",
                },
                {
                    id: 2,
                    url: "/images/product-detail-3.jpg",
                },
                {
                    id: 3,
                    url: "/images/product-detail-4.jpg",
                },
                {
                    id: 4,
                    url: "/images/product-detail-5.jpg",
                },
            ],
        },
        methods: {
            changeActive(id) {
                this.changePhoto = id;
            },
        },
    });
</script>
@endsection