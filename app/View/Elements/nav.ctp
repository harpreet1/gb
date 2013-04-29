

<div class="navbar">

    <div class="navbar-inner">
    
    <div class="nav-collapse">
    
        <ul class="meganizr mzr-slide mzr-responsive">
            
            <!-- 4 Columns Mega Dropdown --> 
            <!-- Portfolio -->
            <li class="mzr-drop"> <a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/categories">Foods<b class="caret"></b></a>
                <div class="mzr-content drop-three-columns popover-content">
					<div class="wide">
                     	<p class="nav-special"><a href="/categories">Stop by our "Pantry"</a></p>
						<?php foreach($menucategories as $menucategory) : ?>
						<p><?php echo $this->Html->link($menucategory['Category']['name'], array('controller' => 'categories', 'action' => 'view', $menucategory['Category']['slug'])); ?></p>
						<?php endforeach; ?>
                       
					</div>
				</div>
            </li>
            
            <li class="mzr-drop"> <a href="#" >Shops<b class="caret"></b></a>
                <div class="mzr-content drop-three-columns popover-content">
					<div class="wide">
                    <?php foreach($menuvendors as $menuvendor) : ?>
                    <p><?php echo $this->Html->link($menuvendor['User']['name'], 'http://' . $menuvendor['User']['slug'] . '.' . Configure::read('Settings.DOMAIN') . '/'); ?></p>
                    <?php endforeach; ?>
                    <span class="special"><a href="/users/vendors">Full Vendor List</a></span>
					</div>
				</div>
            </li>

            <li class="mzr-drop">
            	<a href="#">US Traditions<b class="caret"></b></a>
                <div class="mzr-content drop-three-columns popover-content">
					<div class="wide">
                    <?php //foreach($menu_ustraditions as $menu_ustradition) : ?>
                    <!--<li><?php //echo $this->Html->link($menu_ustradition['Ustradition']['name'], array('controller' => 'ustraditions', 'action' => 'view', $menu_ustradition['Ustradition']['slug'])); ?></li>-->
                    <?php //endforeach; ?>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/amish">Amish</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/deep-south ">Deep South </a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/far-west ">Far West </a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/great-lakes">Great Lakes</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/hawaii">Hawaii</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/louisiana">Louisiana</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/mid-atlantic">Mid-Atlantic</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/midwest">Midwest and Plains </a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/native-american">Native American</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/new-england">New England</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/northwest">Pacific Northwest</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/southeast">Southeast</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/southwest">Southwest</a></p>
                    <p></p>
                     <span class="special"><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/ustraditions">[ The US Map Tool ]</a></span>
					</div>
				</div>
            </li>
            <!--<a href="http://www.gourmetdev.com/ustraditions">US Traditions</a>-->
            <?php //echo $this->Html->link('US Markets', array('controller' => 'ustraditions', 'action' => 'index')); ?>
           
            
            
            <li class="mzr-drop"> <a href="#">Int'l Food Traditions<b class="caret"></b></a>
            	<div class="mzr-content drop-three-columns popover-content">
					<div class="wide">
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/africa">Africa </a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/northern_europe">British Isles &amp; Ireland</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/china">China and Taiwan</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/eastern_europe">Eastern and Central Europe</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/japan">Japan</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/korea">Korea</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/mediterranean_europe">Mediterranean Europe</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/mexico_central_america">Mexico and Central America</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/middle_east">Middle East</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/north_america">North America / Canada</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/oceania">Oceania</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/scandinavia">Scandinavia</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/southeast_asia">Southeast Asia</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/south_america">South America</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/south_asia">South Asia</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/the_caribbean">The Caribbean</a></p>
                    <p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/western_europe">Western Europe</a></p>
                    <p></p>
                    <span class="special"><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/traditions">[ The World Map Tool ]</a></span>
                
                <?php //echo $this->Html->link('Int\'l Markets', array('controller' => 'traditions', 'action' => 'index')); ?>
                     </div>
                </div>
            </li>
            
            
            <li class="mzr-drop"> <a href="/recipes">Recipes<b class="caret"></b></a>
				<div class="mzr-content drop-two-columns popover-content">
                	<div class="wide">
						<p><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/recipes">All Gourmet Basket Recipes</a></p>
            		</div>
                </div>
            </li>
            
            <!-- For overlay Articles overlay -->
            
            <li class="mzr-drop"> <a href="#" >The Magazine<b class="caret"></b></a>
                <div class="mzr-content drop-two-columns popover-content">
                	<div class="wide">
                    <p class="special"><a href="/articles">THE LATEST</a></p>
                    <span class="special nolink">MAGAZINE SECTIONS:</span>
                    <ul>
                        
                        <?php foreach($menublocks as $menublock) : ?>
                        <?php /*?><p><?php echo $this->Html->link($menublock['Block']['name'], '/articles/' . $menublock['Block']['slug']); ?></p><?php */?>
                        <li><p>-<a href="http://www.<?php echo Configure::read('Settings.DOMAIN') . '/articles/' . $menublock['Block']['slug']; ?>">
                        <?php echo  $menublock['Block']['name'] ; ?>
                        
                           </a></p></li>
                    
                    <?php endforeach; ?>
                     </div>
                </div>
            </li>
            
            <?php //echo $this->Html->link('Products', array('controller' => 'products', 'action' => 'index')); ?>
            
           <?php /*?> <li class='btn btn-gb'><?php echo $this->Html->link('CART', array( 'controller' => 'shops', 'action' => 'cart')); ?></li>
            <?php */?>
            
             <li class="cart">
                 <a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/shops/cart">
                 <button class="btn btn-global" type="submit"><i class="icon-shopping-cart icon-white"></i>GO TO CART</button>
                 </a>
             </li>
            
            
        </ul>
</div>
</div>
</div>
