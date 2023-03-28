@extends('layout.master')
@section('title')
About || Rssosa
@endsection
@section('content')

<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">About Us</h1>

                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Committee Page Content Start ==-->
<section id="page-content-wrap">
    <div class="about-page-content-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 m-auto">
                    <!-- Single about text start -->
                    <div class="single-about-text">
                        <span class="year">RSSOSA</span>
                        <img src="assets/img/about-page/1.jpg" alt="About" class="img-fluid img-left">
                        <h2 class="h3">Our History</h2>
                        <p>Remo Secondary School Old Students Association was birthed from Remo Secondary School (The first co-educational school in West Africa). The Association officially came into existence 13 years after the first set of students
                            graduated. The idea of the Association was conceived by a few old students who considered it necessary to create an organization that would embrace the different generations of the school. After a decade of unofficial operations,
                            Remo Secondary School Old Students Association was officially formed in 1961 when a few branches met and agreed to fuse into a national body. This national body has come to be what is now known as Remo Secondary School
                            Old Students Association (RSSOSA). The body was expected to play a dominant role in the life of the School Community and each member of the association. </p>
                        <p>Since its inception, the association has had a total number of 12 presidents, with the current administration being led by Aare Adetola Olaonipekun Emmanuelking. Over the years, following the leadership of great men and women,
                            a lot of positive developments have been recorded in the management and activities of the Association. It goes without saying that for the past 6 decades, RSSOSA as a community has strived to meet and surpass all her expectations.</p>
                    </div>
                    <!-- Single about text End -->

                    <!-- Single about text start -->
                    <div class="single-about-text">
                        <span class="year">RSSOSA</span>
                        <img src="assets/img/about-page/2.jpg" alt="About" class="img-fluid img-right">
                        <h2 class="h3">OUR ACHIEVEMENTS/MILESTONES</h2>
                        <p> RSSOSA has attained several milestones since it began operations in 1961. An understanding of the goals of the association has kept members of the association united in their quest to make our alma mater, Remo Secondary School
                            (RSS) great. Some of these achievements include;
                        <ol>
                            <li>The inauguration of a large number of branches nationwide.
                            </li>
                            <li>Award of prizes and scholarships to outstanding students</li>
                            <li>Periodic donation of books and equipment to the school</li>
                            <li>Renovation of several buildings in the school</li>
                            <li>Building of a world-class National Secretariat </li>
                        </ol>
                        </p>
                    </div>
                    <!-- Single about text End -->

                    <!-- Single about text start -->
                    <div class="single-about-text">
                        <span class="year">RSSOSA</span>
                        <img src="assets/img/about-page/3.jpg" alt="About" class="img-fluid img-left">
                        <h2 class="h3">OUR NEW GENERATION</h2>
                        <p>The Association is heavily invested in the lives of the current students of Remo Secondary School whom we believe are the new generation. The goal is to positively impact in their lives and help them get the most out of their
                            time in RSS. The best is yet to come for the Association and no student of the school will be left out of this transformation. The association is here to inspire the new generation as we usher them into a new phase of their
                            lives, a phase characterized by technological advancement, person growth and development and stability. Some investments that have been made to sustain the academic growth of the students’ include;</p>
                        <ol>
                            <li>Donations of books to the school library</li>
                            <li>Renovations and erection of comfortable hostels and classrooms</li>
                            <li>Hosting of seminars and career talks.</li>
                        </ol>
                        <p>The students of RSS are not only members of the RSS community, but also our children. We are therefore determined to remain in their corner to support their personal and academic growth.</p>
                    </div>
                    <!-- Single about text End -->
                </div>
            </div>
        </div>
    </div>

    <!--== FunFact Area Start ==-->
    <section id="funfact-area">
        <div class="container-fluid">
            <div class="row text-center">
                <!--== Single FunFact Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-funfact-wrap">
                        <div class="funfact-icon">
                            <img src="assets/img/fun-fact/user.svg" alt="Funfact">
                        </div>
                        <div class="funfact-info">
                            <h5 class="funfact-count">{{ $allusers }}</h5>
                            <p>Members</p>
                        </div>
                    </div>
                </div>
                <!--== Single FunFact End ==-->

                <!--== Single FunFact Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-funfact-wrap">
                        <div class="funfact-icon">
                            <img src="assets/img/fun-fact/picture.svg" alt="Funfact">
                        </div>
                        <div class="funfact-info">
                            <h5 class="funfact-count">{{ $allgalleries }}</h5>
                            <p>Photos</p>
                        </div>
                    </div>
                </div>
                <!--== Single FunFact End ==-->

                <!--== Single FunFact Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-funfact-wrap">
                        <div class="funfact-icon">
                            <img src="assets/img/fun-fact/event.svg" alt="Funfact">
                        </div>
                        <div class="funfact-info">
                            <h5><span class="funfact-count">{{ $allevent }}</span>+</h5>
                            <p>Events</p>
                        </div>
                    </div>
                </div>
                <!--== Single FunFact End ==-->

                <!--== Single FunFact Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-funfact-wrap">
                        <div class="funfact-icon">
                            <img src="assets/img/fun-fact/medal.svg" alt="Funfact">
                        </div>
                        <div class="funfact-info">
                            <h5><span class="funfact-count">{{ $allscholarship }}</span>+</h5>
                            <p>Awards</p>
                        </div>
                    </div>
                </div>
                <!--== Single FunFact End ==-->
            </div>
        </div>
    </section>
    <!--== FunFact Area End ==-->

    <div class="our-honorable-commitee section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="about-page-area-title">
                        <h2>Our Honorable Committe</h2>
                    </div>
                </div>
            </div>

            <div class="honorable-committee-list">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <div class="commitee-thumb">
                                <img src="assets/img/committee/1.jpg" class="img-fluid" alt="Committee" />
                            </div>
                            <h3>Aare Adetola Olaonipekun Emmanuelking<span class="committee-deg">National President</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <div class="commitee-thumb">
                                <img src="assets/img/committee/2.jpg" class="img-fluid" alt="Committee" />
                            </div>
                            <h3>Bola Owolabi Oladeinde<span class="committee-deg">Vice President 1</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <div class="commitee-thumb">
                                <img src="assets/img/committee/3.jpg" class="img-fluid" alt="Committee" />
                            </div>
                            <h3>Adebimpe Aka-Monite<span class="committee-deg">Vice President 2</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <div class="commitee-thumb">
                                <img src="assets/img/committee/4.jpg" class="img-fluid" alt="Committee" />
                            </div>
                            <h3>Adeolu Oluwaseyi Oyekan<span class="committee-deg">General Secretary</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <div class="commitee-thumb">
                                <img src="assets/img/committee/5.jpg" class="img-fluid" alt="Committee" />
                            </div>
                            <h3>Sakirat Abisola Yakubu-Sulaimon<span class="committee-deg">Treasurer</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <div class="commitee-thumb">
                                <img src="assets/img/committee/6.jpg" class="img-fluid" alt="Committee" />
                            </div>
                            <h3>Tikare Kamoru Adeyiga<span class="committee-deg">Financial Secretary</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <div class="commitee-thumb">
                                <img src="assets/img/committee/7.jpg" class="img-fluid" alt="Committee" />
                            </div>
                            <h3>Sanyaolu Remi Balogun<span class="committee-deg">Social & Publicity Secretary</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <div class="commitee-thumb">
                                <img src="assets/img/committee/8.jpg" class="img-fluid" alt="Committee" />
                            </div>
                            <h3>Alhaji Saliu Isola Aina<span class="committee-deg">Home Secretary </span></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <div class="commitee-thumb">
                                <img src="assets/img/committee/9.jpg" class="img-fluid" alt="Committee" />
                            </div>
                            <h3>Kofoworola Kola Ayeola<span class="committee-deg">Assistant General Secretary 1</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <div class="commitee-thumb">
                                <img src="assets/img/committee/10.jpg" class="img-fluid" alt="Committee" />
                            </div>
                            <h3>Nihinlola Olutoyin Buraimo<span class="committee-deg">Assistant General Secretary 2</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <div class="commitee-thumb">
                                <img src="assets/img/committee/11.jpg" class="img-fluid" alt="Committee" />
                            </div>
                            <h3>Temitope Elijah<span class="committee-deg">Assistant Publicity/Social Secretary 1</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <div class="commitee-thumb">
                                <img src="assets/img/committee/12.jpg" class="img-fluid" alt="Committee" />
                            </div>
                            <h3>Adeola Ayoola Sosanwo<span class="committee-deg">Ex Officio 1 </span></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <div class="commitee-thumb">
                                <img src="assets/img/committee/13.jpg" class="img-fluid" alt="Committee" />
                            </div>
                            <h3>Olumide Michael Oredeko<span class="committee-deg">Ex Officio 2</span></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-committee-member">
                            <div class="commitee-thumb">
                                <img src="assets/img/committee/14.jpg" class="img-fluid" alt="Committee" />
                            </div>
                            <h3>Adewale Musediq Sosanya<span class="committee-deg">Ex Officio 3 </span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="people-to-say section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="about-page-area-title">
                        <h2>Some Speech About Us</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="people-to-say-wrapper owl-carousel">
                        <!-- Single People Testimonial -->
                        <div class="single-testimonial-wrap">
                            <div class="people-thumb">
                                <img src="https://png.pngtree.com/png-vector/20191101/ourlarge/pngtree-male-avatar-simple-cartoon-design-png-image_1934458.jpg" alt="Alumni" class="img-fluid" />
                            </div>
                            <i class="quote-icon"></i>
                            <p style="font-size: 14px;">As much as it ensure the comfortability, development and maintain the high standards & quality of the school and its students, the Old Students are ready to give their all.
                                The old student have made us proud and we are focused and highly motivated to do the same when the time comes. <br>Up School, Up RSS </p>
                            <h4>Ajiboye Paul<span class="people-deg">(Head boy, RSS SNR)</span></h4>
                        </div>
                        <!-- Single People Testimonial -->

                        <!-- Single People Testimonial -->
                        <div class="single-testimonial-wrap">
                            <div class="people-thumb">
                                <img src="https://png.pngtree.com/png-vector/20191101/ourlarge/pngtree-male-avatar-simple-cartoon-design-png-image_1934458.jpg" alt="" class="img-fluid">
                            </div>
                            <i class="quote-icon"></i>
                            <p style="font-size: 14px;">Before my arrival as the principal of the school, the old students has been doing wonderful works in the school especially when it comes to motivating students and teachers. The old students always arise to the needs of the school and on behalf of the school, I give kudos to the old students and I pray God will not disappoint them in any way </p>
                            <h4>Mrs Saibu V. O.
                                <span class="people-deg">Principal (Snr)</span>
                            </h4>
                        </div>
                        <!-- Single People Testimonial -->

                        <!-- Single People Testimonial -->
                        <div class="single-testimonial-wrap">
                            <div class="people-thumb">
                                <img src="https://png.pngtree.com/png-vector/20191101/ourlarge/pngtree-male-avatar-simple-cartoon-design-png-image_1934458.jpg" alt="" class="img-fluid" />
                            </div>
                            <i class="quote-icon"></i>
                            <p style="font-size: 14px;">The Old Students' Association had made concerted efforts to improve the school on all levels. Every class set group contributes to the physical, emotional, and educational growth of the school, and the impact of the old student body can be seen in providing good and qualitative teachers to supplement state government efforts, provision of lockers and chairs for students' use, and construction of more classrooms to alleviate overcrowding in various classes. I pray for more strength, divine wisdom, and provision, as well as more cooperation, to elevate our excellent school to an even higher level. We lead, we lead the way. I'm proud to be an old student of this giant school. <br>UP SCHOOL! UP RSS! </p>
                            <h4>Mrs Ganiyat Omotola Awoyemi <span class="people-deg">(RSSOSA Member 75/80 Set)</span></h4>
                        </div>
                        <!-- Single People Testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Committee Page Content End ==-->

@endsection