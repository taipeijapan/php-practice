<?php
// Q1 変数と文字列
$name = "堀家";
echo '私の名前は「' . $name . '」です。';
echo "\n";

// Q2 四則演算
$num = 5 * 4;
echo $num / 2;
echo "\n";

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
$date = date('Y年m月d日 H時i分s秒');
echo '現在時刻は、'. $date .'です。';
echo "\n";

// Q4 条件分岐-1 if文
$device = 'Windows';
if ($device === 'Windows') {
  echo 'Windowsを使用しています。';
} else {
  if ($device === 'Mac') {
    echo 'Macを使用しています。';
  } else {
    echo 'どちらでもありません。';
  }
}
echo "\n";

// Q5 条件分岐-2 三項演算子
$age = 20;
$message = $age >= 20 ? '成人です。' : '未成年です。';
echo $message;
echo "\n";

// Q6 配列
$kantoPrefectures = [
    '東京都',
    '神奈川県',
    '栃木県',
    '千葉県',
    '群馬県',
    '埼玉県',
    '茨城県',
];
echo $kantoPrefectures[2]. 'と' . $kantoPrefectures[3] . 'は関東地方の都道府県です。';
echo "\n";

// Q7 連想配列-1
$officeAddress = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
    '愛知県' => '名古屋市',
    '大阪府' => '大阪市 '
    ];
foreach ($officeAddress as $city) {
    echo $city;
    echo "\n";
}
// Q8 連想配列-2
foreach ($officeAddress as $prefectureName => $city) {
    if ($prefectureName === '埼玉県') {
        echo $prefectureName .'の県庁所在地は'. $city . 'です。';
    }
}
echo "\n";
// Q9 連想配列-3
foreach ($officeAddress as $prefectureName => $city) {
    if (in_array($prefectureName, $kantoPrefectures)) {
        echo $prefectureName .'の県庁所在地は'. $city . 'です。';
    } else {
        echo $prefectureName.'は関東地方ではありません。';
    }
    echo "\n";
}

// Q10 関数-1
function hello($name)
{
    return $name.'さん、こんにちは。'."\n";
}
echo hello('堀家');
echo hello('藤森');

// Q11 関数-2
function calcTaxInPrice($price)
{
    $taxRate = 10;
    return $price * ( 1 + $taxRate / 100 );
}
$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo $price.'円の商品の税込価格は'.$taxInPrice.'円です。';
echo "\n";
// Q12 関数とif文
function distinguishNum($num)
{
    if ($num % 2 === 1) {
        return $num .'は奇数です。';
    } elseif ($num % 2 === 0) {
        return $num .'は偶数です。';
    }
    // 数値型以外の場合は何もしない
}
echo distinguishNum(11);
echo "\n";
echo distinguishNum(22);
echo "\n";
// Q13 関数とswitch文
function evaluateGrade($grade)
{
    switch($grade) {
        case 'A':
        case 'B':
            return '合格です。';
        case 'C':
            return '合格ですが追加課題があります。';
        case 'D':
            return '不合格です。';
        default:
            return '判定不明です。講師に問い合わせてください。';
    }
}
echo evaluateGrade('A');
echo evaluateGrade('Z');
?>
