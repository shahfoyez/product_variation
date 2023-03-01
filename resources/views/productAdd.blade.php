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
                                        <div class="col-md-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label fs-6 mb-2">Category</label>
                                            <!--end::Label-->

                                            <!--begin::Select2-->
                                            <select class="form-select" name="type" data-control="select2" data-placeholder="Type" data-hide-search="true">
                                                <option ></option>
                                                <option value="1" selected>Electronics</option>
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
                                        <div class="col-md-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label fs-6 mb-2">Subcategory</label>
                                            <!--end::Label-->
                                            <!--begin::Select2-->
                                            <select class="form-select" name="sub-category" data-control="select2" data-placeholder="Status" data-hide-search="true">
                                                <option></option>
                                                <option value="1" selected>Mobile</option>
                                                <option value="2">Laptop</option>
                                                <option value="2">Monitor</option>
                                                <option value="2">Speaker</option>
                                                <option value="2">Mouse</option>
                                            </select>
                                            @error('status')
                                                <p class="fv-plugins-message-container invalid-feedback">
                                                    {{  $message }}
                                                </p>
                                            @enderror
                                            <!--begin::Select2-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                 <!--begin::Row-->
                                    <div class="row g-5 g-xl-8">
                                        <div id="variations">
                                            <div class="variation">
                                                <!--begin::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Col-->
                                                    <div class="col-md-2 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Code Name</label>
                                                        <!--end::Label-->

                                                        <!--begin::Input-->
                                                        <input type="text" name="variation-name[]" class="form-control mb-3 mb-lg-0" placeholder="Code Name" value="{{ old('codeName') }}" />
                                                        @error('codeName')
                                                            <p class="fv-plugins-message-container invalid-feedback">
                                                                {{  $message }}
                                                            </p>
                                                        @enderror
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-md-2 fv-row">
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
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-md-2 fv-row">
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
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-md-2 fv-row">
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
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-md-2 fv-row">
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
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-md-2 fv-row">
                                                        <label class="fw-bold fs-6 mb-2">Variation</label>

                                                        <div class="card-toolbar">
                                                            <button type="button" id="add-variation" class="btn btn-sm btn-light-primary me-2 border border-secondary py-3">
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black"></rect>
                                                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black"></rect>
                                                                </svg>
                                                            </span>
                                                            Add Variation</a>

                                                            <!--end::Toolbar-->
                                                        </div>
                                                        {{-- <button id="add-variation">Add Variation</button> --}}
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                        </div>
                                        <script>
                                            // Get the add variation button and variations container
                                            const addVariationButton = document.getElementById("add-variation");
                                            const variationsContainer = document.getElementById("variations");

                                            // Add event listener to add variation button
                                            addVariationButton.addEventListener("click", () => {
                                                // Create new variation div and append it to variations container
                                                const newVariationDiv = document.createElement("div");
                                                newVariationDiv.classList.add("variation");
                                                newVariationDiv.innerHTML = `<div class="row mb-6"><div class="col-md-2 fv-row"><label class="required fw-bold fs-6 mb-2">Code Name</label><input type="text" name="variation-name[]" class="form-control mb-3 mb-lg-0" placeholder="Code Name" value="{{ old('codeName') }}" /> @error('codeName') <p class="fv-plugins-message-container invalid-feedback"> {{ $message }} </p> @enderror </div> <div class="col-md-2 fv-row"> <label class="fw-bold fs-6 mb-2">License</label> <input type="text" name="license" class="form-control mb-3 mb-lg-0" placeholder="License" value="{{ old('license') }}" /> @error('license') <p class="fv-plugins-message-container invalid-feedback"> {{ $message }} </p> @enderror </div> <div class="col-md-2 fv-row"> <label class="fw-bold fs-6 mb-2">License</label> <input type="text" name="license" class="form-control mb-3 mb-lg-0" placeholder="License" value="{{ old('license') }}" /> @error('license') <p class="fv-plugins-message-container invalid-feedback"> {{ $message }} </p> @enderror </div> <div class="col-md-2 fv-row"> <label class="fw-bold fs-6 mb-2">License</label> <input type="text" name="license" class="form-control mb-3 mb-lg-0" placeholder="License" value="{{ old('license') }}" /> @error('license') <p class="fv-plugins-message-container invalid-feedback"> {{ $message }} </p> @enderror </div> <div class="col-md-2 fv-row"> <label class="fw-bold fs-6 mb-2">License</label> <input type="text" name="license" class="form-control mb-3 mb-lg-0" placeholder="License" value="{{ old('license') }}" /> @error('license') <p class="fv-plugins-message-container invalid-feedback"> {{ $message }} </p> @enderror </div> <div class="col-md-2 fv-row"> <label class="fw-bold fs-6 mb-2">Variation</label><div class="card-toolbar"><button class="btn btn-sm btn-light-primary me-2 border border-secondary py-3 remove-variation"> <span class="svg-icon svg-icon-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"> <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black"></rect> <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black"></rect> </svg> </span> Remove </button> </div></div></div>`;
                                                variationsContainer.appendChild(newVariationDiv);

                                                // Add event listener to remove variation button
                                                const removeVariationButton = newVariationDiv.querySelector(".remove-variation");
                                                removeVariationButton.addEventListener("click", () => {
                                                    newVariationDiv.remove();
                                                });
                                            });
                                        </script>
                                    </div>
                                    <!--end::Row-->

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
