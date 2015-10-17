<?php

/**
 * @file
 * Configuration panel for the hello button panel contents
 */

/**
 * Form builder. Configure Hello button panel.
 *
 * @ingroup forms
 * @see system_settings_form()
 */

glb_hello_button;

function glb_hello_button_admin_settings() {
  // $form['#submit'][] = 'hello_btn_form_submit';
  $form['hello_btn_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Panel title'),
    '#description' => t('Panel title.'),
    '#default_value' => variable_get('hello_btn_title', 'Wellcome to Teletech'),
    '#size' => 80,
    '#weight' => 0
  );

  $form['hello_btn_subtitle'] = array(
    '#type' => 'textarea',
    '#title' => t('Panel subtitle'),
    '#default_value' => variable_get('hello_btn_subtitle', '<p class="big">We\'re glad you\'re here!</p><p>Here are some resources to help you get started.</p>'),
    '#weight' => 0
  );

  $form['contact'] = array(
    '#type' => 'fieldset',
    '#title' => 'Contact Us section',
    '#collapsible' => TRUE,
  );

  $form['contact']['hello_btn_icon1'] = array(
    '#type' => 'managed_file',
    '#title' => t('Choose icon'),
    '#default_value' => variable_get('hello_btn_icon1'),
    '#weight' => 2,
    '#upload_location' => 'public://',
  );

  $form['contact']['hello_btn_text1'] = array(
    '#type' => 'textfield',
    '#title' => t('Description'),
    '#default_value' => variable_get('hello_btn_text1', 'Want to get in touch with one of our experts?'),
    '#size' => 80,
    '#weight' => 3
  );

  $form['contact']['hello_btn_link1'] = array(
    '#type' => 'textfield',
    '#title' => t('Blue text'),
    '#default_value' => variable_get('hello_btn_link1', 'CONTACT US'),
    '#size' => 80,
    '#weight' => 4
  );

  $form['contact']['hello_btn_panel1'] = array(
    '#type' => 'textarea',
    '#title' => t('Panel content'),
    '#default_value' => variable_get('hello_btn_panel1', '
    <p class="customFont text17a">
      Address<br>
      TeleTech<br>
      9197 South Peoria Street<br>
      Englewood, Colorado, U.S.A.<br>
      80112-5833<br><br>
      PHONE:<br>
      +1.800.TELETECH<br>
      (+1.800.835.3832)
      <br><br>
      Outside of the U.S.<br> please
      dial +1.303.397.8100
    </p>
    <iframe allowtransparency="true" frameborder="0" height="500" src="http://go.pardot.com/l/19832/2013-02-06/yr2" style="border: 0;" type="text/html" width="100%"></iframe>'),
    '#size' => 80,
    '#weight' => 5
  );

  $form['newsletter'] = array(
    '#type' => 'fieldset',
    '#title' => 'Newsletter section',
    '#collapsible' => TRUE,
  );

  $form['newsletter']['hello_btn_icon2'] = array(
    '#type' => 'managed_file',
    '#title' => t('Choose icon'),
    '#default_value' => variable_get('hello_btn_icon2'),
    '#upload_location' => 'public://',
    '#weight' => 6
  );

  $form['newsletter']['hello_btn_text2'] = array(
    '#type' => 'textfield',
    '#title' => t('Description'),
    '#default_value' => variable_get('hello_btn_text2', 'Looking for the latest customer experience insights?'),
    '#size' => 80,
    '#weight' => 7
  );

  $form['newsletter']['hello_btn_link2'] = array(
    '#type' => 'textfield',
    '#title' => t('Blue text'),
    '#default_value' => variable_get('hello_btn_link2', 'SUBSCRIBE TO OUR eNEWSLETTER'),
    '#size' => 80,
    '#weight' => 8
  );

  $form['newsletter']['hello_btn_panel2'] = array(
    '#type' => 'textarea',
    '#title' => t('Panel content'),
    '#default_value' => variable_get('hello_btn_panel_1', '
    <div class="col-sm-8 col-sm-offset-2">
      <img src="http://www.teletech.com/sites/default/files/inline_image/thumb-enewsletter-august-2015.png" />
    </div>
    <div class="clearBoth"></div>
    <iframe allowtransparency="true" frameborder="0" height="500" src="http://go.pardot.com/l/19832/2013-02-06/yr2" style="border: 0;" type="text/html" width="100%"></iframe>'),
    '#size' => 80,
    '#weight' => 9
  );

  $form['career'] = array(
    '#type' => 'fieldset',
    '#title' => 'Career section',
    '#collapsible' => TRUE,
  );

  $form['career']['hello_btn_career_text'] = array(
    '#type' => 'textfield',
    '#title' => t('Description'),
    '#default_value' => variable_get('hello_btn_career_text', 'Interested in joining the TeleTech family?'),
    '#size' => 80,
    '#weight' => 10
  );

  $form['career']['hello_btn_career_link_text'] = array(
    '#type' => 'textfield',
    '#title' => t('Blue text'),
    '#default_value' => variable_get('hello_btn_career_link_text', 'WE\'RE HIRING'),
    '#size' => 80,
    '#weight' => 11
  );

  $form['career']['hello_btn_career_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link'),
    '#default_value' => variable_get('hello_btn_career_link', 'http://www.teletech.com/careers'),
    '#size' => 80,
    '#weight' => 12
  );

  return system_settings_form($form);
}
?>