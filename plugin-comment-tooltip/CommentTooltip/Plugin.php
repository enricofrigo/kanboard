<?php

namespace Kanboard\Plugin\CommentTooltip;
use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Security\Role;

class Plugin extends Base
{
    public function initialize()
    {
		$this->projectAccessMap->add('BoardCommentTooltipController', '*', Role::APP_USER);
		$this->route->addRoute('/commentTooltip/task/:task_id/project/:project_id','BoardCommentTooltipController', 'comments', 'commentTooltip');
        $this->template->hook->attach('template:board:task:icons', 'CommentTooltip:layout/comment', array('comments_enable' => $this->configModel->get('tooltip_enabled')));
		$this->template->hook->attach('template:config:integrations', 'CommentTooltip:layout/integration');
    }

    public function getPluginName()
    {
        return 'Comment Tooltip';
    }

    public function getPluginDescription()
    {
        return t('Show all comments as tooltip');
    }

    public function getPluginAuthor()
    {
        return 'Enrico Frigo';
    }
	
	    public function getPluginVersion()
    {
        return '1.0.1';
    }
    
    public function getPluginHomepage()
    {
	    return 'https://github.com/enricofrigo/kanboard/tree/master/plugin-comment-tooltip/CommentTooltip';
    }
    
    public function isCommentTooltipEnabeld()
    {
        if (defined('COMMENT_TOOLTIP_ENABLED')) {
            return COMMENT_TOOLTIP_ENABLED;
        }
		error_log($this->configModel->get('tooltip_enabled'));
        return $this->configModel->get('tooltip_enabled');
    }

}
