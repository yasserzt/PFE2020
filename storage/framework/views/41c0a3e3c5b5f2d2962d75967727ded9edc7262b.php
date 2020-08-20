<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <?php echo $__env->make('../header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <style>
  .p-1 {
    padding: 1em;
  }
  </style>

</head>
<body class="bg-vue" style="height:100vh;">
  <div id="app">

    <div class="container">

      <?php echo $__env->make('PanelHotel.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <br><br>
      <?php $__currentLoopData = $hotel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="columns is-multiline   " style="width:60%;position: relative;left:20%;">



        <div class="column is-12">

          <div class="columns">
            <div class="column is-2"></div>
            <div class="column">
              <div class="field is-horizontal">

                <div class="field-body">
                  <div class="media">
                    <div class="media-left">
                      <figure class="image is-48x48">
                        <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                      </figure>
                    </div>
                    <div class="media-content"  >
                      <p class="title is-4" ><?php echo e($val->hotelName); ?></p>
                      <p class="subtitle is-6"><i class="fas fa-map-pin"></i> <?php echo e($val->region); ?></p>
                    </div>
                  </div>
                </div>

              </div>
              <hr>
            </div>
          </div>
          <!-- End First -->


          <div class="column is-12  ">

            <div class="field is-horizontal"  >
              <div class="field-label is-normal">
                <label class="label">Manager Name</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <p class="control has-icons-left">
                    <input class="input" type="text" placeholder="Manager name" value="<?php echo e($val->managerName); ?>">
                    <span class="icon is-small is-left">
                      <i class="fas fa-user"></i>
                    </span>
                  </p>
                </div>
              </div>
            </div>
            <!-- one -->

            <div class="field is-horizontal" >
              <div class="field-label"></div>
              <div class="field-body">
                <div class="field is-expanded">
                  <div class="field has-addons">
                    <p class="control">
                      <a class="button is-static">
                        +216
                      </a>
                    </p>
                    <p class="control is-expanded">
                      <input class="input" type="tel" placeholder="Your phone number" value="<?php echo e($val->phone); ?>">
                    </p>
                  </div>
                  <p class="help">Do not enter the first zero</p>
                </div>
              </div>
            </div>
            <!-- seconde -->


            <div class="field is-horizontal"  >
              <div class="field-label is-normal">
                <label class="label">Region/Address</label>
              </div>
              <div class="field-body">
                <div class="field is-narrow ">
                  <div class="control">
                    <div class="select is-fullwidth">
                      <select value="<?php echo e($val->region); ?>">
                        <option value="Ariana">Ariana</option>
                        <option value="Beja">Béja</option>
                        <option value="BenArous">Ben Arous</option>
                        <option value="Bizerte">Bizerte</option>
                        <option value="Djerba">Djerba</option>
                        <option value="Gabes">Gabès</option>
                        <option value="Gafsa">Gafsa</option>
                        <option value="Jendouba">Jendouba</option>
                        <option value="Kairouan">Kairouan</option>
                        <option value="Kasserine">Kasserine</option>
                        <option value="Kebili">Kebili</option>
                        <option value="Kef">Kef</option>
                        <option value="Mahdia">Mahida</option>
                        <option value="Manouba">Manouba</option>
                        <option value="Monastir">Monastir</option>
                        <option value="Nabeul">Nabeul</option>
                        <option value="Sfax">Sfax</option>
                        <option value="SidiBouzid">Sidi Bouzid</option>
                        <option value="Silana">Silana</option>
                        <option value="Sousse">Sousse</option>
                        <option value="Tataouine">Tataouine</option>
                        <option value="Tozuer">Tozuer</option>
                        <option value="Tunis">Tunis</option>
                        <option value="Zaghouan">Zaghouan</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="field is-narrow ">
                  <p class="control has-icons-left">
                    <input class="input" type="text" placeholder="Address" value="<?php echo e($val->address); ?>">
                    <span class="icon is-small is-left">
                      <i class="fas fa-map"></i>
                    </span>
                  </p>
                </div>
              </div>
            </div>
            <!-- thered -->


            <div class="field is-horizontal"  >
              <div class="field-label">
                <label class="label">Stars</label>
              </div>
              <div class="field-body">
                <div class="field is-narrow ">
                  <p class="control has-icons-left">
                    <input class="input" type="text" placeholder="Stars number" value="<?php echo e($val->stars); ?>">
                    <span class="icon is-small is-left">
                      <i class="fas fa-star"></i>
                    </span>
                  </p>
                </div>
              </div>
            </div>
            <!-- fourth -->

            <div class="field is-horizontal"  >
              <div class="field-label is-normal">
                <label class="label">URL(Website)</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <input class="input " type="text" placeholder="URL(Website)" value="<?php echo e($val->url); ?>">
                  </div>
                </div>
              </div>
            </div>
            <!-- fifeth -->

            <div class="field is-horizontal"  >
              <div class="field-label is-normal">
                <label class="label">Account Statu</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <span v-if="<?php echo e($val->statu); ?> == 1" class="tag is-success is-medium">Active</span>
                    <span v-if="<?php echo e($val->statu); ?> == 0" class="tag is-danger is-medium">Desactive</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- 6 -->

            <div class="field is-horizontal"  >
              <div class="field-label is-normal">
                <label class="label">Description</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <textarea class="textarea" placeholder="Describe the Hotel " value="<?php echo e($val->description); ?>"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!-- 7 -->

            <div class="field is-horizontal">
              <div class="field-label">
                <!-- Left empty for spacing -->
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <button class="button is-info">
                      Save
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- 8 -->
          </div>
          <!-- second -->


        </div>



      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

  </div>
  <?php echo $__env->make('../scripts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <script>
  $('table').cardtable();
  </script>
</body>
</html>
<?php /**PATH /home/ziita/Documents/New/LastOne/resources/views/PanelHotel/profil.blade.php ENDPATH**/ ?>