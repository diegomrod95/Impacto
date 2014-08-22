<div class="col-left sidebar col-xs-12 col-sm-3">
    <div class="nav-container block first">
        <div class="menu-icon-style">Categories</div>
        <ul class="sf-menu-phone item">
            <?php foreach ($this->categorias as $cat) : ?>
                <li class="level0 nav-1 level-top">
                    <a title="<?php echo $cat->get_nome(); ?>" href="<?php echo "/categoria/produtos/" . $cat->get_id(); ?>" class="level-top">
                        <span><?php echo utf8_encode($cat->get_nome()); ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>