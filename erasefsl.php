<?php
$file= 'sllist.txt';
$content = file('$file');
unset ($content['0']);
file_put_contents ($file, $content);
?>
<script>
history.go(-1)
</script>