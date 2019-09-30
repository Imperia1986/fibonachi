function fibonachi($lenght) {
    $arr = [];
    $summa = 0;
    for($i = 0; $i < $lenght; ++$i) {
        for($j = 0; $j < $lenght; ++$j) {
            if($i < 2 && $j < 2) {
                $arr[$i][$j] = 1;
            } elseif($i < 2 && $j >= 2) {
                $arr[$i][$j] = $arr[$i][$j - 1] + $arr[$i][$j - 2];
            } else {
                $arr[$i][$j] = $arr[$i - 1][$j] + $arr[$i - 2][$j];
            }
        }
        $summa += $arr[$i][sizeof($arr[$i]) - $i - 1];
    }
    return ['data' => $arr, 'summa' => $summa];
}

$arr = fibonachi(0);
echo('сумма: '.$arr['summa']);
?>
<table border="1" cellpadding="10" border="1" rules="all">
  <?foreach($arr['data'] as $arr2):?>
      <tr>
        <?foreach($arr2 as $val):?>
            <td><?=$val?></td>
        <?endfroeach;?>
      </tr>
  <?endfroeach;?>
</table>
