<template>
    <div>
        <header class="site-header container-fluid">
            <div class="top-header">
                <div class="logo col-md-6 col-sm-6">
                    <h1><a href="/home"><em>GalleryOf</em>ThePeople</a></h1>
                </div> <!-- /.logo -->
                <div class="social-top col-md-6 col-sm-6">
                    <div v-if="user">
                        <form class="form-inline" action="/upload" id="upload">
                            <input class="mainBtn" type="submit" value="logout" form="logout"/>
                            <input class="mainBtn" type="submit" value="upload"/>
                        </form>
                    </div>

                    <div v-else>
                        <div v-if="!user">
                            <form class="form-inline" action="/upload" id="upload">
                                <input class="mainBtn" type="submit" value="need an account?" form="register"/>
                            </form>
                        </div>
                        <div v-else>
                            <form class="form-inline" action="/upload" id="upload">
                                <input class="mainBtn" type="submit" value="login" form="login"/>
                                <input class="mainBtn" type="submit" value="need an account?" form="register"/>
                            </form>
                        </div>
                    </div>
                    
                    <form class="form-inline" action="/login" id="login"></form>
                    <form class="form-inline" action="/logout" id="logout"></form>
                    <form class="form-inline" action="/register" id="register"></form>
                </div> <!-- /.social-top -->
            </div> <!-- /.top-header -->
            <div class="main-header">
                <div class="row">
                    <div class="menu-wrapper col-md-9 col-sm-6 col-xs-4">
                        <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                        <ul class="sf-menu hidden-xs hidden-sm">
                                <li><router-link to="/home">Home</router-link></li>
                                <li><router-link to="/gallery/*">Artwork</router-link>
                                    <ul>
                                        <li><a href="/gallery/paintings">Physical Art</a></li>
                                        <li><a href="/gallery/sculptures">Sculptures</a></li>
                                        <li><a href="/gallery/photography">Photography</a></li>
                                        <li><a href="/gallery/digital">Digital Art</a></li>
                                    </ul>
                                </li>
                                <li><router-link to="/contact">Contact Us</router-link></li>
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            </header> <!-- /.site-header -->
        </div>
</template>