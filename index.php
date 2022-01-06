<?php
/**
 * The themplate for index page.
 *
 * @since 1.0.0
 * @package me
 */

function getMyAge(): int {
    $tz  = new DateTimeZone('Asia/Tokyo');
    return DateTime::createFromFormat('d/m/Y', '12/10/2002', $tz)
        ->diff(new DateTime('now', $tz))
        ->y;
}

get_header(); ?><main id="main" class="main">

  <div class="container">

    <div class="container-inner">

      <section class="line-1">

        <div class="intro">
          <h2>About Me</h2>
          <p>A Japanese developer. Working on front-end and back-end of web applications.</p>
        </div>

        <div class="row">

          <div class="col s7">
            <h6 class="name">Toshihiro Kanai (mirucon)</h6>
            <p class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="logo"></p>
          </div>

          <div class="col s5 info">
            <div class="Age">
              <h6>Age:</h6>
              <p><?php echo esc_html( getMyAge() ); ?></p>
            </div>
            <div class="location">
              <h6>Location:</h6>
              <p>Chiba, Japan</p>
            </div>
            <div class="social-media">
              <h6>Links:</h6>
              <div class="social-links">
                <a href="https://twitter.com/@mirucons" class="btn waves-effect waves-light twitter" title="Twitter" target="_blank"><span class="dashicons dashicons-twitter"></span></a>
                <a href="https://github.com/mirucon" class="btn waves-effect waves-light github" title="GitHub" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/GitHub-Mark-Light-120px-plus.svg" width="32" height="32" alt=""> </a>
              </div>
            </div>

          </div>

        </div>

      </section>


      <section class="line-2">

        <div class="intro">
          <h2>My Open-Source Works</h2>
        </div>

        <div class="row">

          <div class="col s12 m4">
            <span class="dashicons dashicons-wordpress tle"></span>
            <h5 class="tle-header">WordPress</h5>
            <p>I've been contributing to WordPress community since 2015.</p>
            <button type="button" name="button"><a href="https://profiles.wordpress.org/mirucon/" class="waves-effect waves-light btn blue-grey darken-3" target="_blank"><span class="dashicons dashicons-wordpress-alt left"></span>WordPress</a></button>
          </div>

          <div class="col s12 m4">
            <span class="dashicons dashicons-admin-appearance tle"></span>
            <h5 class="tle-header">WordPress Themes</h5>
            <p>I make WordPress themes for bloggers.</p>
            <button type="button" name="button"><a href="https://github.com/mirucon/coldbox/" class="waves-effect waves-light btn blue-grey lighten-3" target="_blank"><span class="dashicons dashicons-admin-appearance left"></span>Themes</a></button>
          </div>

          <div class="col s12 m4">
            <span class="dashicons dashicons-book tle"></span>
            <h5 class="tle-header">Blog</h5>
            <p>I write blog about front-end and WordPress development in Japanese.</p>
            <button type="button" name="button"><a href="https://www.mirucon.com/" class="waves-effect waves-light btn light-blue lighten-2" target="_blank"><span class="dashicons dashicons-edit left"></span>Blog</a></button>
          </div>

        </div>

      </section>

      <section class="line-3">

        <div class="intro">
          <h2>My Own Products</h2>
        </div>

        <div class="coldbox product col s12">

          <p class="coldbox-thumbnail"><a href="https://coldbox.miruc.co/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/coldbox.jpg" alt="coldbox" width="1200" height="900"></a></p>
          <div class="coldbox-items">
            <div class="upper">
              <h5 class="coldbox-header">Coldbox</h5>
              <p class="coldbox-explanation">Coldbox is a simple WordPress theme for bloggers. Customizable, modern layout, free and supporting AMP HTML. Good to start bloging with it!</p>
            </div>
            <div class="lower">
              <a href="https://coldbox.miruc.co/demo/" class="btn demo teal darken-1 waves-effect waves-light">Demo</a>
              <a href="https://coldbox.miruc.co/" class="btn install light-blue darken-2 waves-effect waves-light">Official Site</a>
              <a href="https://github.com/mirucon/coldbox/" class="btn github waves-effect waves-light">GitHub</a>
            </div>
          </div>

        </div>

        <div class="coolbox product col s12">

          <p class="coolbox-thumbnail"><a href="http://blog.hatena.ne.jp/-/store/theme/6653812171401577138?locale.lang=en" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/coolbox.png" alt="coolbox" width="1200" height="800"></a></p>
          <div class="coolbox-items">
            <div class="upper">
              <h5 class="coolbox-header">Coolbox</h5>
              <p class="coolbox-explanation">A blog theme for Hatena Blog (Japanese blogging service). It's layouted by Flexible box layout. It's aiming to be simple and high performance.</p>
            </div>
            <div class="lower">
              <a href="http://coolbox.hatenablog.com/entry/2016/06/18/002817" class="btn demo teal darken-1 waves-effect waves-light" target="_blank">Demo</a>
              <a href="http://blog.hatena.ne.jp/-/store/theme/6653812171401577138?locale.lang=en" class="btn install light-blue darken-2 waves-effect waves-light" target="_blank">Install</a>
              <a href="https://github.com/Mirucon/coolbox" class="btn github waves-effect waves-light" target="_blank">GitHub</a>
            </div>
          </div>

        </div>

      </section>

    </div>

  </div>

</main>

</body>
</html>
