<div class="wrap">
<h2>CKSlidingPanel</h2>
<form method="post" action="options.php"> 
<?php settings_fields('ckslidingpanel'); ?>
<?php do_settings_sections('ckslidingpanel'); ?>
<table class="form-table">
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
<?php submit_button(); ?> <input type="submit" class="button button-primary">
</form>
</div>

