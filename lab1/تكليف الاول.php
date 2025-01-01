<?php

$variableName = "Value";


// 2. الجملة الشرطية if
//تستخدم لتنفيذ كود معين إذا كانت الشرطية صحيحة.

if ($variableName == "Value") {
    echo "The condition is true."."<br>";
}


// 3. الجملة الشرطية else
//تستخدم لتنفيذ كود بديل إذا كانت الشرطية غير صحيحة.


if ($variableName == "Value") {
    echo "The condition is true."."<br>";
} else {
    echo "The condition is false."."<br>";
}


// 4. الجملة الشرطية else if
//تستخدم للتحقق من شروط متعددة.


if ($variableName == "Value1") {
    echo "Value1"."<br>";
} elseif ($variableName == "Value2") {
    echo "Value2"."<br>";
} else {
    echo "No match."."<br>";
}


// 5. الجملة switch
//تستخدم لاختيار واحد من عدة خيارات.


switch ($variableName) {
    case "Value1":
        echo "Case 1"."<br>";
        break;
    case "Value2":
        echo "Case 2"."<br>";
        break;
    default:
        echo "Default case"."<br>";
}

// 6. حلقة for
//تستخدم لتكرار كود عدد محدد من المرات.


for ($i = 0; $i < 5; $i++) {
    echo "Iteration: " ."<br>". $i;
}


// 7. حلقة while
//تستخدم للتكرار حتى يصبح الشرط غير صحيح.


$i = 0;
while ($i < 5) {
    echo "Iteration: " . $i."<br>";
    $i++;
}


// 8. حلقة do...while
//تعمل بنفس طريقة while، لكن تضمن تنفيذ الكود مرة واحدة على الأقل.


$i = 0;
do {
    echo "Iteration: " . $i."<br>";
    $i++;
} while ($i < 5);


// 9. استخدام do...while
 //مثال على استخدام do...while


$i = 0;
do {
    echo "This will print at least once: " . $i."<br>";
    $i++;
} while ($i < 5);



 ?>


 