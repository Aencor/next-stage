<?php
  $widgets = get_field('widgets', 'option');
?>
  <footer class="global-footer">
      <div class="container mx-auto xl py-20 px-4 sm:px-0">
        <div class="flex justify-between w-full">
          <a href="<?= get_bloginfo('url') ?>">
            Accelity
          </a>

          <div class="social-icons">
            <a href="" class="icon fa-brands fa-linkedin-in"></a>
            <a href="" class="icon fa-brands fa-x-twitter"></a>
            <a href="" class="icon fa-brands fa-facebook-f"></a>
          </div>
        </div>

        <!-- Footer Widgets -->
        <div class="footer-widgets flex justify-between w-full mt-12 flex-col md:flex-row gap-10 md:gap-20">
          <?php 
          if($widgets) :
            foreach($widgets as $widget) : 
              $title = $widget['title'];
              $links = $widget['links'];
          ?>
            <div class="widget">
              <h6><?= $title ?></h6>
              <nav class="widget-links">
                <?php 
                  foreach($links as $link) : 
                    $singleLink = $link['link'];
                ?>
                  <li>
                    <a href="<?= $singleLink['url'] ?>" target="<?= $singleLink['target'] ?>">
                      <?= $singleLink['title'] ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </nav>
            </div>
          <?php endforeach; endif;?>
        </div>

        <!-- Copyright area -->
         <div class="w-full copyrights mt-10">
          <div class="top-copy flex gap-5 md:gap-10 flex-col md:flex-row">
            <div>Copyright © 2024. Accelity </div>
            <div class="terms-nav">
              <?= wp_nav_menu(array('menu' => 'Terms Menu')); ?>
            </div>
          </div>

          <div class="bottom-copy small mt-4">
            <?= get_field('copyright', 'option'); ?>
          </div>
         </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
