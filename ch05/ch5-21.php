<?php
$dinner = '갑오징어 카레';

function macrobiotic_dinner() {
    $dinner = "모듬채소";
    print "저녁 메뉴는 $dinner 입니다.";

    print " 하지만 저는 ";
    print $GLOBALS[$dinner];
    print nl2br("를 먹겠어요.\n");
}

macrobiotic_dinner();
print nl2br("일반 저녁 메뉴 : $dinner");
?>