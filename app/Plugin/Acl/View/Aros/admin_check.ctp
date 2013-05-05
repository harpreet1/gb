<?php
echo $this->element('design/header');
?>

<?php
echo $this->element('Aros/links');
?>

<?php
if(count($missing_aros['roles']) > 0)
{
	echo '<h3>' . __d('acl', 'Roles without corresponding Aro') . '</h3>';
	
	$list = array();
	foreach($missing_aros['roles'] as $missing_aro)
	{
		$list[] = $missing_aro[$role_model_name][$role_display_field];
	}
	
	echo $this->Html->nestedList($list);
}
?>

<?php
if(count($missing_aros['']) > 0)
{
	echo '<h3>' . __d('acl', 'Members without corresponding Aro') . '</h3>';
	
	$list = array();
	foreach($missing_aros[''] as $missing_aro)
	{
		$list[] = $missing_aro[$member_model_name][$member_display_field];
	}
	
	echo $this->Html->nestedList($list);
}
?>

<?php
if(count($missing_aros['roles']) > 0 || count($missing_aros['']) > 0)
{
	echo '<p>';
	echo $this->Html->link(__d('acl', 'Build'), '/admin/acl/aros/check/run');
	echo '</p>';
}
else
{
	echo '<p>';
	echo __d('acl', 'There is no missing ARO.');
	echo '</p>';
}
?>

<?php
echo $this->element('design/footer');
?>