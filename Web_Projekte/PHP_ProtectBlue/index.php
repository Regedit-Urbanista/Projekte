<!DOCTYPE html>

<!-- 
    Woche: Tag04 
    Datum: 14.05.2021
    Datei: index.php
    Autor: Lapis
    Beschreibung: Hauptstruktur der dynamischen Webseite
-->

<html lang="de">

<head>
	<meta charset="UTF-8">
	<title>Protect Blue</title>
</head>

<body>
	<!-- Start von Session -->
	<?php session_start(); ?>

	<table width="100%" height="100%">
		<tr>
			<td colspan="3"> <?php include('header.php'); ?> </td>
		</tr>
		<tr>
			<td width="10%"></td>

			<td style="text-align: center;" width="80%">
				<div>
					<fieldset>
						<?php include('routes.php'); ?>
					</fieldset>
				</div>
			</td>
			<td width="10%"></td>
		</tr>
		<tr>
			<td colspan="3"> <?php include('footer.php'); ?> </td>

			<td>
				<?php
				if (isset($_SESSION['register'])) {
					echo $_SESSION['register'];
				}
				?>
			</td>
		</tr>
	</table>
</body>

</html>