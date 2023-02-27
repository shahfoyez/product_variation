<!--begin::Aside-->
<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Aside Toolbarl-->
    <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
        <!--begin::User-->
        <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
            <!--begin::Symbol-->
            <div class="symbol symbol-50px">
                <img src="{{ auth()->user()->image ? asset(auth()->user()->image) : asset('assets/uploads/default/defaultProfile.webp') }}" alt="" />
            </div>
            <!--end::Symbol-->
            <!--begin::Wrapper-->
            <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
                <!--begin::Section-->
                <div class="d-flex">
                    <!--begin::Info-->
                    <div class="flex-grow-1 me-2">
                        <!--begin::Username-->
                        <a href="#" class="text-white text-hover-primary fs-6 fw-bold">{{ auth()->user()->name }}</a>
                        <!--end::Username-->
                        <!--begin::Description-->
                        <span class="text-gray-600 fw-bold d-block fs-8 mb-1">{{ auth()->user()->role == 1 ? 'Super Admin' : 'Admin' }}</span>
                        <!--end::Description-->
                    </div>
                    <!--end::Info-->
                    @include("components/userMenu")
                </div>
                <!--end::Section-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::User-->
        <!--end::Aside user-->
    </div>
    <!--end::Aside Toolbarl-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                <?php
                    $segment_1 = request()->segment(1) ?? 'dashboard';
                    $segment_2 = request()->segment(2) ?? 'dashboard';
                ?>
                <div class="menu-item">
                    <a class="menu-link {{ ($segment_1 == 'dashboard'  ? 'active': '') }}" href="/">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                {{-- start::Route Management --}}
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ $segment_1 == 'route' ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Icon-->
                            <i class="fas fa-bus-alt"></i>
                            <!--end::Icon-->
                        </span>
                        <span class="menu-title">Product Management</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <?php
                        $routes = array('products', 'productAdd', 'productEdit');
                    ?>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link {{ $segment_2 == in_array($segment_2,  $routes) ? 'active' : '' }}" href="/product/products">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Products</span>
                            </a>
                        </div>
                        <?php
                            // $stopages = array('stoppages', 'stoppageAdd', 'stoppageEdit');
                        ?>
                        {{-- <div class="menu-item">
                            <a class="menu-link {{ $segment_2 == in_array($segment_2,  $stopages) ? 'active' : '' }}" href="/route/stoppages">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Stopages</span>
                            </a>
                        </div> --}}
                    </div>
                </div>
                {{-- end::Route Management --}}

                {{-- start::Our Employees --}}
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ $segment_1 == 'employee' ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Icon-->
                            <i class="fa fa-id-card" aria-hidden="true"></i>
                            <!--end::Icon-->
                        </span>
                        <span class="menu-title">Our Employees</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <?php
                            $employees = array('employees', 'employeeAdd', 'employeeEdit');
                        ?>
                        <div class="menu-item">
                            <a class="menu-link {{ $segment_2 == in_array($segment_2,  $employees) || (request()->segment(2) == 'employeeAdd') ? 'active' : '' }}" href="/employee/employees">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Employees</span>
                            </a>
                        </div>
                        <?php
                            $departments = array('departments', 'departmentAdd', 'departmentEdit');
                        ?>
                        <div class="menu-item">
                            <a class="menu-link {{ $segment_2 == in_array($segment_2,  $departments) ? 'active' : '' }}" href="/employee/departments">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Departments</span>
                            </a>
                        </div>
                        <?php
                            $designations = array('designations', 'designationAdd', 'designationEdit');
                        ?>
                        <div class="menu-item">
                            <a class="menu-link {{ $segment_2 == in_array($segment_2,  $designations) ? 'active' : '' }}" href="/employee/designations">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Designations</span>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- end::Our Employees --}}

                <div class="menu-item">
                    <div class="menu-content">
                        <div class="separator mx-1 my-4"></div>
                    </div>
                </div>
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto py-5" id="kt_aside_footer">
        <a href="/logout" data-bs-toggle="modal" class="btn btn-custom btn-primary w-100" data-bs-target="#kt_modal_create_api_key" class="menu-link px-5">
            <span class="btn-label">Sign Out</span>
        </a>
    </div>
    <!--end::Footer-->
</div>
<!--end::Aside-->
