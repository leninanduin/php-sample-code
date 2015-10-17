<?php
if (!path_is_admin(current_path())) {

$hello_btn['title'] = variable_get('hello_btn_title');
$hello_btn['subtitle'] = variable_get('hello_btn_subtitle');
$f = file_load(variable_get('hello_btn_icon1'));
$hello_btn['contact']['icon'] = file_create_url($f->uri);
$hello_btn['contact']['text'] = variable_get('hello_btn_text1');
$hello_btn['contact']['link'] = variable_get('hello_btn_link1');
$hello_btn['contact']['panel'] = variable_get('hello_btn_panel1');
$f = file_load(variable_get('hello_btn_icon2'));
$hello_btn['newsletter']['icon'] = file_create_url($f->uri);
$hello_btn['newsletter']['text'] = variable_get('hello_btn_text2');
$hello_btn['newsletter']['link'] = variable_get('hello_btn_link2');
$hello_btn['newsletter']['panel'] = variable_get('hello_btn_panel2');
$hello_btn['career']['text'] = variable_get('hello_btn_career_text');
$hello_btn['career']['link_text'] = variable_get('hello_btn_career_link_text');
$hello_btn['career']['link'] = variable_get('hello_btn_career_link');

?>

  <!-- START hello-button functionality -->
  <div id="hello-btn">
    <a class="handle" href="#" tabindex="0">Content</a>
    <!-- START full pane space -->
    <div class="content">
      <a class="close blue" href="#">CLOSE <span>&times;</span></a>
      <!-- START first/default sidebar pane -->
      <div class="row wellcome">
        <div class="col-sm-12 paddingBottom20">
          <h2 class="blue"><?php echo $hello_btn['title'];?></h2>
          <hr>
          <?php echo $hello_btn['subtitle'];?>
        </div>
        <div class="col-sm-12">
          <a href="#" class="trigger" go-to="contact-us" tabindex="0">
            <img src="<?php echo $hello_btn['contact']['icon'];?>" style="width: 125px !important;margin: 0 auto;display: inherit;">
            <p><?php echo $hello_btn['contact']['text'];?></p>
          </a>
          <a href="#" class="blue trigger" go-to="contact-us" tabindex="0">
            <?php echo $hello_btn['contact']['link'];?>
          </a>
        </div>
        <div class="col-sm-12">
          <a href="#" class="trigger" go-to="subscribe" tabindex="0">
            <img src="<?php echo $hello_btn['newsletter']['icon'];?>" style="width: 125px !important;margin: 0 auto;display: inherit;">
            <p><?php echo $hello_btn['newsletter']['text'];?></p>
          </a>
          <a href="#" class="blue trigger" go-to="subscribe" tabindex="0"><?php echo $hello_btn['newsletter']['link'];?></a>
        </div>
        <div class="col-sm-12">
          <hr style="margin: 30px auto;">
          <p class="small"><a href="<?php echo $hello_btn['career']['link'];?>" class="gray trigger" target="_blank">
            <?php echo $hello_btn['career']['text'];?>
          </a></p>
          <p class="small blue"><a href="<?php echo $hello_btn['career']['link'];?>" class="blue trigger" target="_blank"><?php echo $hello_btn['career']['link_text'];?></a></p>
        </div>
      </div>
      <!-- /END first/default sidebar pane -->

      <!-- START contact us sidebar pane -->
      <div class="row contact-us" style="display:none;">
        <a href="#" go-to="wellcome" tabindex="0">< back</a><br><br>
        <?php echo $hello_btn['contact']['panel'];?>
      </div>
      <!-- /END contact us sidebar pane -->

      <!-- START enewsletter sidebar pane -->
      <div class="row subscribe" style="display:none;">
        <a href="#" go-to="wellcome">< back</a><br><br>
        <?php echo $hello_btn['newsletter']['panel'];?>
      </div>
      <!-- /END enewsletter sidebar pane -->
    </div>
  </div>
  <!-- /END full pane space -->

  <div id="hello-btn-overlay"></div>
  <!-- /END hello-button functionality -->

<?php
 }
?>