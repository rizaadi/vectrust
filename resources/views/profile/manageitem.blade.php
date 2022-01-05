@extends('layouts.layout')
@section('content')
<div class="primary-content-area container content-padding grid-small-sidebar-left">
   @include('layouts.sidebar')
    <div class="main-content-area">
        <div class="page-title-section">
            <h2><span class="gradient-text">Manage</span> Items</h2>
        </div>
        <!--   items grid -->
        <div class="featured-box manage-items">
            <div class="featured-box-wrapper grid-4-columns">
                <a href="{{route('profile.uploadvector')}}">
                    <div class="create-item">
                        <div class="create-item-wrapper">
                            <div class="create-item-content">
                                <div class="create-item-image">
                                    <svg class="crumina-icon">
                                        <use xlink:href="#upload-icon"></use>
                                    </svg>
                                </div>
                                <div class="create-item-info">
                                    <div class="small-title">Create a New Item!
                                        </div>
                                        <div class="description">Click here to start</div>
                                    </div>
                                </div>
                                <div class="create-item-post-content">
                                    </div>
                                </div>
                            </div>
                        </a>
                @foreach ($vector as $v)
                <div class="featured-item v5">
                    <div class="featured-item-wrapper">
                        <div class="featured-item-content">
                            <a href="{{ route('edit.vector', $v->id) }}">
                                <button class="btn btn-small btn-dark" data-id="{{$v->id}}"
                                    id="editBtn">Edit</button></a>
                            <div class="fav-counter" id="deleteBtn" data-id="{{$v->id}}">Delete</div>
                            <div class="featured-item-image">
                                <a href="#">
                                    <img src="/storage/files/{{$v->itemImage}}" alt=""></a>
                            </div>
                            <div class="featured-item-info">
                                <div class="item-category social-graphics">
                                    Social graphics
                                </div>
                                <div class="title">
                                    <a href="#">{{$v->name}}</a>
                                </div>
                                <div class="item-meta"><span class="avatar box-26"><a href="#"><img
                                                src="{{asset('img/avatar.png')}}" alt=""></a><span class="verified"><svg
                                                class="crumina-icon">
                                                <use xlink:href="#check-icon"></use>
                                            </svg></span></span>@DexterStark</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!--           pagination -->
        <div class="pagination-section flex-right">
            <ul class="pagination-list">
                <li class="page-item page-nav-prev"><a href="#">Prev</a></li>
                <li class="page-item"><a href="#">01</a></li>
                <li class="page-item"><a href="#">02</a></li>
                <li class="page-item"><a href="#">03</a></li>
                <li class="page-item page-more-link"><a href="#">...</a></li>
                <li class="page-item"><a href="#">16</a></li>
                <li class="page-item page-nav-next"><a href="#">Next</a></li>
            </ul>
        </div>
    </div>
</div>
@stop
@section('page-style')
<script type="text/javascript">
    fetchAllProducts();

    function fetchAllProducts() {
        $.get('{{route("fetch.vector")}}', {}, function (data) {}, 'json');
    }

    $(document).on('click', "#editBtnsa", function () {
        var id = $(this).data('id')
        $.get(url, {
            id: id
        }, function (data) {
            var product_modal = $('#review-modal1');
            $(produc_modal).modal('show')
        }, 'json')
    })

    $(document).on('click','#deleteBtn',function(){
        var id = $(this).data('id');
        
        if (confirm('Are you sure you want to delete this vector ?')){
            $.ajax({
                headers:{
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                url:"{{ route('delete.vector') }}",
                method:'POST',
                data:{id:id},
                dataType:'json',
                success:function(data){
                    if (data.code == 1) {
                        fetchAllProducts();
                        alert(data.msg);
                    }else{
                        alert(data.msg);
                    }
                }
                
            })
        }
        
    })

</script>

@stop
