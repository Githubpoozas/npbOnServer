<?php
/**
* Template Name: noproblem home template
* Description: noproblem home template
*/ 
?>
    <!-- header banner -->
    <div class="header__banner">
	<img src=" <?php echo content_url(); ?>/themes/twentytwenty/assets/images/home/d1.1-01.jpg" alt="" >
    </div>
<?php
get_header();
?>

<main id="site-content" role="main">


    <!-- slide -->
    <section class="home__section-swiper u-margin-bottom-small underNav">
        <!-- Swiper -->
        <div class="swiper-container swiper-container__slide1">
          <ul class="swiper-wrapper swiper-wrapper__slide1">
            <!-- video from youtube -->
            <!-- <li class="swiper-slide swiper-slide__slide1" id="youtube"></li> -->
            <!-- video from local -->
            <!-- <li class="swiper-slide swiper-slide__slide1">
              <video autoplay muted playsinline id="localVideo" width="730">
                <source src="../video/movie.mp4" type="video/mp4" />
                Your browser does not support the video
              </video>
            </li> -->
            <li class="swiper-slide swiper-slide__slide1">
              <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/home/banner_client/01.jpg" />
            </li>
            <li class="swiper-slide swiper-slide__slide1">
              <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/home/banner_client/02.jpg" />
            </li>
            <li class="swiper-slide swiper-slide__slide1">
              <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/home/banner_client/03.jpg" />
            </li>
          </ul>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </section>

            <!-- project -->
            <section class="home__section-project u-margin-bottom-small">
        <div class="container header">
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <h2 class="heading-primary ">our project</h2>
              <h3 lang="th" class="heading-secondary">ผลงานของเรา</h3>
            </div>
          </div>
        </div>
        <div class="swiper-container swiper-container__slide2">
          <div class="swiper-wrapper swiper-wrapper__slide2">
            <!-- slide 1 -->
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/tobe1.png"
                alt="to be number 1"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/benz_ttc.png"
                alt="Benz TTC"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/singha.png"
                alt="singha"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/bmw.png"
                alt="BMW"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/ptt.png"
                alt="PTT"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/chevron.png"
                alt="Chevron"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/kbank.png"
                alt="Kbank"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/era.png"
                alt="ERA"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/honda.png"
                alt="honda"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/gsk.png"
                alt="gsk"
                class="swiper-slide__slide2__img"
              />
            </div>

            <!-- slide 2 -->
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/spy.png"
                alt="spy"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/clay_works.png"
                alt="Clay works"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/sabai.png"
                alt="sabai"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/boeing.png"
                alt="BOEING"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/kiatnakin.png"
                alt="Kiatnakin"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/airbus.png"
                alt="ARIBUS"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/hellmann.png"
                alt="hellmann"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/amg.png"
                alt="AMG"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/pearl.png"
                alt="pearl"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/chua_hah_seng.png"
                alt="chua hah seng"
                class="swiper-slide__slide2__img"
              />
            </div>

            <!-- slide 3 -->
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/rath.png"
                alt="rath"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/tam_club.png"
                alt="tam club"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/bangkok.png"
                alt="bangkok"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/police_7.png"
                alt="police 7"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/opasi.png"
                alt="opasi"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/isoc.png"
                alt="isoc"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/lions.png"
                alt="LIONS"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/commando.png"
                alt="commando"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/metropolitan.png"
                alt="metropolitan"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/vespa.png"
                alt="vespa"
                class="swiper-slide__slide2__img"
              />
            </div>

            <!-- slide 4 -->
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/thaihealth.png"
                alt="thaihealth"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/krua_thua_rae.png"
                alt="krua thua rae"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/sathira.png"
                alt="sathira"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/earthsafe.png"
                alt="earthsafe"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/burapha.png"
                alt="burapha"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/lanta_diver.png"
                alt="lanta_diver"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/kpt.png"
                alt="kpt"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/panyarat.png"
                alt="panyarat"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/cherntawan.png"
                alt="cherntawan"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/petra.png"
                alt="PetraChem"
                class="swiper-slide__slide2__img"
              />
            </div>

            <!-- slide 5 -->
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/ngg.png"
                alt="NGG"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/kai.png"
                alt="kai"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/milch.png"
                alt="Milch"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/jbl.png"
                alt="JBL"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/colonze.png"
                alt="Colonze"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/guardian.png"
                alt="guardian"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/oriflame.png"
                alt="oriflame"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/sccc.png"
                alt="SCCC"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/lamina.png"
                alt="Lamina"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/thonburi.png"
                alt="thonburi"
                class="swiper-slide__slide2__img"
              />
            </div>

            <!-- slide 6 -->
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/fcci.png"
                alt="FCCI"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/bic.png"
                alt="bic"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/star_vegas.png"
                alt="star Vegas"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/shure.png"
                alt="SHURE"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/ymax.png"
                alt="YMAX"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/tn.png"
                alt="TN"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/beer.png"
                alt="BEER"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/sixt.png"
                alt="SIXT"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/sriracha.png"
                alt="SRIRACHA"
                class="swiper-slide__slide2__img"
              />
            </div>
            <div class="swiper-slide swiper-slide__slide2">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo_sponsor/opasi.png"
                alt="opasi"
                class="swiper-slide__slide2__img"
              />
            </div>
          </div>
          <!-- Add Arrows -->
          <div class="swiper-button-next swiper-slide__slide2__button-right"></div>
          <div class="swiper-button-prev swiper-slide__slide2__button-left"></div>
        </div>
      </section>

            <!-- banner -->
            <section class="home__section-banner u-margin-bottom-medium">
        <div class="banner">
          <a href="#">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/home/d6-03.jpg"
              alt=""
              class="banner__img"
            />
          </a>
          <a href="#">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/home/7-8-07-min.jpg"
              alt=""
              class="banner__img"
            />
          </a>
          <a href="#">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/home/7-8_Artboard_8-min.jpg"
              alt=""
              class="banner__img"
            />
          </a>
        </div>
      </section>

            <!-- lastest product -->
            <section class="section-product u-margin-bottom-medium">
        <div class="container header u-margin-bottom-small">
          <div class="row">
            <div class="col-sm-12 col-md-4 graybar-left">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/graybar.svg" alt="" class="graybar" />
            </div>
            <div class="col-sm-12 col-md-4 graybar-middle">
              <h2 class="heading-primary ">lastest product</h2>
            </div>
            <div class="col-sm-12 col-md-4 graybar-right">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/graybar.svg" alt="" class="graybar" />
            </div>
          </div>
          <h3 lang="th" class="heading-secondary">สินค้าล่าสุด</h3>
        </div>

        <!-- Swiper -->
        <div class="swiper-container swiper-container__slide3">
          <div class="swiper-wrapper swiper-wrapper__slide3">
            <!-- cloth1 -->
            <div class="swiper-slide swiper-slide__slide3">
              <a href="./tshirt.html">
              <div class="cloth">
             
                  <img
                    class="cloth__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/item/tshirt/5orange_1.jpg"
                    alt=""
                  />
               
              </div>
              <div class="cloth__price">
                <h2 class="cloth__price-header">t-shirt no.0020 tangering</h2>
                <p class="cloth__price-description">เสื้อยืดแฟชั่นคอกลม รหัส NO 0020 สีส้มกลาง</p>
                <p class="cloth__price-tag">199 ฿</p>
              </div>
            </a>
            </div>

            <!-- cloth2 -->
            <div class="swiper-slide swiper-slide__slide3">
              <a href="./vtshirt0020.html">
              <div class="cloth">
              
                  <img
                    class="cloth__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/item/vtshirt0020/2top_1.jpg"
                    alt=""
                  />
                
              </div>
              <div class="cloth__price">
                <h2 class="cloth__price-header">t-shirt no.0029 grey melange</h2>
                <p class="cloth__price-description">เสื้อยืดแฟชั่นคอวี รหัส NO 0020 สีท็อปดราย</p>
                <p class="cloth__price-tag">199 ฿</p>
              </div>
            </a>
            </div>

            <!-- cloth3 -->
            <div class="swiper-slide swiper-slide__slide3">
              <a href="./polo_mf_female.html">
              <div class="cloth"> 
                  <img
                    class="cloth__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/item/polo_mf/female/2yellow_topaz_f_1.jpg"
                    alt=""
                  />
               
              </div>
              <div class="cloth__price">
                <h2 class="cloth__price-header">polo ns.5000 yellow topaz</h2>
                <p class="cloth__price-description">เสื้อโปโลหญิง รหัส NO 0020 สีเหลือง</p>
                <p class="cloth__price-tag">199 ฿</p>
              </div>
            </a>
            </div>

            <!-- cloth4 -->
            <div class="swiper-slide swiper-slide__slide3">
              <a href="./polo_mf_male.html">
              <div class="cloth">
                  <img
                    class="cloth__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/item/polo_mf/male/4pink_diamond_m_1.jpg"
                    alt=""
                  />
              </div>
              <div class="cloth__price">
                <h2 class="cloth__price-header">polo male no. 0020 pink diamond</h2>
                <p class="cloth__price-description">เสื้อโปโลชาย รหัส NO 0020 สีชมพู</p>
                <p class="cloth__price-tag">199 ฿</p>
              </div>
            </a>
            </div>

            <!-- cloth5 -->
            <div class="swiper-slide swiper-slide__slide3">
              <a href="./polo_mf_male.html">
              <div class="cloth">
                  <img
                    class="cloth__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/item/polo_mf/male/12black_m_1.jpg"
                    alt=""
                  />
              </div>
              <div class="cloth__price">
                <h2 class="cloth__price-header">polo male no. 0020 black</h2>
                <p class="cloth__price-description">เสื้อโปโลชาย รหัส NO 0020 สีดำ</p>
                <p class="cloth__price-tag">199 ฿</p>
              </div>
            </a>
            </div>

            <!-- cloth6 -->
            <div class="swiper-slide swiper-slide__slide3">
              <a href="./polo_mf_male.html">
              <div class="cloth">
                  <img
                    class="cloth__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/item/polo_mf/male/3orange_songea_m_1.jpg"
                    alt=""
                  />
              </div>
              <div class="cloth__price">
                <h2 class="cloth__price-header">polo male no. 0020 orange songea</h2>
                <p class="cloth__price-description">เสื้อโปโลชาย รหัส NO 0020 สีส้ม</p>
                <p class="cloth__price-tag">199 ฿</p>
              </div>
            </a>
            </div>
          </div>
          <!-- Add Arrows -->
          <div class="swiper-button-next swiper-slide__slide3__button-right"></div>
          <div class="swiper-button-prev swiper-slide__slide3__button-left"></div>
        </div>
      </section>

            <!-- more product -->
            <section class="home__section-more u-margin-bottom-medium">
        <div class="more-button">
          <a href="./product.html" class="btn btn--white btn-shadow more-button-btn" lang="th"
            >สินค้าเพิ่มเติม</a
          >
        </div>
      </section>

</main><!-- #site-content -->


<?php get_footer(); ?>
