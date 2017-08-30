<?php

if ($userRow['user_perms'] == 0) {
		$Group = Uživatel;
	} else {
		$Group = Admin;
	}

?>