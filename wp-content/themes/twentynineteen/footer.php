<?php
require_once(__DIR__ . '/../../../vendor/autoload.php');

use Carbon\Carbon;

$created_at = Carbon::now()->format('Y');
?>

<div class="footer">
    2000-<?php echo $created_at; ?>
</div>

<?php wp_footer(); ?>

<script type='text/javascript' src='/wp-content/themes/twentynineteen/dist/index.js'></script>

</body>
</html>
