# 課題

```$fruits``` 配列の内容を ```<table>``` タグを用いて整形して出力しなさい。

# php の配列

php の配列は、単に「ものが順番に並んでいる」ことを表すのではない。「キー」と「そのキーに対応する値」のペアが保存される「辞書」である。

```
$fruits = [
  'apple' => 'red',
  'orange' => 'orange',
  'strawberry' => 'red',
];
print( $fruits['apple'] ); // red
```

したがって、同じキーに別の値を割り当てようとすると、前の値が書き換わる（別の値ペアを記録することはできない）

```
$fruits = [
  'apple' => 'red',
  'orange' => 'orange',
  'strawberry' => 'red',
];
print( $fruits['apple'] ); // red
$fruits['apple'] = 'green';
print( $fruits['apple'] ); // green
```

キーを指定しない場合、０から始まる一連番号がキーとして（自動的に）与えられ、辞書と配列を区別する言語における配列と同じように扱うことができる。

```
$name = ['TAMA', 'MIKE', 'SHIRO'];
print( $name[1] ); // MIKE
```

配列へのデータの追加は、いきなり代入してよい。（すでにキーが存在するときに書き換えられることには注意）

```
$fruits = [
  'apple' => 'red',
  'orange' => 'orange',
  'strawberry' => 'red',
];
$fruits['grape' => 'grape'];
var_dump($fruits);
```

```
$name = ['TAMA', 'MIKE', 'SHIRO'];
$name[] = 'BUCHI';
var_dump($name);
```

配列からものを一つずつ取り出すときには、```foreach``` 構文を使用する。

```
foreach(配列変数 as 値変数)
foreach(配列変数 as キー変数 => 値変数)
```

```
$fruits = [
  'apple' => 'red',
  'orange' => 'orange',
  'strawberry' => 'red',
];
foreach($f as $fruits)
{
  print($fruit);
}
foreach($f => $c as $fruits)
{
  print("$f, $c")
}
```
