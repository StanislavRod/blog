<!-- ======================== START HEADER AREA HERE ====================================== -->
<header class="themeix-header clearfix">
    <div class="themeix-header-navigation bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between themeix">
                        <div class="themeix-logo">
                            <a class="themeix-brand" href="/"><img src="{{asset('images/logo.png')}}"
                                                                   alt="header brand"></a>
                        </div>
                        <div class="header-container d-flex justify-content-between highlight">
                            <nav class="highlight">
                                <ul id="main-menu" class="slimmenu">
                                    <li>
                                        <a href="/" target="_blank">Home</a>
                                    </li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/tags">Tags</a></li>
                                    <li>
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li><a href="/blog-details">Blog Details</a></li>
                                            <li><a href="/author">Author</a></li>
                                            <li><a href="/authors">Authors</a></li>
                                            <li><a href="/tag">Tag</a></li>
                                            <li><a href="/tags">Tags</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/contact">Contact</a></li>
                                    <li>
                                        <a href="#" class="search-modal" data-toggle="modal" data-target="#searchmodal">
                                            <img src="{{asset('images/search-icon.png')}}" alt="image"/>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="searchmodal" tabindex="-1" role="dialog">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Keyword">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ======================== END HEADER AREA HERE ================================= -->
