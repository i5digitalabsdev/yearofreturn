<!DOCTYPE html>
<html lang="en">

<head>
    @include ('admin.includes.head')
</head>

<body>

<div id="page-wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- Top navbar -->
    @include('admin.includes.topBar')
    <!-- end navbar -->
    </div>
    <!-- Top Bar End -->

    <!-- Page content start -->
    <div id="app">
        <div class="page-contentbar">

            <!--left navigation start-->
            <aside class="sidebar-navigation">
                @include('admin.includes.side')
            </aside>
            <!--left navigation end-->

            <!-- START PAGE CONTENT -->
            <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row main-content"  style="padding: 0 30px 0 30px">

                            <span><i class="ti ti-angle-left"></i><a href="{{url('admin/pages')}}">All pages/posts</a></span>
                            <br>
                            <form method="post"  enctype="multipart/form-data" >
                                <h3 class="m-t-10 m-b-20">Add a post</h3>
                                <div class="row add-products-container">
                                    <div class="col-lg-8 m-t-10 products-details">
                                        <div class="col-lg-12 product-entity">
                                            <div class="col-lg-12 form-group m-b-20">
                                                <p>Title</p>
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>
                                        <div class="col-lg-12 product-entity form-group">
                                                <p>Content</p>
                                                <textarea id="postSummer" name="editordata"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 add-products-side">
                                        <div class="col-lg-12 product-organization">
                                            <p>Post Preview</p>
                                            <div class=" m-b-20 col-lg-12">

                                            </div>
                                        </div>
                                        <div class="product-organization">
                                            <p>Post Visibility</p>
                                            <div  class="form-group">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox5" type="checkbox">
                                                    <label for="checkbox5">
                                                        Visible
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 product-organization">
                                            <div class=" m-b-20 col-lg-12 form-group">
                                                <p>Author</p>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class=" m-b-20 col-lg-12 form-group">
                                                <p>Tags</p>
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class=" m-b-20 col-lg-12 form-group">
                                                <p>Category</p>
                                                <select name="" id="" class="form-control">
                                                    <option value="">-- Select a category --</option>
                                                    <option value="">News</option>
                                                    <option value="">Blog</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-t-30">
                                    <span ><input type="submit" value="Save Changes" id="buttonSubmit" class="btn btn-primary btn-block"></span>
                                </div>
                            </form>

                        </div> <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
            </div>
            <!-- End #page-right-content -->

            <div class="clearfix"></div>

        </div>
    </div>
    <!-- end .page-contentbar -->
</div>
<!-- End #page-wrapper -->
@include ('admin.includes.scripts')
</body>

</html>