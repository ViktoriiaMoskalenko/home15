<?php
$sort = array(-50, -40, -30, -20, -10, 0, 10, 20, 30, 40, 50);

if ($sort[0] > $sort[1][2][3][4][5][6][7][8][9][10]) {
    echo $sort[0], $sort[1][2][3][4][5][6][7][8][9][10];
    echo '<hr>';
} else {
    echo $sort[1][2][3][4][5][6][7][8][9][10], $sort[0];
    echo '<hr>';
}
if ($sort[1] > $sort[0][2][3][4][5][6][7][8][9][10]) {
    echo $sort[1], $sort[2][3][4][5][6][7][8][9][10];
    echo '<hr>';
} else {
    echo $sort[0][2][3][4][5][6][7][8][9][10], $sort[1];
    echo '<hr>';
}

if ($sort[2] > $sort[0][1][3][4][5][6][7][8][9][10]) {
    echo $sort[0][1], $sort[2], $sort[3][4][5][6][7][8][9][10];
    echo '<hr>';
} else {
    echo $sort[0][1][3][4][5][6][7][8][9][10], $sort[2];
    echo '<hr>';
}

if ($sort[3] > $sort[0][1][2][4][5][6][7][8][9][10]) {
    echo $sort[0][1][2], $sort[3], $sort[4][5][6][7][8][9][10];
    echo '<hr>';
} else {
    echo $sort[0][1][2][4][5][6][7][8][9][10], $sort[3];
    echo '<hr>';
}

if ($sort[4] > $sort[0][1][2][3][5][6][7][8][9][10]) {
    echo $sort[0][1][2][3], $sort[4], $sort[5][6][7][8][9][10];
    echo '<hr>';
} else {
    echo $sort[0][1][2][3][4][6][7][8][9][10], $sort[5];
    echo '<br>';
}

if ($sort[5] > $sort[0][1][2][3][4][6][7][8][9][10]) {
    echo $sort[0][1][2][3][4], $sort[5], $sort[6][7][8][9][10];
    echo '<hr>';
} else {
    echo $sort[0][1][2][3][4][6][7][8][9][10], $sort[5];
    echo '<hr>';
}

if ($sort[6] > $sort[0][1][2][3][4][5][7][8][9][10]) {
    echo $sort[0][1][2][3][4][5], $sort[6], $sort[7][8][9][10];
    echo '<hr>';
} else {
    echo $sort[0][1][2][3][4][5][7][8][9][10], $sort[6];
    echo '<hr>';
}

if ($sort[7] > $sort[0][1][2][3][4][5][6][8][9][10]) {
    echo $sort[0][1][2][3][4][5][6], $sort[7], $sort[8][9][10];
    echo '<hr>';
} else {
    echo $sort[0][1][2][3][4][5][6][8][9][10], $sort[7];
    echo '<hr>';
}
if ($sort[8] > $sort[0][1][2][3][4][5][6][7][9][10]) {
    echo $sort[0][1][2][3][4][5][6][7], $sort[8], $sort[9][10];
    echo '<hr>';
} else {
    echo $sort[0][1][2][3][4][5][6][7][9][10], $sort[8];
    echo '<hr>';
}

if ($sort[9] > $sort[0][1][2][3][4][5][6][7][8][10]) {
    echo $sort[0][1][2][3][4][5][6][7][8], $sort[9];
    echo '<hr>';
} else {
    echo $sort[0][1][2][3][4][5][6][7][8][10], $sort[9];
    echo '<hr>';
}

if ($sort[10] > $sort[0][1][2][3][4][5][6][7][8][9]) {
    echo $sort[0][1][2][3][4][5][6][7][8][9], $sort[10];
    echo '<hr>';
} else {
    echo $sort[0][1][2][3][4][5][6][7][8][9], $sort[10];
    echo '<hr>';
}

$arr = array();
for ($i = 0; $arr < $arr++; $i++) {
    if ($arr[$i] < $arr[$i] = $arr[$i]++) {
        echo $arr[$i];
        echo '<hr>';
    } else {
        echo $arr[$i] = $arr[$i]++;
        echo '<hr>';
    }
}
?>
