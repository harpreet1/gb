/**
 * @author   Nicolas Rod <nico@alaxos.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.alaxos.ch
 */
function init_register_member_controller_toggle_right(app_root_url, member_id, plugin, controller, missing_aco_text)
{
	app_root_url     = ensure_ends_with(app_root_url, "/");
	var plugin_param = (plugin == null || plugin == "" || typeof(plugin) == "undefined") ? '' : "/plugin:" + plugin;
	
	var url = app_root_url + "admin/acl/aros/get_member_controller_permission/" + member_id + plugin_param + "/controller:" + controller;

	$.ajax({	url: url,
				dataType: "html", 
				cache: false,
				success: function (data, textStatus) 
				{
					//alert(data);
					permissions = jQuery.parseJSON(data);
					//alert(permissions);
					
					for(var action in permissions)
					{
						var start_granted = false;
						var span_id       = "right_" + plugin + "_" + member_id + "_" + controller + "_" + action; 
						
						if(permissions[action] == true || permissions[action] == false)
						{
							if(permissions[action] == true)
							{
								icon_html = "<img src=\"" + app_root_url + "acl/img/design/tick.png"  + "\" class=\"pointer\" alt=\"granted\" />";
								start_granted = true;
							}
							else
							{
								icon_html = "<img src=\"" + app_root_url + "acl/img/design/cross.png"  + "\" class=\"pointer\" alt=\"denied\" />";
								start_granted = false;
							}
							
							$("#" + span_id).html(icon_html);
							
							register_member_toggle_right(start_granted, app_root_url, span_id, member_id, plugin, controller, action);
						}
						else
						{
							icon_html = "<img src=\"" + app_root_url + "acl/img/design/important16.png"  + "\" alt=\"" + missing_aco_text + "\" title=\"" + missing_aco_text + "\" />";
							
							$("#" + span_id).html(icon_html);
						}
					}
				}
			});
}
function register_member_toggle_right(start_granted, app_root_url, span_id, member_id, plugin, controller, action)
{
	app_root_url     = ensure_ends_with(app_root_url, "/");
	var plugin_param = (plugin == null || plugin == "" || typeof(plugin) == "undefined") ? '' : "/plugin:" + plugin;
	
	if(start_granted)
	{
		var url1 = app_root_url + "admin/acl/aros/deny_member_permission/" + member_id + plugin_param + "/controller:" + controller + "/action:" + action;
		var url2 = app_root_url + "admin/acl/aros/grant_member_permission/" + member_id + plugin_param + "/controller:" + controller + "/action:" + action;
	}
	else
	{
		var url1 = app_root_url + "admin/acl/aros/grant_member_permission/" + member_id + plugin_param + "/controller:" + controller + "/action:" + action;
		var url2 = app_root_url + "admin/acl/aros/deny_member_permission/" + member_id + plugin_param + "/controller:" + controller + "/action:" + action;
	}
	
	$("#" + span_id).toggle(function()
                    		{
								$("#right_" + plugin + "_" + member_id + "_" + controller + "_" + action + "_spinner").show();
								
								$.ajax({	url: url1,
											dataType: "html", 
											cache: false,
    										success: function (data, textStatus) 
    										{
    											$("#right_" + plugin + "_" + member_id + "_" + controller + "_" + action).html(data);
    										},
    										complete: function()
        									{
        										$("#right_" + plugin + "_" + member_id + "_" + controller + "_" + action + "_spinner").hide();
        									}
										});
                    		}, 
                    		function()
                    		{
                    			$("#right_" + plugin + "_" + member_id + "_" + controller + "_" + action + "_spinner").show();
                    			
                    			$.ajax({	url: url2,
        									dataType: "html", 
        									cache: false,
        									success: function (data, textStatus) 
        									{
        										$("#right_" + plugin + "_" + member_id + "_" + controller + "_" + action).html(data);
        									},
        									complete: function()
        									{
        										$("#right_" + plugin + "_" + member_id + "_" + controller + "_" + action + "_spinner").hide();
        									}
								});
                    		}); 
}


function init_register_role_controller_toggle_right(app_root_url, role_id, plugin, controller, missing_aco_text)
{
	app_root_url     = ensure_ends_with(app_root_url, "/");
	var plugin_param = (plugin == null || plugin == "" || typeof(plugin) == "undefined") ? '' : "/plugin:" + plugin;
	
	var url = app_root_url + "admin/acl/aros/get_role_controller_permission/" + role_id + plugin_param + "/controller:" + controller;

	$.ajax({	url: url,
				dataType: "html", 
				cache: false,
				success: function (data, textStatus) 
				{
					//alert(data);
					permissions = jQuery.parseJSON(data);
					//alert(permissions);
					
					for(var action in permissions)
					{
						var start_granted = false;
						var span_id       = "right_" + plugin + "_" + role_id + "_" + controller + "_" + action; 
						
						if(permissions[action] == true || permissions[action] == false)
						{
							if(permissions[action] == true)
							{
								icon_html = "<img src=\"" + app_root_url + "acl/img/design/tick.png"  + "\" class=\"pointer\" alt=\"granted\" />";
								start_granted = true;
							}
							else
							{
								icon_html = "<img src=\"" + app_root_url + "acl/img/design/cross.png"  + "\" class=\"pointer\" alt=\"denied\" />";
								start_granted = false;
							}
							
							$("#" + span_id).html(icon_html);
							
							register_role_toggle_right(start_granted, app_root_url, span_id, role_id, plugin, controller, action);
						}
						else
						{
							icon_html = "<img src=\"" + app_root_url + "acl/img/design/important16.png"  + "\" alt=\"" + missing_aco_text + "\" title=\"" + missing_aco_text + "\" />";
							
							$("#" + span_id).html(icon_html);
						}
					}
				}
			});
}

function register_role_toggle_right(start_granted, app_root_url, span_id, role_id, plugin, controller, action)
{
	app_root_url     = ensure_ends_with(app_root_url, "/");
	var plugin_param = (plugin == null || plugin == "" || typeof(plugin) == "undefined") ? '' : "/plugin:" + plugin;
	
	if(start_granted)
	{
		var url1 = app_root_url + "admin/acl/aros/deny_role_permission/" + role_id + plugin_param + "/controller:" + controller + "/action:" + action;
		var url2 = app_root_url + "admin/acl/aros/grant_role_permission/" + role_id + plugin_param + "/controller:" + controller + "/action:" + action;
	}
	else
	{
		var url1 = app_root_url + "admin/acl/aros/grant_role_permission/" + role_id + plugin_param + "/controller:" + controller + "/action:" + action;
		var url2 = app_root_url + "admin/acl/aros/deny_role_permission/" + role_id + plugin_param + "/controller:" + controller + "/action:" + action;
	}
	
	$("#" + span_id).toggle(function()
                    		{
								$("#right_" + plugin + "_" + role_id + "_" + controller + "_" + action + "_spinner").show();
								
								$.ajax({	url: url1,
											dataType: "html", 
											cache: false,
    										success: function (data, textStatus) 
    										{
    											$("#right_" + plugin + "_" + role_id + "_" + controller + "_" + action).html(data);
    										},
    										complete: function()
        									{
        										$("#right_" + plugin + "_" + role_id + "_" + controller + "_" + action + "_spinner").hide();
        									}
										});
                    		}, 
                    		function()
                    		{
                    			$("#right_" + plugin + "_" + role_id + "_" + controller + "_" + action + "_spinner").show();
                    			
                    			$.ajax({	url: url2,
        									dataType: "html", 
        									cache: false,
        									success: function (data, textStatus) 
        									{
        										$("#right_" + plugin + "_" + role_id + "_" + controller + "_" + action).html(data);
        									},
        									complete: function()
        									{
        										$("#right_" + plugin + "_" + role_id + "_" + controller + "_" + action + "_spinner").hide();
        									}
								});
                    		}); 
}

function ensure_ends_with(text, trailing_text)
{
	if(text.length < trailing_text.length || text.substring(text.length - trailing_text.length) != trailing_text)
	{
		text = text + trailing_text;
	}
	
	return text;
}