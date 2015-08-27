<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php $layout_context = "public"; ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(true); ?>

<div id="main">
	<div id="navigation">
		<?php echo public_navigation($current_subject, $current_page) ?>
	</div> <!--ends navigation-->
	<div id="page">
		<?php if ($current_page) { ?>

			<h2><?php echo htmlentities($current_page["menu_name"]); ?></h2>
			<?php echo nl2br(htmlentities($current_page["content"])); ?>

		<?php } else { ?>
			<p>Welcome!</p>
		<?php } ?>

	</div> <!--ends page-->
</div> <!--ends main-->

<?php include("../includes/layouts/footer.php"); ?>