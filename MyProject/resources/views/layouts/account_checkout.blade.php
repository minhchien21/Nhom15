@extends('about1')
<!-- noi dung ben trong  -->
@section('main1')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Trang Chủ</a></li>
                <li class="active">Thông tin cá nhân</li>
            </ol>
        </div>

        <div class="table-responsive cart_info">


            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Hình ảnh</td>
                        <td class="description">Tên tài khoản</td>
                        <td class="price">Số điện thoại</td>
                        <td class="email">Email</td>
                        <td class="customer">Khách hàng</td>

                        
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td class="cart_product">
                            <a href=""><img width="85px" src="{{url('uploads')}}/home/{{$customer->customer_picture}}" alt=""></a>
                        </td>
                        <td>{{$customer->customer_name}}</td>
                        <td>{{$customer->customer_phone}}</td>
                        <td>{{$customer->customer_email}}</td>
                        <td>
                            @if($customer->customer_vip==1)
                            <span style="color:red">Khách hàng VIP </span>
                            @else
                            <span class="">Khách hàng thường </span>
                            @endif


                        </td>
                    </tr>


                </tbody>

            </table>



        </div>
    </div>
</section>


@stop()