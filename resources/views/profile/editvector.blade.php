@extends('layouts.layout')
@section('content')
<div class="primary-content-area container content-padding grid-small-sidebar-left">
@include('layouts.sidebar')
    <div class="main-content-area">
        <div class="page-title-section">
            <h2><span class="gradient-text">Update</span> Vector</h2>
        </div>
        <!--  upload item form -->
        <form class="cryptoki-form" action="{{route('store.vector')}}" method="post" enctype="multipart/form-data"
            id="update-item-form">
            @csrf
            <input type="hidden" name="vid" value="{{$vector->id}}">
            <div class="upload-row">
                <div class="upload-column">
                    <h5>Main Details</h5>
                    <div class="form-field">
                        <label for="item-name">Item name</label>
                        <input type="text" name="name" value="{{$vector->name}}">
                        <span class="text-danger error-text item_name_error"></span>
                    </div>
                    <div class="form-field">
                        <label for="item-description">Description</label>
                        <textarea name="description" cols="30" rows="10">{{$vector->description}}</textarea>
                        <span class="text-danger error-text item_description_error"></span>
                    </div>
                    <div class="form-field">
                        <label for="item-tags">Item Tags</label>
                        <input type="text" name="itemTags" value="{{$vector->itemTags}}">
                        <span class="text-danger error-text item_tags_error"></span>
                    </div>
                    <div class="form-group">
                        <div class="form-field">
                            <label for="software-used">Software Used</label>
                            <input type="text" name="itemSoftware"value="{{$vector->itemSoftware}}">
                            <span class="text-danger error-text item_software_error"></span>
                        </div>
                        <div class="form-field">
                            <label for="files-included">Files Included</label>
                            <input type="text" name="itemFile"value="{{$vector->itemFile}}">
                        </div>
                    </div>
                    <input class="btn btn-wide gradient-background" type="submit" value="Update Item">
                </div>
                <div class="upload-column">
                    <h5>Upload</h5>
                    <div class="upload-container">
                        <div class="artwork-upload">
                            <div class="label">Main File</div>
                            <div class="upload-box"><svg class="crumina-icon">
                                    <use xlink:href="#upload-icon"></use>
                                </svg>
                                <div class="upload-notice"> Max 120MB, PNG, JPEG, MP3, MP4</div>
                                <button data-modal="review-modal1"
                                    class="btn btn-normal btn-dark browse-btn waves-effect waves-button waves-float waves-light">Browse
                                    File</button>
                            </div>
                        </div>
                        <div class="uploaded-preview"><span class="bold green">twitterheaders04.zip</span>
                            uploaded <button class="close"><svg class="crumina-icon">
                                    <use xlink:href="#close-circle-icon"></use>
                                </svg></button></div>
                    </div>
                    <div class="upload-container">
                        <div class="artwork-upload">
                            <div class="label">Preview Image</div>
                            <div class="upload-box"><svg class="crumina-icon">
                                    <use xlink:href="#upload-icon"></use>
                                </svg>
                                <div class="upload-notice"> Max 120MB, PNG, JPEG, MP3, MP4</div>
                                <input type="file" name="itemImageUpdate" class="">
                                <!-- <button
                                    class="btn btn-normal btn-dark browse-btn waves-effect waves-button waves-float waves-light">Browse
                                    File</button> -->
                            </div>
                        </div>
                        <div class="uploaded-preview"><span class="bold green">twitterheaders04.zip</span>
                            uploaded <button class="close" type="file"><svg class="crumina-icon">
                                    <use xlink:href="#close-circle-icon"></use>
                                </svg></button></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="cryptoki-modal" id="review-modal1">
    <div class="modal-bg modal-exit"></div>
    <div class="modal-container">
        <label>Review Title <span class="colored">*</span></label>
        <button class="btn btn-fullwidth gradient-background modal-exit" value="Post review">Close</button>
    </div>
</div>
@stop
@section('page-style')
<script>
$(function() {
            $('#update-item-form').on('submit', function(e) {
                e.preventDefault();

                var form = this;
                $.ajax({
                    headers:{
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                    url: $(form).attr('action'),
                    method: $(form).attr('method'),
                    data: new FormData(form),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    beforeSend: function() {
                        $(form).find('span.error-text').text('');
                    },
                    success: function(data) {
                        if (data.code == 0) {
                            alert("error");
                        } else {
                            $(form)[0].reset();
                            fetchAllProducts();
                            alert(data.msg);
                            window.location.href="{{route('manage.index')}}";
                        }
                    }
                });
            });
            fetchAllProducts();

            function fetchAllProducts() {
                $.get('{{route("fetch.vector")}}', {}, function(data) {}, 'json');
            }
        })
</script>
@stop
