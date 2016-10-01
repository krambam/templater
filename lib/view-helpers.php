<?php
function renderNavigation($navArray){
    $temp = '';
    foreach($navArray as $page){
        if(!$page[1]){
            $temp .= '<li><a href="#">' . $page[0] . '</a></li>';
        }else{
            $tempInner = '';
            foreach($page[1] as $innerPage){
                $tempInner .= '<li><a href="#">' . $innerPage[0] . '</a></li>';
            }
            $temp .= '<li><a href="#">' . $page[0] . '</a><ul>' . $tempInner . '</ul></li>';
        }
    }
    $temp = '<ul class="navigation">' . $temp . '</ul>';
    return $temp;
};