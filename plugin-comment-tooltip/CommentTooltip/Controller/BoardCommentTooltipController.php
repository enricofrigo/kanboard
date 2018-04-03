<?php

namespace Kanboard\Plugin\CommentTooltip\Controller;

use Kanboard\Model\UserMetadataModel;
use Kanboard\Controller\BaseController;
use Kanboard\Core\Base;

class BoardCommentTooltipController extends BaseController
{

	/**
     * Display comments during a task mouseover
     *
     * @access public
     */
    public function comments()
    {
        $task = $this->getTask();
        $commentSortingDirection = $this->userMetadataCacheDecorator->get(UserMetadataModel::KEY_COMMENT_SORTING_DIRECTION, 'ASC');

        $this->response->html($this->template->render('CommentTooltip:board/tooltip_comments', array(
            'task' => $task,
            'comments' => $this->commentModel->getAll($task['id'], $commentSortingDirection)
        )));
    }
}
