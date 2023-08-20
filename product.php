<?php

use classes\Category;

 require_once("includes/include.php") ?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <!-- getbootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/ 533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <title>Document</title>
    <link rel="stylesheet" href="CJP/new.css" />
    <link rel="stylesheet" href="CJP/d.css" />
  </head>
  <body>
    <!-- header -->
    <div class="container-fluid">
      <div class="row">
        <header class="col-12 bg-262626 d-flex flex-wrap justify-content-around align-items-center">
          <div class="d-flex justify-content-between align-items-center col-lg-3 col-12">
            <div class="logo">
              <img src="images/R-removebg-preview.png" width="60" alt="M" />
            </div>
            <div class="upgrade mr-2">
              <h5 class="tx-y" title="اکانتتو اپگرید کن تا از ویزه گی های خوب سایت بهره ببری.">Upgrade</h5>
            </div>
            <div class="location d-flex mr-2 align-items-center">
              <h6 class="ml-1">
                <strong>I.R.I Tehran</strong>
              </h6>
              <i class="fa fa-map-marker font-icon"></i>
            </div>
          </div>
          <div class="search col-lg-6 col-12">
            <form class="form-inline d-flex">
              <button class="btn btn-f ml-n2 my-sm-0 b-l" type="role">همه</button>
              <input class="form-control w-75" type="search" placeholder="جستجو" aria-label="Search" />
              <button class="btn btn-f ml-n2 my-sm-0 b-r float-right bg-y" type="submit">جستجو</button>
            </form>
          </div>
          <div class="d-flex justify-content-between align-items-center col-lg-3 col-12">
            <div class="d-flex">
              <a href="google.com" class="btn btn-secondary btn-md mx-2" role="button">ورود</a>
              <a href="google.com" class="btn btn-secondary btn-md active" role="button">ثبت نام</a>
            </div>

            <div class="my_post w-icon">
              <i class="fa fa-user mt-1">
                <h6 class="dash ml-n2">داشورد</h6>
              </i>
            </div>
          </div>
        </header>
      </div>
    </div>
    <div class="container-fluid bg-ldark">
      <div class="row d-flex justify-content-between align-items-center">
        <nav class="nav h-nav d-flex justify-content-between">
          <ul class="nav align-items-center">
            <li class="nav-item">
              <a class="lis hamburger-menu mr-3" href="#"> خانه </a>
            </li>
            <li class="nav-item">
              <a class="lis" href="#">محصولات</a>
            </li>
            <?php if($pages = Post::getAllPosts(2)) : 
              foreach ($pages as $page) :?>

            <li class="nav-item">
              <a class="lis" href="?action<?php $page->id; ?>"><?php echo $page->title; ?></a>
            </li>
            <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </nav>
        <h6 class="text-light ml-1 my-lg-0 my-3">
          <strong>ارزان تر از اینجا پیدا نمیکنی</strong>
        </h6>
      </div>
    </div>
    <!-- product -->
    <div class="border border-danger container-fluid d-flex">
      <div class="col-3 border border-info p-0">
        <div class="MainContainer">
          <div class="MenuContainer GLOW">
            <?php 
            // for parents
            if($rootCats = Category::getCategoryByParentId(0)) {  
            foreach ($rootCats as $rootCat) : ?>
            <div class="OptionContainer">
              <div class="OptionHead">
                <div>
                  <a href="?cat=<?php echo $rootCat->id;?>"><?php echo $rootCat->category_name;?></a>
                </div>
                <div>
                  <i onclick="ToggleOption(this)" style="cursor: pointer;" class="fa fa-angle-down"></i>
                </div>
              </div>
              <?php 
              // for children
              if($childCats = Category::getCategoryByParentId($rootCat->id)) { foreach ($childCats as $childCat) : ?>
              <div class="OptionBody">
                <div class="OptionContainer">
                  <div class="OptionHead">
                    <div>
                      <a href="?cat=<?php echo $childCat->id;?>"><?php echo $childCat->category_name;?></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; }?>
            </div>
            <?php endforeach;} ?>
          </div>
        </div>
        
        <ul class="list-group">
          <?php
            $recentPosts = Post::getAllPosts(1,true,0,MAX_LAST_POST);
            foreach ($recentPosts as $Post) : ?>
          <li class="list-group-item">
            <a href="?post=<?php echo $Post->id; ?>"><?php echo $Post->title; ?></a>
          </li>

          <?php endforeach;?>
        </ul>

        <!-- target="_blank" rel="noopener noreferrer" -->
      </div>
      <div class="col-9 p-0">
        <?php require "includes/showAll.php" ?>
      </div>
    </div>

    <script src="CJP/script.js"></script>
    <script src="CJP/new.js"></script>
    <script src="CJP/scrtpt1.js"></script>
  </body>
</html>
