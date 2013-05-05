<?php
echo $this->element('design/header');
?>

<?php
echo $this->element('Aros/links');
?>

<?php
echo $this->Form->create('Member', array('url' => array('plugin' => 'acl', 'controller' => 'aros', 'action' => 'admin_')));
echo __d('acl', 'name');
echo '<br/>';
echo $this->Form->input($member_display_field, array('label' => false, 'div' => false));
echo ' ';
echo $this->Form->end(array('label' =>__d('acl', 'filter'), 'div' => false));
echo '<br/>';
?>
<table border="0" cellpadding="5" cellspacing="2">
<tr>
	<?php
	$column_count = 1;
	
	$headers = array($this->Paginator->sort($member_display_field, __d('acl', 'name')));
	
	foreach($roles as $role)
	{
	    $headers[] = $role[$role_model_name][$role_display_field];
	    $column_count++;
	}
	
	echo $this->Html->tableHeaders($headers);
	
	?>
	
</tr>
<?php
foreach($ as $member)
{
    $style = isset($member['Aro']) ? '' : ' class="line_warning"';
    
    echo '<tr' . $style . '>';
    echo '  <td>' . $member[$member_model_name][$member_display_field] . '</td>';
    
    foreach($roles as $role)
	{
	   if(isset($member['Aro']) && $role[$role_model_name][$role_pk_name] == $member[$member_model_name][$role_fk_name])
	   {
	       echo '  <td>' . $this->Html->image('/acl/img/design/tick.png') . '</td>';
	   }
	   else
	   {
	   	   $title = __d('acl', 'Update the member role');
	       echo '  <td>' . $this->Html->link($this->Html->image('/acl/img/design/tick_disabled.png'), '/admin/acl/aros/update_member_role/member:' . $member[$member_model_name][$member_pk_name] . '/role:' . $role[$role_model_name][$role_pk_name], array('title' => $title, 'alt' => $title, 'escape' => false)) . '</td>';
	   }
	}
	
    //echo '  <td>' . (isset($member['Aro']) ? $this->Html->image('/acl/img/design/tick.png') : $this->Html->image('/acl/img/design/cross.png')) . '</td>';
    
    echo '</tr>';
}
?>
<tr>
	<td class="paging" colspan="<?php echo $column_count ?>">
		<?php echo $this->Paginator->prev('<< ' . __d('acl', 'previous'), array(), null, array('class'=>'disabled'));?>
	 	|
	 	<?php echo $this->Paginator->numbers(array('modulus' => 5, 'first' => 2, 'last' => 2, 'after' => ' ', 'before' => ' '));?>
	 	|
		<?php echo $this->Paginator->next(__d('acl', 'next') . ' >>', array(), null, array('class' => 'disabled'));?>
	</td>
</tr>
</table>


<?php
if($missing_aro)
{
?>
    <div style="margin-top:20px">
    
    <p class="warning"><?php echo __d('acl', 'Some  AROS are missing. Click on a role to assign one to a member.') ?></p>
    
    </div>
<?php
}
?>

<?php
echo $this->element('design/footer');
?>