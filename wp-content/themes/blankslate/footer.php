<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo" class="container">
<p>Try us for FREE! Sign up for your free lesson</p>
<div class="left">
    <form>
      <input type="text" placeholder="Your Name"/>
      <input type="text" placeholder="Child's Name"/>
      <input type="text" placeholder="Child's Age"/>
      <input type="submit" value="Go!"/>
    </form>
</div>
<div class="right">
  <div class="social tw"><a href=""><i class="fa fa-twitter"></i></a></div>
  <div class="social fb"><a href=""><i class="fa fa-facebook"></i></a></div>
  <ul>
    <li><a href="">Careers at Big Blue</a></li>
    <li><a href="">Terms of Use</a></li>
    <li><a href="">Privacy Policy</a></li>
    <li><a href="">Contact Us</a></li>
  </ul>
</div>
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' )); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>