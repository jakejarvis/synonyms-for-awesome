
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>synonyms for awesome</title>
  
  <link href="/style.css" rel="stylesheet">
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
</head>
<body>

<?php

  $synonyms = array();
  
  $fh = fopen('synonyms.txt','r');
  while ($line = fgets($fh)) {
    $synonyms[] = $line;
  }
  fclose($fh);
  
  $synonym = $synonyms[rand(0, count($synonyms) - 1)];

?>

<table><tr><td><?= $synonym ?></td></tr></table> <!-- don't judge me -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1563964-40', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript">
  var _gauges = _gauges || [];
  (function() {
    var t   = document.createElement('script');
    t.type  = 'text/javascript';
    t.async = true;
    t.id    = 'gauges-tracker';
    t.setAttribute('data-site-id', '53ae2eb3eddd5b026800db71');
    t.src = '//secure.gaug.es/track.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(t, s);
  })();
</script>

</body>
</html>