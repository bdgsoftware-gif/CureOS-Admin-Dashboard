@extends('layouts.app', ['title' => 'Swiper', 'subTitle' => 'Extended', 'pageTitle' => 'Swiper'])

@section('css')
    @vite(['node_modules/swiper/swiper-bundle.min.css'])
@endsection

@section('content')
    <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-6">
        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Default Swiper</h4>
                <!-- Swiper -->
                <div class="swiper default-swiper rounded">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/small-1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div><!-- end p-6 -->
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Navigation & Pagination Swiper</h4>
                <!-- Swiper -->
                <div class="swiper navigation-swiper rounded">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/small-4.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-5.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-6.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-next rtl:rotate-180"></div>
                    <div class="swiper-button-prev rtl:rotate-180"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Pagination Dynamic Swiper</h4>
                <!-- Swiper -->
                <div class="swiper pagination-dynamic-swiper rounded">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/small-2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-4.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination dynamic-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Pagination Fraction Swiper</h4>
                <!-- Swiper -->
                <div class="swiper pagination-fraction-swiper rounded">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/small-5.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-3.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-6.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-next rtl:rotate-180"></div>
                    <div class="swiper-button-prev rtl:rotate-180"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Pagination Custom Swiper</h4>
                <!-- Swiper -->
                <div class="swiper pagination-custom-swiper rounded">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/small-2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-3.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-4.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination pagination-custom"></div>
                </div>
            </div><!-- end p-6 -->
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Pagination Progress Swiper</h4>
                <!-- Swiper -->
                <div class="swiper pagination-progress-swiper rounded">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/small-5.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-6.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-7.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-next rtl:rotate-180"></div>
                    <div class="swiper-button-prev rtl:rotate-180"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Scrollbar Swiper</h4>
                <!-- Swiper -->
                <div class="swiper pagination-scrollbar-swiper rounded">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/small-7.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-4.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-next rtl:rotate-180"></div>
                    <div class="swiper-button-prev rtl:rotate-180"></div>
                    <div class="swiper-scrollbar"></div>
                </div>
            </div><!-- end p-6 -->
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Vertical Swiper</h4>
                <!-- Swiper -->
                <div class="swiper vertical-swiper rounded" style="height: 324px;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/small-6.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Mousewheel Control Swiper</h4>

                <!-- Swiper -->
                <div class="swiper mousewheel-control-swiper rounded" style="height: 324px;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/small-3.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-4.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-5.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Effect Fade Swiper</h4>
                <!-- Swiper -->
                <div class="swiper effect-fade-swiper rounded">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/small-6.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-7.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-4.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Effect Creative Swiper</h4>
                <!-- Swiper -->
                <div class="swiper effect-creative-swiper rounded">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/small-2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-6.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-7.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div> <!-- end card -->

        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Effect Flip Swiper</h4>
                <!-- Swiper -->
                <div class="swiper effect-flip-swiper rounded">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/small-4.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/small-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div> <!-- end card -->
    </div><!--end row-->
@endsection

@section('script')
    @vite(['resources/js/pages/extended-swiper.js'])
@endsection
