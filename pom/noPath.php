<?php
/**
 * Δέχεται ένα get HTTP ερώτημα από τον client και απλά γυρίζει πίσω ότι περιέχεται στην
 *μεταβλητή path. Χρησιμοποιείται όταν ο server έχει γυρίσει προηγουμένος στον client ότι δεν
 *υπάρχει διαδρομή για να κριτικάρει ο χρήστης
 */
	$path = $_GET['path'];
	echo $path;
?>