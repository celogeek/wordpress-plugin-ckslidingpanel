<div class="wrap">
<h2>CKSlidingPanel</h2>
<h3>Settings</h3>
<form method="post" action="options.php"> 
<?php settings_fields('ckslidingpanel'); ?>
<?php do_settings_sections('ckslidingpanel'); ?>
<table class="form-table">
    <tr valign="top">
        <th scope="row">Text</th>
        <td><input type="text" name="ckslidingpanel_options[text]" value="<?php echo esc_attr($options['text']) ?>"></td>
    </tr>
    <tr valign="top">
        <th scope="row">Align</th>
        <td>
            <select name="ckslidingpanel_options[align]">
                <option value="left" <?php if($options['align'] == "left") echo "selected=selected" ?>>Left</option>
                <option value="right" <?php if($options['align'] == "right") echo "selected=selected" ?>>Right</option>
            </select>
        </td>
    </tr>
</table>
<?php submit_button(); ?> 
</form>
<h3>Reset default settings</h3>
<form method="post" action="options.php"> 
<?php settings_fields('ckslidingpanel'); ?>
<?php do_settings_sections('ckslidingpanel'); ?>
<input type="hidden" value="reset_options">
<input type="submit" value="Reset Default Value" class="button button-primary">
</form>
</div>

