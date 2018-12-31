<?php

 function getCategoryName($id)
{
    $category_name= Category::where('id',$id)->first();
    return $category_name->category_name;
}
