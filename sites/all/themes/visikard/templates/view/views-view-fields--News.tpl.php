<?php
// $Id: views-view-fields.tpl.php,v 1.6 2008/09/24 22:48:21 merlinofchaos Exp $
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->separator: an optional separator that may appear before a field.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
	date_default_timezone_set('Asia/Saigon');
	$i=0;
?>
<?php foreach ($fields as $id => $field): ?>	
  <?php if($i==0){ ?>
	<div class="level1-left">
	<?php print $field->content; ?>
	</div>
  <?php } ?>
  <?php if($i==1){ ?>
	<div class="level1-right">
		<div class="right-title">
		<?php print $field->content; ?>
		</div>
	  <?php } ?>
	  <?php if($i==2){ ?>
		<div class="right-date">			
			<?php $post_date = strtotime($field->content); ?>			
			<span class="time"><?php print date('H:i',$post_date); ?> | </span>
			<span class="date"><?php print date('d/m/Y',$post_date); ?></span>			
		</div>
	  <?php } ?>
	  <?php if($i==3){ ?>
		<div class="right-summary">
		<?php print $field->content; ?>
		</div>
	</div>
  <?php } ?>
  <?php $i++; ?>
<?php endforeach; ?>
