<?php
function setup_theme_admin_menus() {
    add_menu_page('Theme settings', 'WP Starter Kit', 'manage_options', 
        'tut_theme_settings', 'theme_settings_page');
         
    add_submenu_page('tut_theme_settings', 
        'General Settings', 'General', 'manage_options', 
        'tut_theme_settings', 'theme_front_page_settings');

}

add_action("admin_menu", "setup_theme_admin_menus");

function theme_front_page_settings() {

// $footer_desc = esc_attr($_POST["footer_desc"]);   
// update_option("wp_starter_footer_desc", $footer_desc);
// }?>
//   <div id="message" class="updated">Settings saved</div>
// <?php
// $front_page_elements = array();
         
// $max_id = esc_attr($_POST["element-max-id"]);
// for ($i = 0; $i < $max_id; $i ++) {
//     $field_name = "element-page-id-" . $i;
//     if (isset($_POST[$field_name])) {
//         $front_page_elements[] = esc_attr($_POST[$field_name]);
//     }
// }
         
update_option("theme_name_front_page_elements", $front_page_elements);
$front_page_elements = get_option("theme_name_front_page_elements");
?>
  <div class="wrap">
    <h2>WP Starter Kit Settings</h2>

    <form method="POST" action="">
      <table class="form-table">
        <tr valign="top">
          <th scope="row">
            <label for="footer_desc">
              Footer Description:
            </label> 
          </th>
          <td>
            <input type="text" name="footer_desc" size="25" value="<?php echo $footer_desc;?>" />
          </td>
        </tr>
      </table>
      <p>
        <input type="submit" value="Save settings" class="button-primary"/>
      </p>
    </form>
<?php } ?>
