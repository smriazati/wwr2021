<?php for ( $count = 1; $count <= 3; $count++ ) { ?>
                <?php if (get_theme_mod('fp-featuredpg-' . $count)) { ?>
                    <?php 
                        $id1 = get_theme_mod('fp-featuredpg-' . $count);
                        $link1 = get_permalink($id1);
                        $tnail1 = get_the_post_thumbnail($id1, 'bio-square');
                        $customLinkText = get_theme_mod('fp-featuredpg-button-' . $count);
                        $customText = get_theme_mod('fp-featuredpg-title-' . $count);
                    ?>
                    <div class="card card-<?php echo $count ?>">
                    <div class="image-wrapper">
                        <a href="<?php echo $link1 ?>">
                            <?php echo $tnail1 ?>
                        </a>
                    </div>
                    <div class="text-wrapper">
                        <?php if ($customText) { ?>
                            <h2 class="title"><?php echo $customText ?></h2>
                        <?php } ?>
                        <?php if ($customLinkText) { ?>
                            <button><a href="<?php echo $link1 ?>"><?php echo $customLinkText ?></a></button>
                        <?php } ?>
                    </div>
                    </div>
                <?php } ?>
            <?php } ?> 
                