<?php if (! empty($task['nb_comments'])): ?>
	<?php if ($comments_enable == 1): ?>
		<span title="<?= $task['nb_comments'] == 1 ? t('%d comment', $task['nb_comments']) : t('%d comments', $task['nb_comments']) ?>" class="tooltip tipcomment" data-href="<?= $this->url->href('BoardCommentTooltipController', 'comments', array('plugin' => 'CommentTooltip', 'task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>"><i class="fa fa-comment-o"></i>&nbsp;<?= $task['nb_comments'] ?></span>
	<?php endif ?>
<?php endif ?>