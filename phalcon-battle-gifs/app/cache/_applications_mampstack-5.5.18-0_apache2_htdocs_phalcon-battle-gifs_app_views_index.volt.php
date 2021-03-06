<!DOCTYPE html>
<html>
<head>
  <title>Battle Gifs</title>
  <?php echo $this->tag->stylesheetLink('css/foundation.css'); ?>
  <?php echo $this->tag->stylesheetLink('css/lightGallery.css'); ?>
  <?php echo $this->tag->stylesheetLink('dropzone/dropzone.css'); ?>
  <?php echo $this->tag->javascriptInclude('js/vendor/modernizr.js'); ?>
  <?php echo $this->tag->javascriptInclude('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'); ?>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Battle Gifs">
  <meta name="author" content="Rv">
  <style>

    ul{
      list-style: none outside none;
        padding-left: 0;
            display: block;
    }
    .gallery li {
      display: block;
      float: left;
      height: 100px;
      margin-bottom: 6px;
      margin-right: 6px;
      width: 100px;
    }
    .gallery li a {
      height: 100px;
      width: 100px;
    }
    .gallery li a img {
      max-width: 100px;
    }

    div{
        display: block;
    }

</style>


</head>
<body>

 <div class="row">
  <div class="large-12 columns">

    <!-- Navigation -->
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <!-- Title Area -->
        <li class="name">
          <h1>
            <?php echo $this->tag->linkTo(array('', 'Battle Gifs')); ?>
        </h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
</ul>

<section class="top-bar-section">
        <!-- <ul class="left">
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
        </ul>
    -->
    <ul class="right">
        <li class="has-button">
          <?php echo $this->tag->linkTo(array('battle/random', 'Random Battle', 'class' => 'small button alert')); ?>
        </li>
  </ul>
</section>
</nav>

<!-- End Navigation -->

</div>
</div>

<br>
<div class="row">
  <div class="large-12 columns">




<?php echo $this->getContent(); ?>


<!-- Footer -->

<footer class="row">
  <div class="large-12 columns">
    <hr>
    <div class="row">
      <div class="large-6 columns">
        <p>made with happiness and <a href="https://phalconphp.com">Phalcon</a></p>
    </div>
    <div class="large-6 columns">
        <ul class="inline-list right">
          <li>copyleft</li>
          <li><a href="https://github.com/RicardoValerio">Rv</a></li>
      </ul>
  </div>
</div>
</div>
</footer>

<?php echo $this->tag->javascriptInclude('js/foundation.min.js'); ?>
<?php echo $this->tag->javascriptInclude('js/lightGallery.js'); ?>
<?php echo $this->tag->javascriptInclude('dropzone/dropzone.js'); ?>
<script>
$(document).foundation();
</script>

</html>
