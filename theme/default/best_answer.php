<?php
/**
 * Best answer content
 * 	
 * @author Rahul Aryan <support@anspress.io>
 * @link http://anspress.io/anspress
 * @since 0.1
 *
 * @package AnsPress
 */

/**
 * Show best answer
 */
if(ap_is_answer_selected(get_question_id())){
	echo '<div id="ap-best-answer">';
		echo '<h3 class="ap-widget-title">' . __('Best answer', 'ap') .'</h3>';
		ap_get_best_answer();
	echo '</div>';
}