	
	
	<!-- Page cursor
	================================================== -->
	
	<div class="cursor cursor-shadow"></div>
	<div class="cursor cursor-dot"></div>


	</div>	



<!-- JAVASCRIPT


 
    ================================================== -->
  
<!-- End Document
================================================== -->



 <script>
      $(document).ready(function() {
        // init controller
        var controller = new ScrollMagic.Controller();

        // build scenes
        new ScrollMagic.Scene({triggerElement: '.promo-zoom', triggerHook: 0, duration: '100%'})
              .setTween('.house-left', {left: '-30%', scale: 1.25, ease: Linear.easeNone})
              .addTo(controller);

        new ScrollMagic.Scene({triggerElement: '.promo-zoom', triggerHook: 0, duration: '100%'})
              .setTween('.house-right', {right: '-10%', bottom: '-20%', scale: 1.35, ease: Linear.easeNone})
              .addTo(controller);

        new ScrollMagic.Scene({triggerElement: '.promo-zoom', triggerHook: 0, duration: '100%'})
              .setTween('.mountains', {top: '-60%', scale: 2.2, ease: Linear.easeNone})
              .addTo(controller);

        new ScrollMagic.Scene({triggerElement: '.promo-zoom', triggerHook: 0, duration: '100%'})
              .setTween('.promo-zoom-titles', {top: '0%', opacity: 0, ease: Linear.easeNone})
              .addTo(controller);

        new ScrollMagic.Scene({triggerElement: '.promo-zoom', triggerHook: 0, duration: '100%'})
              .setTween('.navbar-nav', {opacity: 0, ease: Linear.easeNone})
              .addTo(controller);

        new ScrollMagic.Scene({triggerElement: '.step-opacity', triggerHook: 0, duration: '15%'})
              .setTween('.mountains, .house-right, .house-left', {opacity: 0, ease: Linear.easeNone})
              .addTo(controller);

        new ScrollMagic.Scene({triggerElement: '.step-visibility', triggerHook: 0, duration: '10%'})
              .setTween('.mountains, .house-right, .house-left, .navbar-nav, .promo-zoom-titles', {visibility: 'hidden', ease: Linear.easeNone})
              .addTo(controller);

        new ScrollMagic.Scene({triggerElement: '.step-logo', triggerHook: 0, duration: '1%'})
              .setTween('.about', {opacity: '1', top: '0', ease: Linear.easeNone})
              .addTo(controller);

      });
    </script>




<script>
       $(document).ready(function() {
        // init controller
        var controller = new ScrollMagic.Controller();

        // build scenes
        new ScrollMagic.Scene({triggerElement: '.promo-3d', triggerHook: 0, duration: '50%'})
              .setTween('.promo-screen-titles', {top: '7rem', ease: Linear.easeNone})
              .addTo(controller);

        new ScrollMagic.Scene({triggerElement: '.promo-3d', triggerHook: 0, duration: '90%'})
              .setTween('.promo-3d-bg', {bottom: '-10vmin', scale: 1.6, ease: Linear.easeNone})
              .addTo(controller);

        new ScrollMagic.Scene({triggerElement: '.promo-3d', triggerHook: '0', duration: '80%'})
              .setTween('.promo-3d-man', {bottom: '-30vmin', scale: .65, ease: Linear.easeNone})
              .addTo(controller);

        new ScrollMagic.Scene({triggerElement: '.promo-3d-opacity', triggerHook: '0', duration: '20%'})
              .setTween('.promo-3d-man, .promo-3d-bg', {opacity: '0', ease: Linear.easeNone})
              .addTo(controller);

        new ScrollMagic.Scene({triggerElement: '.section-about-3d', triggerHook: '0', duration: '10%'})
              .setTween('.promo-3d-man, .promo-3d-bg', {visibility: 'hidden', ease: Linear.easeNone})
              .addTo(controller);

        new ScrollMagic.Scene({triggerElement: '.section-about-3d', triggerHook: '0'})
              .setClassToggle('.section-about-3d', 'active')
              .addTo(controller);

      });
    </script>

 <script>
      $(document).ready(function() {
        // init controller
        var controller = new ScrollMagic.Controller();

        // build scenes
        new ScrollMagic.Scene({triggerElement: '.parallax-start', triggerHook: 0, duration: '100%'})
              .setTween('.full-image-dark', {backgroundPosition: '50% 100%', ease: Linear.easeNone})
              .addTo(controller);


      });
    </script>



<?php wp_footer(); ?>

</body>
</html>