<?php get_header(); ?>

<div class="section hero para" data-bottom-top="background-position: 50% 100px;" data-top-bottom="background-position: 50% -150px;">
    <div class="container">
      <div class="row">
        <div class="full-width columns center">
          <h1 class="hero-heading">The Kirk</h1>
        </div>
        <div class="full-width columns center">
          <h2 class="hero-subheading">Community Minded; Loving and Serving</h2>
        </div>
      </div>
    </div>
</div>
<div class="section hero-content">
  <div class="container">
    <div class="row column">
      <p>The Kirk of Kansas City is an inclusive congregation trying our best to follow Jesus. Together, we worship God, build community, and love and serve God’s people.</p>

      <p>Jesus  is the heart of our faith, and because of Jesus we welcome everyone with love. The Kirk is not the type of community where everyone is required to think the same way or agree on a list of essentials. Instead, we are a church exploring God’s wildly abundant love for all. Through worshipping together, providing opportunities to learn and to serve, and building lasting and meaningful relationships, we are able to experience this love. We’d love for you to join us.</p>
    </div>
  </div>
  <div class="strip center">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Homepage Ticker") ) : ?>
      <?php endif;?>
      <!--<strong>Sundays:</strong>  9:00 AM Adult Studies  <strong>|</strong>  10:00 AM  Worship (Childcare Provided)  <strong>|</strong>  11:15 AM  Sunday School For Children and Youth-->
  </div>
  <hr />
</div>
<div class="section ctas">
  <div class="container">
    <div class="row">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Homepage CTA") ) : ?>
      <?php endif;?>
      <!--<div class="columns three cta" data-href="/url/to/somewhere">
        <h3>Register now for 2016 Day Camp at The Kirk.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div class="columns three cta">
        <h3>Register now for 2016 Day Camp at The Kirk.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div class="columns three cta">
        <h3>Register now for 2016 Day Camp at The Kirk.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div class="columns three cta">
        <h3>Register now for 2016 Day Camp at The Kirk.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>-->
    </div>
  </div>
</div>
<div id="community" class="section community para" data-bottom-top="background-position: 50% 100px;" data-top-bottom="background-position: 50% -100px;">
    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <h2>We build</h2>
          <h1 data-bottom-top="font-size:5em;" data-top-bottom="font-size:6em;">Community</h1> 
          <h2>by intentionally working at it</h2>
        </div>
        <div class="twelve columns">
          <p>The world moves faster now, with people connected like never before; smartphone and social media continue to connect us in ways never seen before. You can access sermons online and Wikipedia can give you the outline of any subject imaginable. But Church today isn’t just about finding things online: it is a place to belong, to get to know and work alongside others in a shared experience, to explore ideas that make a busy life more understandable and purposeful. The Kirk seeks to be that sort of place, a 21st century church full of ordinary, engaged, caring people.</p>
          <p>We build community by intentionally working at it. We choose to come together for worship on Sunday, even though we could choose to sleep in or get brunch. We sign up to work on a mission project or gather in small groups for lunch or for study. We dream of ways to serve our neighborhood together and we give each other a shoulder to lean on when we need to. It gives us life and it helps us be better, more caring people in the things we do outside of church.</p>
          <p>But we’re ordinary people and we’re all different. We think that is a strength and we’re always working on being a better, more faithful group. Here you will find the latest events and news from our community, as well as our learning opportunities for all ages.</p>
          <p>As Christians, we have both a need and a responsibility to continue to grow and develop in our faith. One means of strengthening our Christian commitment is through a well balanced education program.  The Kirk offers Sunday morning programming for all ages as well as weekday Bible studies and seasonal studies throughout the year.</p>
        </div>
        <div class="twelve columns sub-links">
          <ul>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
            <li><a href="">link</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
<?php get_footer( ); ?>