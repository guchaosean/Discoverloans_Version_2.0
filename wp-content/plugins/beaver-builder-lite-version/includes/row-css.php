<?php if(!empty($row->settings->text_color)) : ?>
.fl-node-<?php echo $row->node; ?> {
    color: #<?php echo $row->settings->text_color; ?>;
}
.fl-node-<?php echo $row->node; ?> * {    
    color: #<?php echo $row->settings->text_color; ?>;
}
<?php endif; ?>

<?php if($row->settings->bg_type == 'color' && !empty($row->settings->bg_color)) : ?>
.fl-node-<?php echo $row->node; ?> .fl-row-content-wrap {
    background-color: #<?php echo $row->settings->bg_color; ?>;
    background-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($row->settings->bg_color)) ?>, <?php echo $row->settings->bg_opacity/100; ?>);
}
<?php endif; ?>

<?php if($row->settings->bg_type == 'photo' && !empty($row->settings->bg_image)) : ?>
.fl-node-<?php echo $row->node; ?> .fl-row-content-wrap {
    background-image: url(<?php echo $row->settings->bg_image_src; ?>);
    background-repeat: <?php echo $row->settings->bg_repeat; ?>;
    background-position: <?php echo $row->settings->bg_position; ?>;
    background-attachment: <?php echo $row->settings->bg_attachment; ?>;
    background-size: <?php echo $row->settings->bg_size; ?>;
}
<?php endif; ?>

<?php if( in_array( $row->settings->bg_type, array('photo', 'parallax', 'slideshow', 'video') ) && !empty($row->settings->bg_overlay_color)) : ?>
.fl-node-<?php echo $row->node; ?> .fl-row-content-wrap {
    position: relative;
}
.fl-node-<?php echo $row->node; ?> .fl-row-content-wrap:after {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 0;
    background-color: #<?php echo $row->settings->bg_overlay_color; ?>;
    background-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($row->settings->bg_overlay_color)) ?>, <?php echo $row->settings->bg_overlay_opacity/100; ?>);
}
.fl-node-<?php echo $row->node; ?> .fl-row-content {
    position: relative;
    z-index: 1;
}
<?php endif; ?>

<?php if($row->settings->bg_type == 'parallax' && !empty($row->settings->bg_parallax_image_src)) : ?>
.fl-node-<?php echo $row->node; ?> .fl-row-content-wrap {
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    background-size: cover;
}
.fl-builder-touch .fl-node-<?php echo $row->node; ?> .fl-row-content-wrap {
    background-image: url(<?php echo $row->settings->bg_parallax_image_src; ?>);
    background-attachment: scroll;
    background-position: center center;
}
<?php endif; ?>

<?php if(!empty($row->settings->border_type)) : ?>
.fl-node-<?php echo $row->node; ?> .fl-row-content-wrap {
    border-style: <?php echo $row->settings->border_type; ?>;
    border-color: #<?php echo $row->settings->border_color; ?>;
    border-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($row->settings->border_color)) ?>, <?php echo $row->settings->border_opacity/100; ?>);
    border-top-width: <?php echo is_numeric($row->settings->border_top) ? $row->settings->border_top : '0'; ?>px;
    border-bottom-width: <?php echo is_numeric($row->settings->border_bottom) ? $row->settings->border_bottom : '0'; ?>px;
    border-left-width: <?php echo is_numeric($row->settings->border_left) ? $row->settings->border_left : '0'; ?>px;
    border-right-width: <?php echo is_numeric($row->settings->border_right) ? $row->settings->border_right : '0'; ?>px;
}
<?php endif; ?>