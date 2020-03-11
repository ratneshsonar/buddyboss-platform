<?php
/**
 * BuddyBoss - Groups Media
 *
 * @since BuddyBoss 1.0.0
 */
?>

<div class="bb-media-container group-media">

	<?php

	bp_get_template_part( 'document/theatre' );

	if ( bp_is_single_folder() ) {
		bp_get_template_part( 'document/single-folder' );
	} else {

		switch ( bp_current_action() ) :

			// Home/Media
			case 'documents':
				?>
				<div class="bp-document-listing">
					<div class="bp-media-header-wrap">
					
						<h2 class="bb-title"><?php _e( 'Documents', 'buddyboss' ); ?></h2>

						<?php
							bp_get_template_part( 'document/add-document' );
							bp_get_template_part( 'document/add-folder' );
						?>
						
						<div id="search-documents-form" class="media-search-form">
							<label for="media_document_search" class="bp-screen-reader-text"><?php _e( 'Search', 'buddyboss' ); ?></label>
							<input type="text" name="search" id="media_document_search" value="" placeholder="<?php _e( 'Search Documents', 'buddyboss' ); ?>" class="">
						</div>

					</div>
				</div><!-- .bp-document-listing -->
				
				<?php

				bp_nouveau_group_hook( 'before', 'document_content' );

				bp_get_template_part( 'document/actions' );

				?>
				<div id="media-stream" class="media" data-bp-list="document">

					<div id="bp-ajax-loader"><?php bp_nouveau_user_feedback( 'group-document-loading' ); ?></div>

				</div><!-- .media -->
				<?php

				bp_nouveau_group_hook( 'after', 'document_content' );

				break;

			// Any other
			default:
				bp_get_template_part( 'groups/single/plugins' );
				break;
		endswitch;
	}

	?>
</div>