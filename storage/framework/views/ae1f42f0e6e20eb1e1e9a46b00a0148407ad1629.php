<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>

  <?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<style>
.bd-placeholder-img {
  font-size: 1.125rem;
  text-anchor: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

@media (min-width: 768px) {
  .bd-placeholder-img-lg {
    font-size: 3.5rem;
  }
}
</style>


</head>
<body>
  <div id="app">

  <header class="bg-blue">
    <div class="container  ">
      <?php echo $__env->make('navbar.newNavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </header>
  <!-- Navbar -->

  <main>
    <div class="bg-pic">

      <section class="py-5 text-center container " >
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto"></div>
          <div class="col-lg-6 col-md-8 mx-auto text-left">
            <h1 class=" color-blue ">Travel to the best Beautiful <br>place in Tunisia</h1>
            <p class="lead text-muted has-text-weight-semibold">  holiday - honeymoon</p>
            <p>
              <a href="<?php echo e(url('search')); ?>" class="btn btn-primary my-2" >Search now</a>
            </p>
          </div>
        </div>
      </section>

    </div>

    <div class="album py-5 bg-light">
      <div class="container">

        <!-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      </div> -->
        <p class="title is-3 text-center text-muted has-text-weight-semibold">Top Offres</p>
        <welcomesearch></welcomesearch>


    </div>
  </div>

</main>


<div class="py-5 bg-blue">


</div>

<div class="album py-5 bg-light">
  <div class="container">
     <p class="title is-3 text-center text-muted has-text-weight-semibold">Last Events</p>
      <welcomeevent></welcomeevent>
   </div>
</div>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-right mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Hoteru &copy; 2020.</p>
  </div>
</footer>


</div>







<?php echo $__env->make('scripts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/welcome.blade.php ENDPATH**/ ?>