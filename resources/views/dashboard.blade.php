@extends('layouts.dashboardMaster')
@section('title')
    Dashboard
@endsection
@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            @if (session()->has('message'))
                <div x-data="{ show:true }"
                    x-init="setTimeout(() => show = false, 4000)"
                    x-show="show"
                    class="alert alert-success pb-0">
                    <p>{{ session('message') }}</p>
                </div>
            @endif
            <h4 class="pb-2">User Based Reservation</h4>
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <div class="col-xl-4">
                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-body-white hoverable card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                            <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
                                    <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
                                    <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5">Seat Request by Students</div>
                            <div class="fw-bold text-gray-400">Today:4 Requests</div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z" fill="black" />
                                    <path opacity="0.3" d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z" fill="black" />
                                    <path opacity="0.3" d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z" fill="black" />
                                    <path opacity="0.3" d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-white fw-bolder fs-2 mb-2 mt-5">Seat Request By Teachers</div>
                            <div class="fw-bold text-white">Today: 5 Requests</div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-dark hoverable card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr070.svg-->
                            <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                    <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                    <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">Seat Request by Staffs</div>
                            <div class="fw-bold text-gray-100">Today: 67 Requests</div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
            </div>
            <!--end::Row-->


              <!--begin::Row-->
              <div class="row g-5 g-xl-8">

                {{-- <div class="col-xl-12">
                    <form>
                        <label for="size">Size:</label>
                        <select id="size" name="size">
                          <option value="">-- Please select a size --</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                        </select>

                        <label for="color">Color:</label>
                        <select id="color" name="color">
                          <option value="">-- Please select a color --</option>
                          <option value="red">Red</option>
                          <option value="green">Green</option>
                          <option value="blue">Blue</option>
                        </select>

                        <label for="price">Price:</label>
                        <input type="text" id="price" name="price">

                        <label for="quantity">Quantity:</label>
                        <input type="text" id="quantity" name="quantity">

                        <button type="button" onclick="addVariation()">Add Variation</button>
                      </form>

                      <table id="variations">
                        <thead>
                          <tr>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Price</th>
                            <th>Quantity</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>

                      <script>
                        function addVariation() {
                          const size = document.getElementById("size").value;
                          const color = document.getElementById("color").value;
                          const price = document.getElementById("price").value;
                          const quantity = document.getElementById("quantity").value;

                          if (!size || !color || !price || !quantity) {
                            alert("Please fill in all fields.");
                            return;
                          }

                          const table = document.getElementById("variations").getElementsByTagName('tbody')[0];
                          const row = table.insertRow(-1);
                          const sizeCell = row.insertCell(0);
                          const colorCell = row.insertCell(1);
                          const priceCell = row.insertCell(2);
                          const quantityCell = row.insertCell(3);

                          sizeCell.innerHTML = size;
                          colorCell.innerHTML = color;
                          priceCell.innerHTML = price;
                          quantityCell.innerHTML = quantity;

                          document.getElementById("size").value = "";
                          document.getElementById("color").value = "";
                          document.getElementById("price").value = "";
                          document.getElementById("quantity").value = "";
                        }
                      </script>
                </div> --}}
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
                                    <button id="add-variation" class="btn btn-sm btn-light-primary me-2 border border-secondary py-3">
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





                {{-- <div class="col-xl-12">
                    <div id="variations">
                        <div class="variation">
                          <label for="variation-name">Variation Name:</label>
                          <input type="text" name="variation-name[]">
                          <label for="variation-value">Variation Value:</label>
                          <input type="text" name="variation-value[]">
                          <button class="remove-variation">Remove Variation</button>
                        </div>
                        <button id="add-variation">Add Variation</button>
                    </div>
                </div> --}}
                <script>
                    // Get the add variation button and variations container
                    const addVariationButton = document.getElementById("add-variation");
                    const variationsContainer = document.getElementById("variations");

                    // Add event listener to add variation button
                    addVariationButton.addEventListener("click", () => {
                        // Create new variation div and append it to variations container
                        const newVariationDiv = document.createElement("div");
                        newVariationDiv.classList.add("variation");
                        newVariationDiv.innerHTML = `<div class="row mb-6"><div class="col-md-2 fv-row"><label class="required fw-bold fs-6 mb-2">Code Name</label><input type="text" name="variation-name[]" class="form-control mb-3 mb-lg-0" placeholder="Code Name" value="{{ old('codeName') }}" /> @error('codeName') <p class="fv-plugins-message-container invalid-feedback"> {{ $message }} </p> @enderror </div> <div class="col-md-2 fv-row"> <label class="fw-bold fs-6 mb-2">License</label> <input type="text" name="license" class="form-control mb-3 mb-lg-0" placeholder="License" value="{{ old('license') }}" /> @error('license') <p class="fv-plugins-message-container invalid-feedback"> {{ $message }} </p> @enderror </div> <div class="col-md-2 fv-row"> <label class="fw-bold fs-6 mb-2">License</label> <input type="text" name="license" class="form-control mb-3 mb-lg-0" placeholder="License" value="{{ old('license') }}" /> @error('license') <p class="fv-plugins-message-container invalid-feedback"> {{ $message }} </p> @enderror </div> <div class="col-md-2 fv-row"> <label class="fw-bold fs-6 mb-2">License</label> <input type="text" name="license" class="form-control mb-3 mb-lg-0" placeholder="License" value="{{ old('license') }}" /> @error('license') <p class="fv-plugins-message-container invalid-feedback"> {{ $message }} </p> @enderror </div> <div class="col-md-2 fv-row"> <label class="fw-bold fs-6 mb-2">License</label> <input type="text" name="license" class="form-control mb-3 mb-lg-0" placeholder="License" value="{{ old('license') }}" /> @error('license') <p class="fv-plugins-message-container invalid-feedback"> {{ $message }} </p> @enderror </div> <div class="col-md-2 fv-row"> <label class="fw-bold fs-6 mb-2">Variation</label><div class="card-toolbar"><button class="btn btn-sm btn-light-primary me-2 border border-secondary py-3 remove-variation"> <span class="svg-icon svg-icon-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"> <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black"></rect> <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black"></rect> </svg> </span> Remove Variation </button> </div></div></div>`;
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
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->
@endsection
