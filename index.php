<?php
/*
 * The main template file for the theme
 */

get_header(); ?>

<div id="slideshow" class="container clear">
  <div class="image">
    <img src="<?php echo get_template_directory_uri() . '/images/placeholder.png'; ?>">
  </div>
  <div class="caption">
    <h1>IESTYN DAVIES, COUNTERTENOR <br>THOMAS DUNFORD, LUTE</h1>
    <p>
      Sunday, Mar 30, 2014 | 3:00pm<br>
      Vancouver Playhouse
    </p>
  </div>
</div>

<div id="main" class="container clear">
  <div class="content-feed">
    <h1>Upcoming Concerts</h1>

    <article class="post">
      <h1 class="entry-title">
        IESTYN DAVIES, COUNTERTENOR & THOMAS DUNFORD, LUTE
      </h1>
      <div class="entry-content">
        <p>Sunday, Mar 30, 2014 | 3:00pm<br>Vancouver Playhouse</p>
      </div>
    </article>

    <article class="post">
      <h1 class="entry-title">
        No Upcoming Concerts
      </h1>
      <div class="entry-content">
        <p>No concerts are currently scheduled. Please check back again.</p>
      </div>
    </article>
  </div>

  <div class="sidebar-feed">
    <div class="subscription-feed">
      <h2>2014-15 Subscription Series</h2>
      <ul>
        <li><a href="">Event Listing</a></li>
        <li><a href="">Event Listing</a></li>
        <li><a href="">Event Listing</a></li>
        <li><a href="">Event Listing</a></li>
        <li><a href="">Event Listing</a></li>
      </ul>
    </div>
  </div>
</div>

<?php get_footer(); ?>