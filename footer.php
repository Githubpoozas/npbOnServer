<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>

<!-- social media bar -->
<div class="socialmedia" id="socialmedia">
  <!-- <input
	type="checkbox"
	class="socialmedia__checkbox"
	id="socialmedia-toggle"
  /> -->
  <label for="socialmedia-toggle" class="socialmedia__button">
	<div class="socialmedia__icon">
	  <img class="socialmedia__icon-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/socialmedia/arrow.svg" alt="" />
	</div>
  </label>
  <nav class="socialmedia__nav">
	<ul class="socialmedia__list">
	<li class="socialmedia__item">
		<a href="https://line.me/ti/p/~nicknoproblem" target="_blank"><img class="btn-shadow" src="<?php echo get_template_directory_uri(); ?>/assets/images/socialmedia/line.svg" alt=""/></a>
	  </li>
	  <li class="socialmedia__item">
		<a href="https://wa.me/66817741166" target="_blank"><img class="btn-shadow" src="<?php echo get_template_directory_uri(); ?>/assets/images/socialmedia/whatsapp.svg" alt=""/></a>
	  </li>
	  <li class="socialmedia__item">
		<a href="https://www.facebook.com/130047820416542/" target="_blank">
		  <img class="btn-shadow" src="<?php echo get_template_directory_uri(); ?>/assets/images/socialmedia/facebook.svg" alt=""/>
		</a>
	  </li>

	  <li class="socialmedia__item">
		<a href="https://m.me/Noproblemtshirt/" target="_blank"><img class="btn-shadow" src="<?php echo get_template_directory_uri(); ?>/assets/images/socialmedia/messenger.svg" alt=""/></a>
	  </li>
	  <li class="socialmedia__item">
		<a href="<?php echo $_SERVER['HTTP_HOST']; ?>/qr" target="_blank"><img class="btn-shadow wechat" src="<?php echo get_template_directory_uri(); ?>/assets/images/socialmedia/wechat.svg" alt=""/></a>
	  </li>
	</ul>
  </nav>
  <label class="socialmedia__rotated" for="socialmedia-toggle"
	>ติดต่อสอบถามได้ที่</label
  >
</div>

<!-- footer -->
<footer class="footer u-margin-top-huge">
  <div class="footer__box">
	<div class="footer__logo">
	  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noproblem_logo.svg" alt="" />
	</div>
	<div class="footer__contacts">
	  <div class="footer__contact footer__contact-1">
		<p class="footer__name">CONTACT</p>
	  </div>
	  <div class="footer__contact footer__contact-2">
		<p>
		  127 ซ.สุขสวัสดิ์ 14/19 แขวงจอมทอง เขตจอมทอง กทม. 10150
		</p>
	  </div>
	  <div class="footer__contact footer__contact-3">
		<p>โทรศัพท์</p>
		<p><a href="tel:066-165-1987">0-2460-2200-11</a></p>
		<p>แฟกซ์</p>
		<p><a href="tel:024761866">0-2476-1866</a></p>
	  </div>
	  <div class="footer__contact footer__contact-4">
		<p>เวลาทำการ จันทร์-เสาร์ เวลา 08:00-17:00</p>
	  </div>
	</div>
	<div class="footer__socialsMedia">
	  <div class="footer__socialMedia footer__socialMedia-1">
		<p class="footer__name">SOCIAL MEDIA</p>
	  </div>
	  <div class="footer__socialMedia footer__socialMedia-2">
	  <a href="https://line.me/ti/p/~nicknoproblem" target="_blank"><img class="btn-shadow" src="<?php echo get_template_directory_uri(); ?>/assets/images/socialmedia/line.svg" alt=""/></a>
		<a href="https://wa.me/66817741166" target="_blank"><img class="btn-shadow" src="<?php echo get_template_directory_uri(); ?>/assets/images/socialmedia/whatsapp.svg" alt=""/></a>
		<a href="https://www.facebook.com/130047820416542/" target="_blank">
		  <img class="btn-shadow" src="<?php echo get_template_directory_uri(); ?>/assets/images/socialmedia/facebook.svg" alt=""/>
		</a>
		<a href="https://m.me/Noproblemtshirt/" target="_blank"><img class="btn-shadow" src="<?php echo get_template_directory_uri(); ?>/assets/images/socialmedia/messenger.svg" alt=""/></a>
		<a href="<?php echo $_SERVER['HTTP_HOST']; ?>/qr" target="_blank"><img id="wechat_bottom" class="btn-shadow wechat" src="<?php echo get_template_directory_uri(); ?>/assets/images/socialmedia/wechat.svg" alt=""/></a>
	  </div>

	  <div class="footer__socialMedia footer__socialMedia-3">
		<p>Line</p>
		<p>nicknoproblem</p>
		<p>WeChat</p>
		<p>natika001</p>
		<p>CALL</p>
		<p><a href="tel:0817741166">081-774-1166</a></p>
		<p>EMAIL</p>
		<p><a href="mailto:nicknoproblem@gmail.com">nicknoproblem@gmail.com</a></p>
	  </div>
	</div>
  </div>
</footer>

<div class="footer__whitebar"></div>

		<?php wp_footer(); ?>

	</body>
</html>
