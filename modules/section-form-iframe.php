
      <!-- Get Custom Pardot Section Fields -->
      <?php $pardot_form_handler_url = get_field( 'pardot_form_handler_url' );?>
      <?php $pardot_form_height = get_field( 'pardot_form_height' );?>
      <?php $pardot_form_width = get_field( 'pardot_form_width' );?>
      <?php $pardot_form_title = get_field( 'pardot_form_title' );?>
      <?php $pardot_form_name = get_field( 'pardot_form_name' );?>
      <?php $pardot_form_copy = get_field( 'pardot_form_copy' );?>


    <section id="section-form-iframe" data-module="section-form-iframe" class="section has-background-popin-grey" style="border-top: 1px solid #eaeaea;">
      <div class="container">
        <div class="content">
          <h3 class="has-text-centered has-text-grey"><?php echo $pardot_form_title ?></h3>
          <h5 class="has-text-centered has-text-grey"><?php echo $pardot_form_name ?></h5>
          <div class="has-text-centered content has-text-grey"><?php echo $pardot_form_copy ?></div>
        </div>
        
        
        <div class="columns">

          <div id="iframe-form" class="column has-background-white box" style="">
            <iframe src="<?php echo $pardot_form_handler_url; ?>" width="100%" height="<?php echo $pardot_form_height; ?>" type="text/html" frameborder="0" allowTransparency="true" style="border: 0; margin:0 auto; display:block;"></iframe>
          </div>

        </div>
        
      </div>
    </section>