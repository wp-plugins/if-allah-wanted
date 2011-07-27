<?php
/*
Plugin Name: تصحيح إن شاء الله
Plugin URI: http://www.traidnt.net/vb/u81557/
Description: مهمة هذه الإضافة هو تصحيح كلمة إن شاء الله , حيث تنتشر هذه الايام وبكثرة بكتابة خاطئة واحياناً مسيئة / 24-7-2011
Author: فراس درويش
Version: 1.0
Author URI: http://www.traidnt.net/vb/u81557/
*/

function main_script ($text) {
    $text = str_replace('انشاء الله', 'إن شاء الله', $text);
    $text = str_replace('أنشاء الله', 'إن شاء الله', $text);
    $text = str_replace('أنشاءالله', 'إن شاء الله', $text);
    $text = str_replace('أنشاالله', 'إن شاء الله', $text);
    $text = str_replace('إنشاء الله', 'إن شاء الله', $text);
    $text = str_replace('إنشاءالله', 'إن شاء الله', $text);
    $text = str_replace('انشاءالله', 'إن شاء الله', $text);
    $text = str_replace('انشاالله', 'إن شاء الله', $text);
    $text = str_replace('إنشاالله', 'إن شاء الله', $text);
    $text = str_replace('أن شاء الله', 'إن شاء الله', $text);
    $text = str_replace('ان شاء الله', 'إن شاء الله', $text);
    $text = str_replace('inchalla', 'إن شاء الله', $text);
    $text = str_replace('inchallah', 'إن شاء الله', $text);
    $text = str_replace('inshalla', 'إن شاء الله', $text);
    $text = str_replace('inshallah', 'إن شاء الله', $text);
    return $text;
}  

add_filter('the_title', 'main_script'); 
add_filter('the_content', 'main_script');
add_filter('comment_text', 'main_script');






?>