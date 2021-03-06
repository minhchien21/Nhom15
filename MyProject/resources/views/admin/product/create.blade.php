@extends('admin.main')
@section('content')



<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Tạo sản phẩm
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                    <a class="fa fa-times" href="javascript:;"></a>
                </span>
            </header>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="panel-body">
                <div class=" form">
                    <form id="commentForm" novalidate="novalidate" class="cmxform form-horizontal " action="{{url('/admin/insert_product')}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">Tên sản phẩm </label>
                            <div class="col-lg-6">
                                <input required class="form-control" type="text" name="name" placeholder="Name"><br>

                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-3">Hình ảnh </label>
                            <div class="col-lg-6">
                                <input required class="form-control image_preview" onchange="previewFile(this);" type="file" name="file_image" id="file_image">
                                <img width="30%" id="preview_img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png" alt="">
                            </div>

                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-3">Tài liệu </label>
                            <div class="col-lg-6">
                                <input class="form-control" type="file" name="document" id="file_document">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3"> Thể loại </label>
                            <div class="col-lg-6">
                                <input required class="form-control" type="text" name="theloai" placeholder="Thể loại">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="ccomment" class="control-label col-lg-3">Mã sản phẩm </label>
                            <div class="col-lg-6">
                                <select name='masp' class="form-control">

                                    @foreach($cat as $cat)
                                    <option value="{{$cat->theloai}}">{{$cat->Tên}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3"> Tag sản phẩm </label>
                            <div class="col-lg-6">
                                <input required data-role="tagsinput" class="form-control" type="text" name="product_tag">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3"> Số lượng </label>
                            <div class="col-lg-6">
                                <input required class="form-control" type="text" name="quantity" placeholder="Số lượng">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3">Giá sản phẩm </label>
                            <div class="col-lg-6">
                                <input required class="form-control money" type="text" name="price" placeholder="Price ">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3">Giá nhập nguyên liệu </label>
                            <div class="col-lg-6">
                                <input required class="form-control money" type="text" name="import_price" placeholder="Giá nhập hàng ">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3"> Miêu tả sản phẩm </label>
                            <div class="col-lg-6">
                                <textarea id="ckeditor_product_content" class="form-control" type="text" name="content" placeholder="Miêu tả sản phẩm ..." id="summernote"></textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3"> Địa chỉ </label>
                            <div class="col-lg-6">
                                <input required class="form-control" type="text" name="address" placeholder="Địa chỉ"><br>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="curl" class="control-label col-lg-3"> Ngày sản xuất </label>
                            <div class="col-lg-6">
                                <input required class="form-control" type="date" name="date"><br>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="ccomment" class="control-label col-lg-3">Tình trạng trong kho </label>
                            <div class="col-lg-6">
                                <select name='tinhtrang' class="form-control">
                                    <option value="1">Còn Hàng</option>
                                    <option value="0">Hết Hàng</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" type="submit">Tạo sản phẩm</button>
                                <a href="{{url('/admin/product')}}" class="btn btn-default" type="button">Trở về </a>
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </section>
    </div>
</div>



@stop()