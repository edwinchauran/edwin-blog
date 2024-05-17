<?php get_header();?>
        <!-- BANNER -->
        <header class="offset-0 offset-xl-1 col-12 col-md-12 col-xl-10 p-0 d-flex justify-content-center">
            <?php include('modules/banner.php');?>
        <body class="bg-purple-2">
            <!-- LEFT - SIDEBAR  -->
            <aside id="leftbar" class="col-lg-2 offset-0 offset-xl-1 text-white d-none d-lg-block bg-purple">
                <?php include('modules/leftbar.php')?>
            <!-- HIGHTLIGHTS POSTS -->
            <div class=" col-12 col-lg-10 col-xl-8 offset-0 offset-lg-2 offset-xl-3 bg-white">
                <?php include('modules/hightlights.php')?>
            <!-- MAIN SECTION-->
            <div class="recientes col-12 col-md-10 col-lg-8 col-xl-6 offset-0 offset-lg-2 offset-xl-3 pb-3 pb-md-0 bg-white">
                <?php include('modules/newsfeed.php')?>
            </div>      
            <!-- RIGHT - SIDEBAR    -->
            <aside class="col-12 col-md-2 rightbar px-md-2 py-md-1 bg-purple">
                <?php get_sidebar();?>
        </body>
        <footer class="p-1 col-12 col-xl-6 text-center text-white offset-0 offset-xl-3">
            <?php get_footer();?>
