   <!-- site settings -->
   <?php
   include '../../admin/config.php';

                 $wtsup = mysqli_query($conn,"select * from sitesetting where name_of_link='حسابنا على واتساب'");
                 $wt = mysqli_fetch_assoc($wtsup);
                 ?>
                 <?php
                 $twitter = mysqli_query($conn,"select * from sitesetting where name_of_link='حسابنا على تويتر'");
                 $tw = mysqli_fetch_assoc($twitter);
                 ?>
                  <?php
                 $instagram = mysqli_query($conn,"select * from sitesetting where name_of_link='حسابنا ع انستا	'");
                 $insta = mysqli_fetch_assoc($instagram);
                 ?>
                  <?php
                 $facebook = mysqli_query($conn,"select * from sitesetting where name_of_link='حسابنا ع فيسبوك'");
                 $face = mysqli_fetch_assoc($facebook);
                 ?>
                <?php
                 $em = mysqli_query($conn,"select * from sitesetting where name_of_link='إيميل الموقع'");
                 $email = mysqli_fetch_assoc($em);
                 ?>
                 <?php
                 $a= mysqli_query($conn,"select * from sitesetting where name_of_link='الرقم الضريبي'");
                 $aa=mysqli_fetch_assoc($a);
                 ?>
                <!-- end -->
<!--costumers reviews  -->
<section class="py-4 text-center bg-brand">
    <div class="container">
        <h2 class="section--title mb-2 text-white">آراء العملاء</h2>
        <div class="row testimonails-listing">
                <div class="testimonials-item">
                            <blockquote>
                                        <ul class='rating'>
                                                    <li>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                    </li>
                                        </ul>
                                        <div class="testimonials-item__content">
                                                    <p> اسعار تنافسية ومنتجات اصلية يشكرون عليها </p>
                                        </div>
                                        <cite class="d-flex">
                                                    <img data-src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" alt="" src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" class="lazyload">
                                                    <div class="text-right">
                                                                <div>
                                                                            <span class="testimonials-item__author">
                                                                                        مشعل العتيبي
                                                                            </span>
                                                                </div>
                                                                <span class="testimonials-item__location">
                                                                            الرياض
                                                                </span>
                                                    </div>
                                        </cite>
                            </blockquote>
                </div>
                <div class="testimonials-item">
                            <blockquote>
                                        <ul class='rating'>
                                                    <li>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                    </li>
                                        </ul>
                                        <div class="testimonials-item__content">
                                                    <p> </p>
                                        </div>
                                        <cite class="d-flex">
                                        <img data-src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" alt="" src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" class="lazyload">
                                                    <div class="text-right">
                                                                <div>
                                                                            <span class="testimonials-item__author">
                                                                                        Thamer Almutiri
                                                                            </span>
                                                                </div>
                                                                <span class="testimonials-item__location">
                                                                            رابغ
                                                                </span>
                                                    </div>
                                        </cite>
                            </blockquote>
                </div>
                <div class="testimonials-item">
                            <blockquote>
                                        <ul class='rating'>
                                                    <li>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star-o'></i>
                                                    </li>
                                        </ul>
                                        <div class="testimonials-item__content">
                                                    <p> شكرا لكم . منتجات جيدة وخدمة راقية </p>
                                        </div>
                                        <cite class="d-flex">
                                        <img data-src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" alt="" src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" class="lazyload">
                                                    <div class="text-right">
                                                                <div>
                                                                            <span class="testimonials-item__author">
                                                                                        عبدالله الثنيان
                                                                            </span>
                                                                </div>
                                                                <span class="testimonials-item__location">
                                                                            المزاحمية
                                                                </span>
                                                    </div>
                                        </cite>
                            </blockquote>
                </div>
                <div class="testimonials-item">
                            <blockquote>
                                        <ul class='rating'>
                                                    <li>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                    </li>
                                        </ul>
                                        <div class="testimonials-item__content">
                                                    <p> ممتاز </p>
                                        </div>
                                        <cite class="d-flex">
                                        <img data-src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" alt="" src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" class="lazyload">
                                                    <div class="text-right">
                                                                <div>
                                                                            <span class="testimonials-item__author">
                                                                                        سلطان العنزي
                                                                            </span>
                                                                </div>
                                                                <span class="testimonials-item__location">
                                                                            القصيم
                                                                </span>
                                                    </div>
                                        </cite>
                            </blockquote>
                </div>
                <div class="testimonials-item">
                            <blockquote>
                                        <ul class='rating'>
                                                    <li>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                    </li>
                                        </ul>
                                        <div class="testimonials-item__content">
                                                    <p> اول تجربه للطلب من هالموقع جميل وسرعه الاستجابة لديهم وسرعه التوصيل بالتوفيق </p>
                                        </div>
                                        <cite class="d-flex">
                                        <img data-src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" alt="" src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" class="lazyload">
                                                    <div class="text-right">
                                                                <div>
                                                                            <span class="testimonials-item__author">
                                                                                        ريوف العتيبي
                                                                            </span>
                                                                </div>
                                                                <span class="testimonials-item__location">
                                                                            بقيق
                                                                </span>
                                                    </div>
                                        </cite>
                            </blockquote>
                </div>
                <div class="testimonials-item">
                            <blockquote>
                                        <ul class='rating'>
                                                    <li>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                    </li>
                                        </ul>
                                        <div class="testimonials-item__content">
                                                    <p> متتاز </p>
                                        </div>
                                        <cite class="d-flex">
                                        <img data-src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" alt="" src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" class="lazyload">
                                                    <div class="text-right">
                                                                <div>
                                                                            <span class="testimonials-item__author">
                                                                                        عبدالكريم اللاحم
                                                                            </span>
                                                                </div>
                                                                <span class="testimonials-item__location">
                                                                            بريدة
                                                                </span>
                                                    </div>
                                        </cite>
                            </blockquote>
                </div>
                <div class="testimonials-item">
                            <blockquote>
                                        <ul class='rating'>
                                                    <li>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star-o'></i>
                                                    </li>
                                        </ul>
                                        <div class="testimonials-item__content">
                                                    <p> Neis </p>
                                        </div>
                                        <cite class="d-flex">
                                        <img data-src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" alt="" src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" class="lazyload">
                                                    <div class="text-right">
                                                                <div>
                                                                            <span class="testimonials-item__author">
                                                                                        عناد المطيري
                                                                            </span>
                                                                </div>
                                                                <span class="testimonials-item__location">
                                                                            الرس
                                                                </span>
                                                    </div>
                                        </cite>
                            </blockquote>
                </div>
                <div class="testimonials-item">
                            <blockquote>
                                        <ul class='rating'>
                                                    <li>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                                <i class='sicon-star2'></i>
                                                    </li>
                                        </ul>
                                        <div class="testimonials-item__content">
                                                    <p> جميل جدا وتعاملك جميل وسريع في التسليم </p>
                                        </div>
                                        <cite class="d-flex">
                                        <img data-src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" alt="" src="https://avatars.mds.yandex.net/i?id=7ff99f7f667d11d0c4351b407f83274988f96a07-5161097-images-thumbs&n=13" class="lazyload">
                                                    <div class="text-right">
                                                                <div>
                                                                            <span class="testimonials-item__author">
                                                                                        طارق الشراري
                                                                            </span>
                                                                </div>
                                                                <span class="testimonials-item__location">
                                                                            القريات
                                                                </span>
                                                    </div>
                                        </cite>
                            </blockquote>
                </div>
        </div>
    </div>
</section>
  <!--end of costumers reviews  -->


    <script src="../../theme/code.jquery.com/jquery-3.3.1.js" type="217ebb6a9117e6efb914a3a4-text/javascript"></script>
    <meta charset="UTF-8">



    <script type="217ebb6a9117e6efb914a3a4-text/javascript" src="../../theme/smartarget.online/loadercd92.js?u=fd08f4cde818682ec83f3da8f89ae8c64edfb165&amp;source=salla_popup"></script>
    <script src="../../theme/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="217ebb6a9117e6efb914a3a4-|49" defer=""></script>


    <script defer="" src="../../beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71c5d8355a9dcd71","token":"0ba4cd7067784c07aa8f5f733dd0f1a2","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>

      <!-- end chat bot -->
   <!-- end of whats up icon -->
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-be563f52-43ea-4dd1-9800-41c30438e12c"></div>
<!-- end of whats up icon  -->

<!-- start chat bot -->

    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="footer-title">
                            <span>من نحن</span>
                        </h2>
                        <p>نهتم ونحرص دائم على رضاء العميل ونطمح للوصول الى أكبر شريحة من العملاء</p>
                        <div class="store-contact">
                            <a href="<?php echo $wt['link']?>" rel="nofollow" style="direction:ltr" target="_blank">
                                <i class="sicon-whatsapp2"></i>
                                واتساب
                            </a>&nbsp;
                            <a href="">
                                <i class="sicon-mail"></i>
                                ايميل:<?php echo $email['link']?>
                            </a>&nbsp;
                        </div>
                        <div class="store-certificate">
                            <a href="#">
                                <img src="../../theme/assets.salla.cloud/themes/default/assets/images/maroof2d19.png?v=v1.4.875" alt=" ">
                            </a>
                            <a href="#" class="tax-certificate pdf" style="display: none">
                                <img src="../../theme/assets.salla.cloud/themes/default/assets/images/tax2d19.png?v=v1.4.875" alt=" ">
                            </a>
                            <a href="#" class="tax-certificate image ">
                                <img src="../../theme/assets.salla.cloud/themes/default/assets/images/tax2d19.png?v=v1.4.875" alt=" ">
                            </a>
                            <span class="font-13">
                                الرقم الضريبي:
                                <b class="d-inline-block text-plain v-align-middle">
                                    <?php echo $aa['link']?>
                                </b>
                            </span>
                        </div>
                        <div class="modal fade" id="tax_certificate_modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header no-border">
                                        <p class="mb-15 font-16 text-bold">
                                            الرقم الضريبي:
                                            <?php echo $aa['link']?>
                                        </p>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img class="w-100" src="../../theme/cdn.salla.sa/WlXGP/OZHA1EfusZu1WYxzYRvC222JhCKi083mmOg1FHIE.jpg" alt="302277430400003">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h2 class="footer-title"><span>روابط مهمة</span></h2>
                        <ul class="footer-links">
                            <li><a href="../../Home/TermsConditions.php"> سياسة الضمان والاستبدال </a></li>
                            <li><a href="../../Home/WorkTimes.php"> اوقات العمل </a></li>
                            <li><a href="../../Home/RefundAndCancleOrders.php"> استرجاع الطلبات / الغاء الطلب / استرجاع المبالغ </a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h2 class="footer-title">
                            <span>تواصل معنا</span>
                        </h2>
                        <ul class="social clearfix">
                            <li class="social__item">
                                <a href="<?php echo $face['link']?>" target="_blank">
                                    <span class="sicon-facebook"></span>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="<?php echo $tw['link']?>" target="_blank">
                                    <span class="sicon-twitter"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-sub">
            <div class="container">
                <div class="fs-cont">
                    <div class="fs-rights">
                        <p class="mb-4 mb-md-0">
                        </p>
                    </div>
                    <div class="fs-payment">
                        <div class="icons">
                            <div class="store-certificate">
                                <a href="#">
                                    <img src="../../theme/assets.salla.cloud/themes/default/assets/images/maroof2d19.png?v=v1.4.875" alt=" ">
                                </a>
                                <a href="#" class="tax-certificate pdf" style="display: none">
                                    <img src="../../theme/assets.salla.cloud/themes/default/assets/images/tax2d19.png?v=v1.4.875" alt=" ">
                                </a>
                                <a href="#" class="tax-certificate image ">
                                    <img src="../../theme/assets.salla.cloud/themes/default/assets/images/tax2d19.png?v=v1.4.875" alt=" ">
                                </a>
                                <span class="font-13">
                                    الرقم الضريبي:
                                    <b class="d-inline-block text-plain v-align-middle">
                                    <?php echo $aa['link']?>
                                    </b>
                                </span>
                            </div>
                            <div class="modal fade" id="tax_certificate_modal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-border">
                                            <p class="mb-15 font-16 text-bold">
                                                الرقم الضريبي:
                                                <?php echo $aa['link']?>
                                            </p>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img class="w-100" src="../../theme/cdn.salla.sa/WlXGP/OZHA1EfusZu1WYxzYRvC222JhCKi083mmOg1FHIE.jpg" alt="302277430400003">
                                        </div>
                                    </div>
                                </div>
                            </div> <div>
                                <img src="../../theme/assets.salla.cloud/themes/default/assets/images/mada2d19.png?v=v1.4.875" alt=" ">
                                <img src="../../theme/assets.salla.cloud/themes/default/assets/images/cc2d19.png?v=v1.4.875" alt=" ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>