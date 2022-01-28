
 <div class="padding-top-footer">

</div>

<footer class="footer" style="padding: 21px;"> 
    <div class="foot container"> 
      <div class="foot row"> 
        <div class="footer-col col-md-4"> 
              <?php dynamic_sidebar('footer-sidebar-1')?>
        </div>
        <div class="footer-col col-md-4"> 
              <?php dynamic_sidebar('footer-sidebar-2')?>
        </div>
        <div class="footer-col col-md-4"> 
              <?php dynamic_sidebar('footer-sidebar-3')?>
        </div>
      </div>

      <div class="copyright">
      This website copyright© by team alulu
</div>
    </div>
  </footer>



<script src="<?php echo esc_url( get_template_directory_uri() )?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() )?>/assets/js/jquery.min.js"></script>
<script>
  window.onscroll = function() {scrollFunction()}; 
  function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      document.querySelector(".navbar").style.backgroundColor = "#63ffc2";
    } else {
      document.querySelector(".navbar").style.backgroundColor = "transparent";
    }
  }
</script>
<?php wp_footer(); ?>
</body>
</html>