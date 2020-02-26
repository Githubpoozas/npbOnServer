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
        <h2 class="heading-primary u-margin-bottom-medium" lang="th">ส่งข้อความถึงเรา</h2>

        <form action="#" method="GET">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 u-margin-bottom-small">
                <h2 class="heading-primary text-left" lang="th">
                  ชื่อ-นามสกุล <span lang="en">(required)</span>
                </h2>
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="ชื่อ - นามสกุล"
                  required
                  class="form__input"
                  lang="th"
                />
              </div>
              <div class="col-sm-12 col-md-7 u-margin-bottom-small">
                <h2 class="heading-primary text-left" lang="th">
                  อีเมล <span lang="en">(required)</span>
                </h2>
                <input
                  type="email"
                  class="form__input"
                  id="email"
                  name="email"
                  placeholder="NAME@EMAIL.COM"
                  required
                  lang="th"
                />
              </div>
              <div class="col-sm-12 col-md-5 u-margin-bottom-small">
                <h2 class="heading-primary text-left" lang="th">
                  เบอร์โทรศัพท์
                </h2>
                <input
                  type="number" 
                  class="form__input"
                  id="tel"
                  name="tel"
                  placeholder="08-888-8888 , 088-888-8888"
                  lang="th"
                />
              </div>

              <div class="col-sm-12 col-md-12 u-margin-bottom-medium">
                <h2 class="heading-primary text-left" lang="th">
                  ข้อความ
                </h2>
                <textarea
                  name="message"
                  class="form__input form-textarea"
                  id="message"
                  rows="5"
                placeholder="ข้อความ" lang="th"></textarea>
              </div>
              <div class="col-sm-12 col-md-12 u-margin-bottom-small">
                <input type="submit" value="ส่งข้อมูล" class="form__submit">
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
        <div class="googleMap__mapouter">
          <div class="googleMap__gmap_canvas">
            <iframe
              class="googleMap__iframe"
              id="gmap_canvas"
              src="https://maps.google.com/maps?q=%E0%B8%AA%E0%B8%A1%E0%B8%9A%E0%B8%B9%E0%B8%A3%E0%B8%93%E0%B9%8C%20%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B9%80%E0%B8%A1%E0%B9%89%E0%B8%99&t=&z=13&ie=UTF8&iwloc=&output=embed"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
            ></iframe>
          </div>
        </div>
      </section>

</main><!-- #site-content -->


<?php get_footer(); ?>
