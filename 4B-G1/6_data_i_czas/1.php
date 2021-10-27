<?php

//date()
echo "dzień-miesiąc-rok: ".date('d-m-Y').'<br>';

echo date('m-d-y').'<br>';
echo date('d-M-Y').'<br>';
echo date('d-F-Y').'<br>';

setlocale(LC_ALL, 'polish');
echo strftime('%d %B %Y').'<br>';

echo date('G:i:s').'<br>';
echo date('G:i:sa').'<br>';
echo date('H:i:s').'<br>';

 ?>

<script>
  setTimeout(function(){
    window.location.reload();
  },1000)
</script>

<?php
$date = getdate();
//echo $date; //warning (jest to tablica)

echo "<pre>";
  print_r($date);
echo "</pre>";

echo $date['wday'],'<br>'; // dzień tygodnia
echo $date['yday'],'<br>'; // dzień roku

echo date('L'),'<br>'; // 0 - rok nie jest przestępny

$today = mktime(0,0,0,date('m'),date('d'),date('Y'));
echo $today,'<br>';

$year = $today/(60*60*24*365);
echo $year,'<br>';
echo (int)$year,'<br>';


 ?>
