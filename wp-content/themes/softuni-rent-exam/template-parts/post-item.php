<li class="property-card">
    <div class="property-primary">
        <h2 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="property-meta">
            <span class="meta-location"><?php the_category(); ?></span>
            <span class="meta-total-area"><?php the_author(); ?></span>
        </div>
        <div class="property-details">
            <span class="property-date">Posted at
                <?php
                $post_date = get_the_date('d.m.Y');
                echo $post_date;
                ?>
            </span>
        </div>
    </div>
    <div class="property-image">
        <div class="property-image-box">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            } else {
            ?> <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="default-image-thumbnail"> <?php
                                                                                                                                                                                                                        }
                                                                                                                                                                                                                            ?>
        </div>
    </div>
</li>