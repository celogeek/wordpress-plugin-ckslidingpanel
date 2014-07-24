<div class="wrap">
<h2>CKSlidingPanel</h2>
<form method="post" action="options.php"> 
<?php settings_fields('ckslidingpanel_options'); ?>
<?php do_settings_sections('ckslidingpanel_options'); ?>
<table class="form-table">
    <tr valign="top">
        <th scope="row">Align</th>
        <td>
            <?php $align_option = get_option('align') ?>
            <select name="align">
                <option value="left" <?php if($align_option == "left") echo "selected=selected" ?>>Left</option>
                <option value="right" <?php if($align_option == "right") echo "selected=selected" ?>>Right</option>
            </select>
        </td>
    </tr>
</table>
<?php submit_button(); ?>
</form>
</div>

