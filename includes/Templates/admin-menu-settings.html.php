<div class="wrap">
    <?php foreach( $grouped_settings as $group => $settings ) : ?>
        <div id="ninja_forms_metabox_<?php echo $group; ?>" class="postbox ">
			<span class="item-controls">
				<a class="item-edit metabox-item-edit" id="edit_id" title="Edit Menu Item" href="#">Edit Menu Item</a>
			</span>
            <h3 class="hndle"><span><?php echo $group; ?></span></h3>
            <div class="inside" style="">
                <table class="form-table">
                    <tbody>
                        <?php foreach( $settings as $key => $setting ) : ?>
                            <tr id="row_<?php echo $setting[ 'id' ]; ?>">
                                <th scope="row">
                                    <label for="<?php echo $setting[ 'id' ]; ?>"><?php echo $setting[ 'label' ]; ?></label>
                                 </th>
                            <td>
                                <?php
                                    switch ( $setting[ 'type' ] ) {
                                        case 'desc' :
                                            echo $setting[ 'value' ];
                                            echo $setting[ 'desc' ];
                                            break;
                                        case 'textbox' :
                                            echo "<input type='text' class='code widefat' name='{$setting['id']}' id='' value='{$setting['value']}'>";
                                            echo $setting[ 'desc' ];
                                            break;
                                        case 'checkbox' :
                                            echo "<input type='hidden' name='{$setting['id']}' value='0'>";
                                            echo "<input type='checkbox' name='{$setting['id']}' value='1' id='{$setting['id']}' class='widefat'>";
                                            echo '<br>' . $setting[ 'desc' ];
                                    }
                                ?>
                            </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    <?php endforeach; ?>
</div>

