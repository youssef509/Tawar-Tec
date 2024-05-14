@extends('layouts.app')
@section('page-title')
<title>Home | Laravel</title>
@endsection

@section('page-content')
    

                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="header-width header-main-content-two desk-ml-auto">
                                <h4>طور تك شريكك الرقمي</h4>
                                <h1>احصل علي خطط الاستضافة بداءْ من<small>$</small>2.99<span>/شهريا</span></h1>
                                <p>احصل علي استضافة اسرع مرتين من اي مزود خدمة اخر مع دعم فني 24/7 علي مدار ايام الاسبوع</p>
                                <ul class="section-button">
                                    <li><button class="btn btn-gradient">شراء الان</button></li>
                                    <li><a href="https://www.youtube.com/watch?v=YHq8SWAkzG8" class="btn" id="video-popup">نفاصيل اكثر</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="header-content-image">
                                <img src="{{ asset('assets/images/header-clipart.webp')}}" alt="clipart">
                            </div>
                        </div>
                    </div>
                </div>
        </header>
        <!-- .end header -->
        @include('components.domain')
        <!-- service-section -->
        <section class="service-section mt-185 pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <small>الاستضافات</small>
                    <h2>الاستضافات & الخدمات الاخري</h2>
                    <p>بجانب خدمات الاستضافات المتنوعة واسماء النطاقات نقدم عدد من الخدمات الاخري التي قد تحتاجها وتوفر لك الوقت والتكلفة الكلية لمشروعك </p>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="feature-item fluid-height">
                            <div class="feature-item-inner full-height">
                                <div class="feature-item-thumb">
                                    <i class="flaticon-cloud-computing"></i>
                                </div>
                                <div class="feature-item-content">
                                    <h3>استضافة المواقع- الاقتصادية</h3>
                                    <p>استضافتنا الأكثر اقتصاداً وتوفيراً — تناسب مواقع الويب البسيطة</p>
                                    <p><a href="dedicated-hosting.html" class="gradient-text">مزيد من التفاصيل <span><i class='bx bx-chevron-right'></i></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="feature-item fluid-height">
                            <div class="feature-item-inner full-height">
                                <div class="feature-item-thumb">
                                    <i class="flaticon-cloud-hosting"></i>
                                </div>
                                <div class="feature-item-content">
                                    <h3>استضافة المواقع- الاعمال</h3>
                                    <p>استضافتنا اكبر مساحة واكثر وتوفيراً — تناسب مواقع الويب الكبيرة ومشاريع الاعمال الكبيرة. تشمل الخطط المنتقاة نطاقاً وبريداً إلكترونياً مجانيين</p>
                                    <p><a href="cloud-hosting.html" class="gradient-text">مزيد من التفاصيل <span><i class='bx bx-chevron-right'></i></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="feature-item fluid-height">
                            <div class="feature-item-inner full-height">
                                <div class="feature-item-thumb">
                                    <i class="flaticon-hosting-1"></i>
                                </div>
                                <div class="feature-item-content">
                                    <h3>استضافة VPS</h3>
                                    <p>من أجل إدارة عدة مشروعات. احصل على إمكانية الوصول إلى الجذر بالكامل والنسخ الاحتياطية اليومية المؤتمتة والنسخ الاحتياطية عند الطلب. عدد زيارات غير محدود ووقت تشغيل بنسبة 99%.</p>
                                    <p><a href="vps-hosting.html" class="gradient-text">مزيد من التفاصيل <span><i class='bx bx-chevron-right'></i></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="feature-item fluid-height">
                            <div class="feature-item-inner full-height">
                                <div class="feature-item-thumb">
                                    <i class="flaticon-hosting-services-1"></i>
                                </div>
                                <div class="feature-item-content">
                                    <h3>استضافة ووردبريس</h3>
                                    <p>موقع ووردبريس مُدار بالكامل مع حماية أمنية مدمجة وعمليات نسخ احتياطي يومية وبرمجيات ومكونات إضافية من ووردبريس يتم تحديثها تلقائياً.</p>
                                    <p><a href="wordpress-hosting.html" class="gradient-text">مزيد من التفاصيل<span><i class='bx bx-chevron-right'></i></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="feature-item fluid-height">
                            <div class="feature-item-inner full-height">
                                <div class="feature-item-thumb">
                                    <i class="flaticon-domain"></i>
                                </div>
                                <div class="feature-item-content">
                                    <h3>تطوير المواقع</h3>
                                    <p>خدمة اضافية مقدمة من فريق طور تك لتوفير الوقت والجهد والتكلفة لانشاء موقع الويب الخاص بك</p>
                                    <p><a href="domain-name.html" class="gradient-text">مزيد من التفاصيل<span><i class='bx bx-chevron-right'></i></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="feature-item fluid-height">
                            <div class="feature-item-inner full-height">
                                <div class="feature-item-thumb">
                                    <i class="flaticon-database"></i>
                                </div>
                                <div class="feature-item-content">
                                    <h3>استشارة تقنية</h3>
                                    <p>فريق طور تك معك خطوة بخطوة لتقديم الدعم والاستشارة المجانية لك بكل ما يتعلق بخدماتنا وغيره من الامور التقنية</p>
                                    <p><a href="shared-hosting.html" class="gradient-text">مزيد من التفاصيل<span><i class='bx bx-chevron-right'></i></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- .end service-section -->
       
        <!-- choose-section -->
        <section class="choose-section pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <small>نحن الافضل</small>
                    <h2>لماذا نحن</h2>
                    <p>نحن نسعى لتحقيق رؤيتكم الرقمية من خلال توفير خدمات الاستضافة الموثوقة التي تضمن استمرارية عملكم على الإنترنت، بالإضافة إلى تصميم مواقع وتطبيقات تفاعلية ومتجاوبة تلبي احتياجاتكم وتفوق توقعاتكم.</p>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="box-card fluid-height">
                            <div class="box-card-inner box-card-inner-2 full-height border-around">
                                <div class="box-number"><span>01</span></div>
                                <div class="box-card-content text-center">
                                    <div class="box-card-thumb">
                                        <img src="assets/images/choose-1.png" alt="choose-us">
                                    </div>
                                    <div class="box-card-details">
                                        <h3>دعم مخصص 24/7</h3>
                                        <p>دعم فني غير مرتبط بموعد محدد,علي مدار ايام الاسبوع يمكنك التواصل معنا للاجابة علي استشاراتكم وتقديم الحلول في المواضيع المطلوبة</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="box-card fluid-height">
                            <div class="box-card-inner box-card-inner-2 full-height border-around">
                                <div class="box-number"><span>02</span></div>
                                <div class="box-card-content text-center">
                                    <div class="box-card-thumb">
                                        <img src="assets/images/choose-2.png" alt="choose-us">
                                    </div>
                                    <div class="box-card-details">
                                        <h3>أمن البيانات</h3>
                                        <p>نقدم حلول استضافة على مستوى عالمي مع تقنيات الافتراض الحديثة وعزل الحسابات لضمان الأمان الشامل. تشمل خدماتنا مراقبة شاملة للخوادم والمواقع، وحماية ضد الهجمات الآلية وحماية البريد الإلكتروني، مما يضمن سلامة بياناتك واستمرارية موقعك على الإنترنت.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 offset-md-3 offset-lg-0">
                        <div class="box-card fluid-height">
                            <div class="box-card-inner box-card-inner-2 full-height border-around">
                                <div class="box-number"><span>03</span></div>
                                <div class="box-card-content text-center">
                                    <div class="box-card-thumb">
                                        <img src="assets/images/choose-3.png" alt="choose-us">
                                    </div>
                                    <div class="box-card-details">
                                        <h3>خوادم سريعة وموثوقة</h3>
                                        <p>في خوادمنا نختار فقط أفضل الأجهزة. جميع خوادمنا مجهزة بأقراص الحالة الصلبة (SSD) وتعمل بأحدث معالجات Xeon.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- .end choose-section -->
        
        <!-- support-section -->
        <div class="support-section blue-gradient pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6 col-lg-6 pb-30">
                        <div class="about-content-item">
                            <div class="about-content-data support-content-data">
                                <div class="about-text">
                                    <h3>فريقنا هنا لمساعدتك 24/7</h3>
                                    <p>فريقنا يتكون من محترفين مؤهلين بشكل عالي ، يتميزون بخلفيات متنوعة تتجاوز التقاليد، مما يجعلهم مزيجًا قويًا يوفر حلولًا قيمة للوجود على الويب. إنهم جميعًا ملتزمون بتقديم خدمة لا مثيل لها لعملائنا وتلبية احتياجاتهم. </p>
                                </div>
                                <ul class="about-list">
                                    <li>
                                        <div class="about-list-icon"><i class="flaticon-phone-call"></i></div>
                                        <div class="about-list-content">
                                            <h3>Call for support</h3>
                                            <p><a href="tel:678-215-7765">+678-215-7765</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-5 offset-lg-1 pb-30">
                        <div class="about-content-item">
                            <div class="about-content-image">
                                <img src="assets/images/support.webp" alt="support">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .end support-section -->
        <!-- pricing-section -->
        <section class="pricing-section p-tb-100">
            <div class="container">
                <div class="section-title">
                    <small>Pricing plan</small>
                    <h2>Web hosting prices</h2>
                    <p><a href="pricing.html">See plan</a> Lorem ipsum dolor sit amet</p>
                </div>
                <div class="row m-0">
                    <div class="col-sm-12 col-md-12 col-lg-4 p-0 default-pricing-mt">
                        <div class="pricing-item default-pricing">
                            <div class="pricing-item-header blue-gradient">
                                <h3>Regular</h3>
                                <div class="pricing-header-icon">
                                    <div class="pricing-icon-inner">
                                        <i class="flaticon-web-hosting"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-item-amount bg-off-white">
                                <p>Starting at</p>
                                <h4 class="pricing-item-amount-number"><small>$</small>40.99<span>/Month</span></h4>
                            </div>
                            <div class="pricing-item-body">
                                <ul class="pricing-body-list">
                                    <li>
                                        <span class="pricing-check-icon"><i class="flaticon-check"></i></span>
                                        26 GB bandwidth
                                        <span class="pricing-info-icon" data-bs-toggle="tooltip" data-placement="bottom" title="26 GB bandwidth"><i class='bx bxs-info-circle'></i></span>
                                    </li>
                                    <li>
                                        <span class="pricing-check-icon"><i class="flaticon-check"></i></span>
                                        1 website
                                    </li>
                                    <li>
                                        <span class="pricing-check-icon"><i class="flaticon-check"></i></span>
                                        Unmetered websites
                                        <span class="pricing-info-icon" data-bs-toggle="tooltip" data-placement="bottom" title="Unmetered websites"><i class='bx bxs-info-circle'></i></span>
                                    </li>
                                    <li>
                                        <span class="pricing-check-icon"><i class="flaticon-check"></i></span>
                                        Professional email 1-year trial
                                        <span class="pricing-info-icon" data-bs-toggle="tooltip" data-placement="bottom" title="Professional email 1-year trial"><i class='bx bxs-info-circle'></i></span>
                                    </li>
                                </ul>
                                <a href="cart.html" class="btn btn-gradient btn-pill">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 p-0 default-pricing-mt">
                        <div class="pricing-item default-pricing">
                            <div class="pricing-item-header blue-gradient">
                                <h3>Standard</h3>
                                <div class="pricing-header-icon">
                                    <div class="pricing-icon-inner">
                                        <i class="flaticon-hosting-services"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-item-amount bg-off-white">
                                <p>Starting at</p>
                                <h4 class="pricing-item-amount-number"><small>$</small>55.99<span>/Month</span></h4>
                            </div>
                            <div class="pricing-item-body">
                                <ul class="pricing-body-list">
                                    <li>
                                        <span class="pricing-check-icon"><i class="flaticon-check"></i></span>
                                        30 GB bandwidth
                                        <span class="pricing-info-icon" data-bs-toggle="tooltip" data-placement="bottom" title="30 GB bandwidth"><i class='bx bxs-info-circle'></i></span>
                                    </li>
                                    <li>
                                        <span class="pricing-check-icon"><i class="flaticon-check"></i></span>
                                        2 websites
                                    </li>
                                    <li>
                                        <span class="pricing-check-icon"><i class="flaticon-check"></i></span>
                                        Unmetered websites
                                        <span class="pricing-info-icon" data-bs-toggle="tooltip" data-placement="bottom" title="Unmetered websites"><i class='bx bxs-info-circle'></i></span>
                                    </li>
                                    <li>
                                        <span class="pricing-check-icon"><i class="flaticon-check"></i></span>
                                        Professional email 1-year trial
                                        <span class="pricing-info-icon" data-bs-toggle="tooltip" data-placement="bottom" title="Professional email 1-year trial"><i class='bx bxs-info-circle'></i></span>
                                    </li>
                                    <li>
                                        <span class="pricing-check-icon"><i class="flaticon-check"></i></span>
                                        Free domain annual trial
                                        <span class="pricing-info-icon" data-bs-toggle="tooltip" data-placement="bottom" title="Free domain annual trial"><i class='bx bxs-info-circle'></i></span>
                                    </li>
                                </ul>
                                <a href="cart.html" class="btn btn-gradient btn-pill">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 p-0 default-pricing-mt">
                        <div class="pricing-item default-pricing">
                            <div class="pricing-item-header blue-gradient">
                                <h3>Premium</h3>
                                <div class="pricing-header-icon">
                                    <div class="pricing-icon-inner">
                                        <i class="flaticon-hosting"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-item-amount bg-off-white">
                                <p>Starting at</p>
                                <h4 class="pricing-item-amount-number"><small>$</small>75.80<span>/Month</span></h4>
                            </div>
                            <div class="pricing-item-body">
                                <ul class="pricing-body-list">
                                    <li>
                                        <span class="pricing-check-icon"><i class="flaticon-check"></i></span>
                                        50 GB bandwidth
                                        <span class="pricing-info-icon" data-bs-toggle="tooltip" data-placement="bottom" title="20 GB bandwidth"><i class='bx bxs-info-circle'></i></span>
                                    </li>
                                    <li>
                                        <span class="pricing-check-icon"><i class="flaticon-check"></i></span>
                                        5 websites
                                    </li>
                                    <li>
                                        <span class="pricing-check-icon"><i class="flaticon-check"></i></span>
                                        Unmetered websites
                                        <span class="pricing-info-icon" data-bs-toggle="tooltip" data-placement="bottom" title="Unmetered websites"><i class='bx bxs-info-circle'></i></span>
                                    </li>
                                    <li>
                                        <span class="pricing-check-icon"><i class="flaticon-check"></i></span>
                                        Professional email 1.5-years trial
                                        <span class="pricing-info-icon" data-bs-toggle="tooltip" data-placement="bottom" title="Professional email 1.5-year trial"><i class='bx bxs-info-circle'></i></span>
                                    </li>
                                </ul>
                                <a href="cart.html" class="btn btn-gradient btn-pill">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- .end pricing-section -->
        
        <!-- logo-section -->
        <div class="logo-section bg-off-white p-tb-100">
            <div class="container">
                <div class="logo-slider owl-carousel">
                    <div class="item">
                        <img src="assets/images/logo-1.png" alt="logo">
                    </div>
                    <div class="item">
                        <img src="assets/images/logo-2.png" alt="logo">
                    </div>
                    <div class="item">
                        <img src="assets/images/logo-3.png" alt="logo">
                    </div>
                    <div class="item">
                        <img src="assets/images/logo-4.png" alt="logo">
                    </div>
                    <div class="item">
                        <img src="assets/images/logo-5.png" alt="logo">
                    </div>
                </div>
            </div>
        </div>
        <!-- .end logo-section -->
@endsection