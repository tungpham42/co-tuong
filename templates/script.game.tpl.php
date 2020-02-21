<?php
include template('script.common');
?>
<script src="<?php echo $cdn_url; ?>/static/js/xiangqiboard.js?v=1"></script>
<script src="<?php echo $cdn_url; ?>/static/js/xiangqi.js?v=1"></script>
<script>
$('#url').on('click', function() {
    copyToClipboard('#url');
    selectText('#url')
})
</script>