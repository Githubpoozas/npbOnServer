<?php
/**
* Template Name: contact page
* Description: contact page
*/ 
?>
    <!-- header banner -->
    <div class="header__banner">
    <div class="header__bannerGray">
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/noproblem_logo.svg"
        alt="logo"
        class="header__bannerGray-logo"
      />
    </div>
    </div>

<?php
get_header();
?>

<main id="site-content" role="main">

	
<section class="contactUs__section-contactForm form u-margin-bottom-big u-margin-top-big underNav">
        <h2 class="heading-primary u-margin-bottom-medium">ส่งข้อความถึงเรา</h2>

        <form action="#" method="GET">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 u-margin-bottom-small">
                <h2 class="heading-primary text-left">
                  ชื่อ-นามสกุล <span>(required)</span>
                </h2>
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="ชื่อ - นามสกุล"
                  required
                  class="form__input"
                  
                />
              </div>
              <div class="col-sm-12 col-md-7 u-margin-bottom-small">
                <h2 class="heading-primary text-left" >
                  อีเมล <span >(required)</span>
                </h2>
                <input
                  type="email"
                  class="form__input"
                  id="email"
                  name="email"
                  placeholder="NAME@EMAIL.COM"
                  required
                  
                />
              </div>
              <div class="col-sm-12 col-md-5 u-margin-bottom-small">
                <h2 class="heading-primary text-left" >
                  เบอร์โทรศัพท์
                </h2>
                <input
                  type="number" 
                  class="form__input"
                  id="tel"
                  name="tel"
                  placeholder="08-888-8888 , 088-888-8888"
                  
                />
              </div>

              <div class="col-sm-12 col-md-12 u-margin-bottom-medium">
                <h2 class="heading-primary text-left" >
                  ข้อความ
                </h2>
                <textarea
                  name="message"
                  class="form__input form-textarea"
                  id="message"
                  rows="5"
                placeholder="ข้อความ" ></textarea>
              </div>
              <div class="col-sm-12 col-md-12 u-margin-bottom-small">
                <input type="submit" value="ส่งข้อมูล" class="form__submit form__submit-btn btn--gray btn-shadow">
              </div>
            </div>
          </div>
        </form>
      </section>

      <section class="contactUs__section-map map u-margin-bottom-big">
        <img class="map__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact_us/d3-04-min.jpg" alt="" />
      </section>

      <section
        class="contactUs__section-googleMap googleMap u-margin-bottom-big"
      >
          <div class="googleMap">
          <iframe id="iframe_map" src="https://maps.google.com/maps?q=somboon%20garment&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          </div>
      </section>

</main><!-- #site-content -->


<?php get_footer(); ?>
