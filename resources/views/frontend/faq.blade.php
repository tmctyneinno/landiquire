@extends('layouts.app')
@section('contents')


<div class="page-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-5">
                <div class="page-header-title text-center text-md-start">
                    <h1>FAQ</h1>
                </div>
            </div>

            <div class="col-md-6 col-lg-7">
                <nav class="page-header-breadcrumb text-center text-md-end">
                    <ul class="breadcrumb">
                        <li><a href="">Home</a></li>
                        <li class="active"><a href="">FAQ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Area -->


<section class="news-why-choose-area mt-90 mt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-xl-11">
                <!-- Start Why Choose Content -->
                <div class="why-choose-content-wrap mt-md-84 mt-sm-52">
                    <div class="section-title-wrap mb-34">
                        <h2 class="mb-2">Great Jasmine FAQs</h2>
                    </div>

                    <div class="why-choose-content-inner">
                        <div class="accordion" id="chooseAccordion">
                            <!-- Start Why choose Us Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Supersonic demo installation
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#chooseAccordion">
                                    <div class="accordion-body">
                                        <p>No more time wasting in data import. We rocket its speed by improving the
                                            progress: all the pictures will be downloaded first, then copied to
                                            content by folders, and finally other data. This strikingly reduces your
                                            waiting time.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Why choose Us Item -->

                            <!-- Start Why choose Us Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Effortless customization
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#chooseAccordion">
                                    <div class="accordion-body">
                                        <p>There are many people run into trouble when customize their website due
                                            to the complexity of their template. This absolutely will not happen
                                            with Duncan as we created it with a mindset of ease your process.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Why choose Us Item -->

                            <!-- Start Why choose Us Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Powerful Shortcodes
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#chooseAccordion">
                                    <div class="accordion-body">
                                        <p>In establishing process, there may be some complicated tasks. But no
                                            worry as all of those have been solved by Duncan’s effective
                                            shortcodes system, helping you save time and create your site
                                            quickly.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Why choose Us Item -->

                            <!-- Start Why choose Us Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Dedicated customer support
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#chooseAccordion">
                                    <div class="accordion-body">
                                        <p>We focus on our customers and listen to all of their problems which will
                                            be quickly handled by our experienced developers. You will never have
                                            any difficulty building your site as you got us. Save time worrying and
                                            focus on your business.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Why choose Us Item -->

                            <!-- Start Why choose Us Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Well Documented Code
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#chooseAccordion">
                                    <div class="accordion-body">
                                        <p>We focus on our customers and listen to all of their problems which will
                                            be quickly handled by our experienced developers. You will never have
                                            any difficulty building your site as you got us. Save time worrying and
                                            focus on your business.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Why choose Us Item -->
                        </div>
                    </div>
                </div>
                <!-- End Why Choose Content -->
            </div>
        </div>
    </div>
</section>

<div class="p-5"></div>

@endsection