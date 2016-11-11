<?php
/**
 */
?>
<div id="secondary">
<!--    <div class="widget widget_search widget-widget_search">
      <div class="widget-wrap widget-inside">
        <?php get_search_form(); ?>
      </div>
    </div>   
-->    
<!-- 
    <div class="widget widget_categories widget-widget_categories">
      <div class="widget-wrap widget-inside">
        <h3 class="widget-title"><?php _e( 'Categories', 'alkane' ); ?></h3>
          <ul><?php wp_list_categories('title_li='); ?></ul>
      </div>
    </div>     
-->   
    <div class="widget widget_recent_entries widget-widget_recent_entries">
      <div class="widget-wrap widget-inside">
        <h3 class="widget-title">随机文章</h3>
          <ul><?php wp_get_archives('type=postbypost&limit=15'); ?></ul>
      </div>
    </div>
    
    <div class="widget widget_tag_cloud widget-widget_tag_cloud">
      <div class="widget-wrap widget-inside">
        <h3 class="widget-title">近期评论</h3>
        <?php wp_tag_cloud('smallest=10&largest=30&number=30&unit=px&format=flat&orderby=name'); ?>
      </div>
    </div>

    <div class="widget widget_text widget-widget_text">
      <div class="widget-wrap widget-inside">
        <h3 class="widget-title">关于本站</h3>
        <div class="textwidget"><?php bloginfo('description'); ?> </div>
      </div>
    </div> 
</div><!-- #secondary -->
