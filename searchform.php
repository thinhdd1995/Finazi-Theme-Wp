<?php
/**
 *	The template for displaying the search form in sidebar.
 *
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <div class="input-group search-form-box">
        <input type="search" class="form-control"  placeholder="<?php echo esc_attr_x( 'Search Post Here...', 'placeholder', 'finazi' ); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'finazi' ); ?>" >
        <span class="input-group-addon">
            <button id="searchsubmit" type="submit">
                <span><i class="fa fa-search" aria-hidden="true"></i></span>
            </button>  
        </span>
    </div><!--/.search-form-box-->
</form><!--/.search-form-->