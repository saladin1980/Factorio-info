
<?php 

$pgs = $db->query("
	SELECT id, label, slug
	FROM pages
")->fetchAll(PDO::FETCH_ASSOC);
?>
<ul class="menu"> 
<?php foreach ($pgs as $pg): ?>
<li>
    <a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $pg['slug']; ?>"><?php echo $pg['label']; ?></a>
</li>
<?php endforeach; ?>
</ul>