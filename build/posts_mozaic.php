<?
$sections = $main_class->getSections();
if($sections)
{
foreach($sections as $sec_key => $value)
{
	$section_title = $value["section_title"];
	$posts = $user_class->getPostsBySection($sec_key);
	if($posts)
	{
	?>
	<div class="section" id="<?= $sec_key ?>">
		<div class="page-header">
			<h1><?= $section_title ?></h1>
		</div>
		
	<?	
		foreach($posts as $key => $value){ 
			$post_media = explode(",", $value["media"]); 
		?>
			<div class="span4">
				<h2><a href="item.php?id=<?= $key ?>" title="<?= $main_class->getContent('read_all_word'); ?>" rel="tooltip" alt="<?= $main_class->getContent('read_all_word'); ?>"><?= $value["post_title"] ?></a></h2>
				<div class="mozaic_desc">
					<?= strip_tags($value["post_text"], '<strong><a><p><br />'); ?><a class="continue_read" href="item.php?id=<?= $key ?>" title="<?= $main_class->getContent('read_all_word'); ?>" rel="tooltip" alt="<?= $main_class->getContent('read_all_word'); ?>">…<i class="icon-arrow-right"></i></a>
				</div>
			</div>
		<? 
		}
		?>
	</div>
<?}}}?>