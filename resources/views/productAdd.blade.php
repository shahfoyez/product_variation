@extends('layouts.dashboardMaster')
@section('title')
    Add Product
@endsection
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                 <!--begin::errors-->
                @include('components.flashMessage')
                @include('components.success')
                @include('components.error')
                <script src="https://cdn.tiny.cloud/1/j0bzo9ug3y00501t4mv2gq6h4mx2hn3otq6sjmbnzopfc07i/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
                <script>
                    tinymce.init({
                      selector: 'textarea#mytextarea',
                      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
                      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                      tinycomments_mode: 'embedded',
                      tinycomments_author: 'Author name',
                      mergetags_list: [
                        { value: 'First.Name', title: 'First Name' },
                        { value: 'Email', title: 'Email' },
                      ]
                    });
                </script>
                <!--end::errors-->
                <!--begin::Contact-->
                <div class="card">
                    <!--begin::Body-->
                    <div class="card-body p-lg-17">
                        <!--begin::Row-->
                        <div class="row mb-3">
                            <!--begin::Col-->
                            <div class="col-md-12 pe-lg-10">
                                <!--begin::Form-->
                                <form action="/product/productAdd" class="form" method="post" id="" enctype="multipart/form-data">
                                    @csrf
                                    <h1 class="fw-bolder text-dark mb-9">Add Product</h1>
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Col-->
                                        <div class="col-md-12 fv-row">
                                            <!--begin::Label-->
                                            <label class="required fw-bold fs-6 mb-2">Product Name</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <textarea type="text" name="codeName" class="form-control mb-3 mb-lg-0" placeholder="Code Name" value="{{ old('codeName') }}" > </textarea>
                                            @error('codeName')
                                                <p class="fv-plugins-message-container invalid-feedback">
                                                    {{  $message }}
                                                </p>
                                            @enderror
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        {{-- <div class="col-md-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="fw-bold fs-6 mb-2">License</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text"  name="license" class="form-control mb-3 mb-lg-0" placeholder="License" value="{{ old('license') }}" />
                                            @error('license')
                                                <p class="fv-plugins-message-container invalid-feedback">
                                                    {{  $message }}
                                                </p>
                                            @enderror
                                            <!--end::Input-->
                                        </div> --}}
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                         <!--begin::Col-->
                                         <div class="col-md-12 fv-row">
                                            <!--begin::Label-->
                                            <label class="required fw-bold fs-6 mb-2">Description</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <textarea id="mytextarea" name="description"></textarea>
                                            @error('meter_start')
                                                <p class="fv-plugins-message-container invalid-feedback">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                     <!--begin::Input group-->
                                     <div class="row mb-6">
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label fs-6 mb-2">Category</label>
                                            <!--end::Label-->

                                            <!--begin::Select2-->
                                            <select class="form-select" name="type" data-control="select2" data-placeholder="Type" data-hide-search="true">
                                                <option></option>
                                                <option value="1">Electronics</option>
                                                <option value="2">Fashion</option>
                                                <option value="3">Beauty</option>
                                                <option value="4">Grocery</option>

                                                {{-- @foreach ($types as $type )
                                                    <option value="{{ $type->id }}" {{ old('type') == $type->id ? 'selected' : '' }}>{{ ucfirst($type->name) }}</option>
                                                @endforeach --}}
                                                <option value="0">Others</option>
                                            </select>
                                            @error('type')
                                                <p class="fv-plugins-message-container invalid-feedback">
                                                    {{  $message }}
                                                </p>
                                            @enderror
                                            <!--begin::Select2-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label fs-6 mb-2">Subcategory</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <select class="form-select" name="status" data-control="select2" data-placeholder="Status" data-hide-search="true">
                                                <option></option>
                                                <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Available</option>
                                                <option value="maintenance" {{ old('status') == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
                                            </select>
                                            @error('status')
                                                <p class="fv-plugins-message-container invalid-feedback">
                                                    {{  $message }}
                                                </p>
                                            @enderror
                                            <!--begin::Select2-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label fs-6 mb-2">GPS Device</label>
                                            <!--end::Label-->

                                            <!--begin::Select2-->
                                            <select class="form-select" name="gps_id" data-control="select2" data-placeholder="GPS Device">

                                                <option value = "0">None</option>
                                                {{-- @foreach ($devices as $device )
                                                    <option value="{{ $device->id }}"
                                                        {{ old('gps_id') == $device->id ? 'selected' : '' }}
                                                        {{ $device->vehicle ? 'disabled' : '' }}
                                                    >
                                                        {{ $device->code_name }}
                                                        {{ $device->vehicle ? ' (Not Available)' : '' }}
                                                    </option>
                                                @endforeach --}}

                                            </select>
                                            @error('gps_id')
                                                <p class="fv-plugins-message-container invalid-feedback">
                                                    {{  $message }}
                                                </p>
                                            @enderror
                                            <!--begin::Select2-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Col-->
                                        <div class="col fv-row mt-5">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-empty" data-kt-image-input="true" style="background-image: url('/assets/media/avatars/blank.png')">
                                                <!--begin::Image preview wrapper-->
                                                <div class="image-input-wrapper w-125px h-125px"></div>
                                                <!--end::Image preview wrapper-->

                                                <!--begin::Edit button-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                                data-kt-image-input-action="change"
                                                data-bs-toggle="tooltip"
                                                data-bs-dismiss="click"
                                                title="Vehicle Image">
                                                    <i class="bi bi-pencil-fill fs-7"></i>

                                                    <!--begin::Inputs-->
                                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Edit button-->

                                                <!--begin::Cancel button-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                                data-kt-image-input-action="cancel"
                                                data-bs-toggle="tooltip"
                                                data-bs-dismiss="click"
                                                title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel button-->

                                                <!--begin::Remove button-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                                data-kt-image-input-action="remove"
                                                data-bs-toggle="tooltip"
                                                data-bs-dismiss="click"
                                                title="Remove avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                @error('image')
                                                    @include('components.validation')
                                                @enderror
                                                <!--end::Remove button-->
                                            </div>
                                            <!--end::Image input-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Submit-->
                                    <button type="submit" class="btn btn-primary mt-5" onClick="this.form.submit(); this.disabled=true; this.innerText='Wait...'; ">
                                        <!--begin::Indicator-->
                                        <span class="indicator-label">Submit</span>
                                        {{-- <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span> --}}
                                        <!--end::Indicator-->
                                    </button>
                                    <!--end::Submit-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Col-->

                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Contact-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection



