<div class="navbar">

		<div class="navbar-inner">
		
				<div class="nav-collapse">
              
                        <ul class="nav">
                            <li class="dropdown">
                                <a href="/categories" class="js-activated">Food Categories<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <?php foreach($menucategories as $menucategory) : ?>
                                    <li><?php echo $this->Html->link($menucategory['Category']['name'], array('controller' => 'categories', 'action' => 'view', $menucategory['Category']['slug'])); ?></li>
    
                                    <?php endforeach; ?>
                                </ul>
    
                            <?php //echo $this->Html->link('Categories', array('controller' => 'categories', 'action' => 'index')); ?>
                            </li>
                            <li class="dropdown">
                                <a href="/users/vendors" class="js-activated">Vendor Shops<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <?php foreach($menuvendors as $menuvendor) : ?>
                                    <li><?php echo $this->Html->link($menuvendor['User']['name'], 'http://' . $menuvendor['User']['slug'] . '.' . Configure::read('Settings.DOMAIN') . '/'); ?></li>
    
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/ustraditions" class="js-activated">US Food Traditions<b class="caret"></b></a>
                                <ul class="dropdown-menu">
    
                                    <?php //foreach($menu_ustraditions as $menu_ustradition) : ?>
                                    <!--<li><?php //echo $this->Html->link($menu_ustradition['Ustradition']['name'], array('controller' => 'ustraditions', 'action' => 'view', $menu_ustradition['Ustradition']['slug'])); ?></li>-->
                                    <?php //endforeach; ?>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/amish">Amish</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/deep-south ">Deep South </a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/far-west ">Far West </a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/great-lakes">Great Lakes</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/hawaii">Hawaii</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/louisiana">Louisiana</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/mid-atlantic">Mid-Atlantic</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/midwest">Midwest and Plains </a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/native-american">Native American</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/new-england">New England</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/northwest">Pacific Northwest</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/southeast">Southeast</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/southwest">Southwest</a></li>
                                </ul>
                            </li>
                            <!--<a href="http://www.gourmetdev.com/ustraditions">US Traditions</a>-->
                            <?php //echo $this->Html->link('US Markets', array('controller' => 'ustraditions', 'action' => 'index')); ?></li>
                            <li class="dropdown">
                                <a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/traditions" class="js-activated">Int'l Food Traditions<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/africa">Africa </a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/northern_europe">British Isles &amp; Ireland</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/china">China and Taiwan</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/eastern_europe">Eastern and Central Europe</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/japan">Japan</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/korea">Korea</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/mediterranean_europe">Mediterranean Europe</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/mexico_central_america">Mexico and Central America</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/middle_east">Middle East</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/north_america">North America / Canada</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/oceania">Oceania</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/scandinavia">Scandinavia</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/southeast_asia">Southeast Asia</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/south_america">South America</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/south_asia">South Asia</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/the_caribbean">The Caribbean</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/western_europe">Western Europe</a></li>
                                </ul>
                            <?php //echo $this->Html->link('Int\'l Markets', array('controller' => 'traditions', 'action' => 'index')); ?></li>
    
                            <li><?php echo $this->Html->link('Recipes', array('controller' => 'recipes', 'action' => 'index')); ?></li>
			    
                            <!-- For overlay Articles overlay -->
			    <li class="dropdown">
                                <a href="/articles" class="js-activated">Learn More<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
				    <?php foreach($menublocks as $menublock) : ?>
                                    <li><?php echo $this->Html->link($menublock['Block']['name'], '/articles/' . $menublock['Block']['slug']); ?></li>
    
                                    <?php endforeach; ?>
				    </ul>
                            </li>
    
                                <?php //echo $this->Html->link('Products', array('controller' => 'products', 'action' => 'index')); ?></li>
    
                            <li><?php echo $this->Html->link('Cart', array('controller' => 'shops', 'action' => 'cart')); ?></li>
                        </ul>
				</div>
               
			
		</div>
	</div>