<div class="nav-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="sf-menu-block">
                    <div id="menu-icon" class="menu-icon-style">Categorias</div>
                    
                    <ul class="sf-menu-phone">
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
        </div>
        <div class="clear"></div>
    </div>
</div>
