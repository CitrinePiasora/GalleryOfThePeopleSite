@extends('layouts.frontend')

@section('title')
    Gallery
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="inner-container container">
            <div class="row">
                <div class="section-header col-md-12">
                    <h2>Works</h2>
                </div> <!-- /.section-header -->
            </div> <!-- /.row -->
            <div class="row">
                <?php
                    $category = {{ Request::get('category') }};
                    include "db/connect.php";
                ?>
                <div class="blog-masonry masonry-true">
                <?php
                    $result = $db->query("select * from $category");
                    while($row = $result -> fetch_row()) {
                        #print_r($row);
                ?>
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="blog-thumb">
                            <img src="<?=$row[4]?>" alt="">
                            <div class="overlay-b">
                                <div class="overlay-inner">
                                    <a href="blog-single.php?category=<?php echo $category;?>&index=<?=$row[0]?>" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-body">
                            <div class="box-content">
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <?php
                        }
                        $db -> close();
                    ?>
                </div> <!-- /.blog-masonry -->
            </div> <!-- /.row -->
        </div> <!-- /.inner-content -->
    </div> <!-- /.content-wrapper -->
@endsection