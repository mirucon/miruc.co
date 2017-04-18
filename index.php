<?php get_header(); ?>

<main id="main" class="main">

  <div class="container">

    <div class="container-inner">

      <section class="line-1">

        <div class="intro">
          <h2>About Me</h2>
          <p>I'm Japanese creative web designer and developer. Especially I like working at WordPress community.</p>
        </div>

        <div class="row">

          <div class="col s7">
            <h6 class="name">Mirucon</h6>
            <p class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.jpg" alt="logo"></p>
          </div>

          <div class="col s5 info">
            <div class="Age">
              <h6>Age:</h6>
              <p>14</p>
            </div>
            <div class="location">
              <h6>Location:</h6>
              <p>Auckland, New Zealand</p>
            </div>
            <div class="social-media">
              <h6>Links:</h6>
              <div class="social-links">
                <a href="https://twitter.com/@mirucons" class="btn waves-effect waves-light twitter" title="Twitter" target="_blank"><span class="dashicons dashicons-twitter"></span></a>
                <a href="https://www.facebook.com/ミルコン-909691805753806/" class="btn waves-effect waves-light facebook" title="FaceBook" target="_blank"><span class="dashicons dashicons-facebook-alt"></span></a>
                <a href="https://plus.google.com/u/0/+mirucons" class="btn waves-effect waves-light googleplus" title="Google+" target="_blank"><span class="dashicons dashicons-googleplus"></span></a>
                <a href="https://github.com/Mirucon" class="btn waves-effect waves-light github" title="GitHub" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/GitHub-Mark-Light-120px-plus.svg" width="32" height="32" alt=""> </a>
              </div>
            </div>

          </div>

        </div>

      </section>


      <section class="line-2">

        <div class="intro">
          <h2>My Works</h2>
        </div>

        <div class="row">

          <div class="col s12 m4">
            <span class="dashicons dashicons-wordpress tle"></span>
            <h5 class="tle-header">WordPress</h5>
            <p>I've been contributing to WordPress community since 2015</p>
            <button type="button" name="button"><a href="https://profiles.wordpress.org/mirucon" class="waves-effect waves-light btn blue-grey darken-3" target="_blank"><span class="dashicons dashicons-wordpress-alt left"></span>WordPress</a></button>
          </div>

          <div class="col s12 m4">
            <span class="dashicons dashicons-admin-appearance tle"></span>
            <h5 class="tle-header">WordPress Themes</h5>
            <p>I make WordPress themes for bloggers</p>
            <button type="button" name="button"><a href="" class="waves-effect waves-light btn blue-grey lighten-3 disabled" target="_blank"><span class="dashicons dashicons-admin-appearance left"></span><!--Themes-->Coming Soon</a></button>
          </div>

          <div class="col s12 m4">
            <span class="dashicons dashicons-book tle"></span>
            <h5 class="tle-header">Blog</h5>
            <p>I write blog about frontend development in Japanese</p>
            <button type="button" name="button"><a href="https://www.mirucon.com" class="waves-effect waves-light btn light-blue lighten-2" target="_blank"><span class="dashicons dashicons-edit left"></span>Blog</a></button>
          </div>

        </div>

      </section>

      <section class="line-3">

        <div class="intro">
          <h2>My Products</h2>
        </div>

          <div class="coolbox col s12">

            <p class="coolbox-thumbnail"><a href="http://blog.hatena.ne.jp/-/store/theme/6653812171401577138?locale.lang=en" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/coolbox.png" alt="coolbox" width="1200" height="800"></a></p>
            <div class="coolbox-items">
              <div class="upper">
                <h5 class="coolbox-header">Coolbox</h5>
                <p class="coolbox-explanation">Blog theme for Hatena Blog (Japanese blogging service). It's layouted by Flexible box layout. It's aiming to be simple and high performance.</p>
              </div>
              <div class="lower">
                <a href="http://coolbox.hatenablog.com/entry/2016/06/18/002817" class="btn demo teal darken-1 waves-effect waves-light" target="_blank">Demo</a>
                <a href="http://blog.hatena.ne.jp/-/store/theme/6653812171401577138?locale.lang=en" class="btn install light-blue darken-2 waves-effect waves-light" target="_blank">Install</a>
                <a href="https://github.com/Mirucon/coolbox" class="btn github waves-effect waves-light" target="_blank">GitHub</a>
              </div>
            </div>

          </div>

          <div class="coolbox col s12">

            <p class="coldbox-thumbnail"><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/img/coldbox.png" alt="coldbox" width="1200" height="800"></a></p>
            <div class="coldbox-items">
              <div class="upper">
                <h5 class="coldbox-header">Coldbox</h5>
                <p class="coldbox-explanation">Coldbox is a template of WordPress for bloggers. </p>
              </div>
              <div class="lower">
                <a href="" class="btn demo teal darken-1 waves-effect waves-light disabled">Demo</a>
                <a href="" class="btn install light-blue darken-2 waves-effect waves-light disabled">Install</a>
                <a href="" class="btn github waves-effect waves-light disabled">GitHub</a>
              </div>
            </div>

        </section>

      </section>

    </div>

  </div>

</main>

</body>
</html>
