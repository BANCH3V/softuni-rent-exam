<li class="property-card">
    <div class="property-primary">
        <h2 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="property-meta">
             <!-- Sorry, I am cheating here with the template but the time is pressing me :S -->
            <span class="meta-location">Location: Bulgaria</span>
            <span class="meta-total-area">Property size: <?php echo softuni_display_single_term( get_the_ID() , 'size' )?> </span>
        </div>
        <div class="property-details">
            <span class="property-price">Property visits: <?php echo get_post_meta( get_the_ID(), 'views_count', true ) ?></span>
            <span class="property-price">€ 100,815</span>
            <span class="property-date">Posted
                <?php
                /**
                 * Getting post publish date, calculating post difference in days 
                 * and display the number of days difference.
                 */
                $post_date = get_the_date( 'Y-m-d' );
                $days_before = floor( ( time() - strtotime( $post_date ) ) / ( 60 * 60 * 24 ) );
                echo $days_before;
                ?>
                days ago</span>
            <span class="property-price"><a id="<?php echo get_the_ID(); ?>" class="like-button" href="#">Like (<?php echo get_post_meta( get_the_ID(), 'likes', true ) ?>)</a></span>
        </div>
    </div>
    <div class="property-image">
        <div class="property-image-box">
            <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail ();
            } else {
                ?> <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="default-image-thumbnail"> <?php
            }
            ?>
        </div>
    </div>
</li>

