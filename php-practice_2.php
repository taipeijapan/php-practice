<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します';
echo "\n\n\n\n";
for($i=1; $i<=100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo 'tic-tac';
    } elseif ($i % 4 === 0) {
        echo 'tic';
    } elseif ($i % 5 === 0) {
        echo 'tac';
    } else {
        echo $i;
    }
    echo "\n";
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];
// 問題1
$targetInfo = $personalInfos[1];
echo $targetInfo['name'].'の電話番号は'.$targetInfo['tel'].'です。';
echo "\n";

// 問題2
foreach ($personalInfos as $index => $info) {
    echo ($index + 1).'番目の'.$info['name'].'のメールアドレスは'.$info['mail'].'で、電話番号は'.$info['tel'].'です。'."\n";
}
// 問題3
$ageList = [25, 30, 18];
foreach ($personalInfos as $index => $info) {
    $info['age'] = $ageList[$index];
    // foreachが値渡しのため、$personalInfosを更新
    $personalInfos[$index] = $info;
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this->studentName.'は'.$subject.'の授業に参加しました。'.'学籍番号:'.$this->studentId;
    }
}
$yamada = new Student(120, '山田');
echo '学績番号'. $yamada->studentId .'の生徒は'. $yamada->studentName .'です。'."\n";

// Q4 オブジェクト-2
$yamada->attend('PHP');
echo "\n";

// Q5 定義済みクラス
// 問題1
$date1MonthLater = new Datetime('2025-8-9');
echo $date1MonthLater->format('Y-m-d');
echo "\n";
// 問題2
$oldDate = new Datetime('1992-4-25');
$dateDiff = $date1MonthLater->diff($oldDate);
echo 'あの日から'. $dateDiff->days . '日経過しました。';
?>
