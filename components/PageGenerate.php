<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 01.07.2018
 * Time: 14:56
 */

class PageGenerate
{
    public function getCountStudent() // Count students in list
    {
    $studentList = Main::getMainPage();
    $countStudent = count($studentList);
return $countStudent;
    }

    public function GeneratePage() //Create amount page, return amount Page
    {
      $countStudent = $this->getCountStudent();
      $standartpage = 5;
      $countPage = array();
      $i = 0;
      while($countStudent>$standartpage)
      {
          $standartpage += $standartpage;
          $i++;
          $countPage[] = $i;
      }
      return $countPage;
    }









}