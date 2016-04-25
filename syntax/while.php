<?php


while ($nr != 1)  //!=1  - ei ole 1  (tehakse nii kaua tsüklit kui tuleb 10)
{
  $nr = rand(1, 10);
  $counter++;
  echo "$counter) $nr<br>";
} 