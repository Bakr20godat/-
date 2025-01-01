
<?php

// 1. array_push()
// تستخدم لإضافة عنصر إلى نهاية المصفوفة.
$arr1 = [1, 2, 3];
array_push($arr1, 4);
print "المصفوفة بعد array_push: " . implode(", ", $arr1) ."<br>"; // [1, 2, 3, 4]
// 2. array_pop()
// تستخدم لإزالة العنصر الأخير من المصفوفة.
$arr2 = [1, 2, 3];
array_pop($arr2);
print "المصفوفة بعد array_pop: " . implode(", ", $arr2) . "<br>"; // [1, 2]
// 3. array_shift()
// تستخدم لإزالة العنصر الأول من المصفوفة.
$arr3 = [1, 2, 3];
array_shift($arr3);
print "المصفوفة بعد array_shift: " . implode(", ", $arr3) . "<br>"; // [2, 3]
// 4. array_unshift()
// تستخدم لإضافة عنصر إلى بداية المصفوفة.
$arr4 = [2, 3];
array_unshift($arr4, 1);
print "المصفوفة بعد array_unshift: " . implode(", ", $arr4) . "<br>"; // [1, 2, 3]

// 5. array_slice()
// تستخدم لاستخراج جزء من المصفوفة.
$arr5 = [1, 2, 3, 4];
$newArr5 = array_slice($arr5, 1, 2);
print "المصفوفة بعد array_slice: " . implode(", ", $newArr5) . "<br>"; // [2, 3]

// 6. array_splice()
// تستخدم لإضافة أو إزالة عناصر من المصفوفة.
$arr6 = [1, 2, 3];
array_splice($arr6, 1, 1, [4]);
print"المصفوفة بعد array_splice: " . implode(", ", $arr6) . "<br>"; // [1, 4, 3]

// 7. array_map()
// تستخدم لتطبيق دالة على كل عنصر في المصفوفة وإرجاع مصفوفة جديدة.
$arr7 = [1, 2, 3];
$newArr7 = array_map(function($num) { return $num * 2; }, $arr7);
print"المصفوفة بعد array_map: " . implode(", ", $newArr7) . "<br>"; // [2, 4, 6]

// 8. array_filter()
// تستخدم لتصفية العناصر في المصفوفة بناءً على شرط معين.
$arr8 = [1, 2, 3, 4];
$newArr8 = array_filter($arr8, function($num) { return $num > 2; });
print "المصفوفة بعد array_filter: " . implode(", ", $newArr8) . "<br>"; // [3, 4]

// 9. array_reduce()
// تستخدم لتقليل المصفوفة إلى قيمة واحدة.
$arr9 = [1, 2, 3];
$sum = array_reduce($arr9, function($acc, $num) { return $acc + $num; }, 0);
print "المجموع بعد array_reduce: " . $sum . "\n"; // 6

// 10. array_search()
// تستخدم للبحث عن عنصر وإرجاع فهرسه.
$arr10 = [1, 2, 3];
$index = array_search(2, $arr10);
print"فهرس العنصر بعد array_search: " . $index . "<br>"; // 1

// 11. in_array()
// تتحقق مما إذا كان العنصر موجودًا في المصفوفة.
$arr11 = [1, 2, 3];
$exists = in_array(2, $arr11);
echo "هل العنصر موجود بعد in_array: " . ($exists ? 'true' : 'false') . "<br>"; // true

// 12. array_keys()
// تُعيد جميع المفاتيح من المصفوفة.
$arr12 = ['a' => 1, 'b' => 2];
$keys = array_keys($arr12);
print "المفاتيح بعد array_keys: " . implode(", ", $keys) . "<br>"; // [a, b]

// 13. array_values()
// تُعيد جميع القيم من المصفوفة.
$arr13 = ['a' => 1, 'b' => 2];
$values = array_values($arr13);
print"القيم بعد array_values: " . implode(", ", $values) . "<br>"; // [1, 2]

// 14. array_merge()
// تستخدم لدمج مصفوفتين أو أكثر.
$arr14_1 = [1, 2];
$arr14_2 = [3, 4];
$newArr14 = array_merge($arr14_1, $arr14_2);
print "المصفوفة المدمجة بعد array_merge: " . implode(", ", $newArr14) . "<br>"; // [1, 2, 3, 4]

// 15. sort()
// تستخدم لترتيب عناصر المصفوفة.
$arr = [3, 1, 2];
sort($arr);
print "المصفوفة بعد sort: " . implode(", ", $arr) . "br"; // [1, 2, 3]
?>


