<style>
	table {
		background-color: #fff;
		border: 0px solid #AAA;
		clear: both;
		color: #333;
		border-collapse:collapse;
		padding:0px;
		border-spacing: 0px;
	}
	td {
		border: 1px #999 solid;
		font-size:12px;
	}

	td img {
		width:150px;
	}
</style>

<h2>Vendor Image Edit</h2>

<table>

	<?php foreach ($users as $user): ?>
	<tr>
		<td>
			<?php echo $user['User']['id']; ?>
			<br />
			<?php echo h($user['User']['username']); ?>
			<br />
			<?php echo h($user['User']['name']); ?>
			<br />
			<?php echo $this->Html->link('View', array('action' => 'view', $user['User']['id'])); ?>
		</td>
		<td><?php echo $this->Html->image('users/image/'. $user['User']['image'] . '?date=' . time()); ?></td>
		<td>
		<?php if($this->Form->value('User.image_1') !== '') : ?>

			<?php echo $this->Html->image('users/image_1/'. $user['User']['image_1'] . '?date=' . time()); ?>

			<?php if($this->Form->value('User.image_1') !== '') : ?>
            <?php echo $this->Form->input('pic_title_1'); ?>
            <?php echo $this->Form->input('attribution_1'); ?>
        </div>  
	<?php endif; ?>





		</td>
		<td><?php echo $this->Html->image('users/image_2/'. $user['User']['image_2'] . '?date=' . time()); ?></td>
		<td><?php echo $this->Html->image('users/image_3/'. $user['User']['image_3'] . '?date=' . time()); ?></td>
		<td><?php echo $this->Html->image('users/image_4/'. $user['User']['image_4'] . '?date=' . time()); ?></td>
		<td><?php echo $this->Html->image('users/image_5/'. $user['User']['image_5'] . '?date=' . time()); ?></td>
		<td><?php echo $this->Html->image('users/image_6/'. $user['User']['image_6'] . '?date=' . time()); ?></td>
	</tr>
	<?php endforeach; ?>
</table>

<br />
<br />


<div class="row">


	<?php if($this->Form->value('User.image_1') !== '') : ?>
        <div class="span4">
            <div style="height:245px">       
                <img class="article-img" src="/img/articles/image_1/<?php echo $this->Form->value('User.image_1'); ?>" />
             </div>   
            <?php echo $this->Form->input('pic_title_1'); ?>
            <?php echo $this->Form->input('attribution_1'); ?>
        </div>  
	<?php endif; ?>
                  
        
	<?php if($this->Form->value('User.image_2') !== '') : ?>
        <div class="span4">
            <div style="height:245px">       
                <img class="article-img" src="/img/articles/image_2/<?php echo $this->Form->value('User.image_2'); ?>" />
             </div>   
            <?php echo $this->Form->input('pic_title_2'); ?>
            <?php echo $this->Form->input('attribution_2'); ?>
         </div>       
	<?php endif; ?>
        
        
	<?php if($this->Form->value('User.image_3') !== '') : ?>
        <div class="span4">
            <div style="height:245px">       
                <img class="article-img" src="/img/articles/image_3/<?php echo $this->Form->value('User.image_3'); ?>" />
             </div>   
            <?php echo $this->Form->input('pic_title_3'); ?>
            <?php echo $this->Form->input('attribution_3'); ?>
          </div>               
	<?php endif; ?>
       

	<?php if($this->Form->value('User.image_4') !== '') : ?>
        <div class="span4">xxxx
            <div style="height:245px">       
                <img class="article-img" src="/img/articles/image_4/<?php echo $this->Form->value('User.image_4'); ?>" />
             </div>   
            <?php echo $this->Form->input('pic_title_4'); ?>
            <?php echo $this->Form->input('attribution_4'); ?>                
          </div>         
	<?php endif; ?>
        
        
	<?php if($this->Form->value('User.image_5') !== '') : ?>
        <div class="span4">dfgdfgdfg
            <div style="height:245px">       
                <img class="article-img" src="/img/articles/image_5/<?php echo $this->Form->value('User.image_5'); ?>" />
             </div>   
                <?php echo $this->Form->input('pic_title_5'); ?>
                <?php echo $this->Form->input('attribution_5'); ?>
			</div>            
         </div>
	<?php endif; ?>
        
        
	<?php if($this->Form->value('User.image_6') !== '') : ?>
        <div class="span4">
            <div style="height:245px">       
                <img class="article-img" src="/img/articles/image_6/<?php echo $this->Form->value('User.image_6'); ?>" />
             </div>   
            <?php echo $this->Form->input('pic_title_6'); ?>
            <?php echo $this->Form->input('attribution_6'); ?>
        </div>        
	<?php endif; ?>
        
        
</div>





