<link rel="icon" href="{{ asset('admin/img/mini_logo.png') }}" type="image/png">
<link rel="stylesheet" href="{{ asset('admin/css/bootstrap1.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendors/themefy_icon/themify-icons.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/vendors/niceselect/css/nice-select.css') }}" />
{{-- <link rel="stylesheet" href="{{ asset('admin/vendors/owl_carousel/css/owl.carousel.css') }}" /> --}}
{{-- <link rel="stylesheet" href="{{ asset('admin/vendors/gijgo/gijgo.min.css') }}" /> --}}
<link rel="stylesheet" href="{{ asset('admin/vendors/font_awesome/css/all.min.css') }}" />
{{-- <link rel="stylesheet" href="{{ asset('admin/vendors/tagsinput/tagsinput.css') }}" /> --}}
{{-- <link rel="stylesheet" href="{{ asset('admin/vendors/datepicker/date-picker.css') }}" /> --}}
{{-- <link rel="stylesheet" href="{{ asset('admin/vendors/vectormap-home/vectormap-2.0.2.css') }}" /> --}}
<link rel="stylesheet" href="{{ asset('admin/vendors/scroll/scrollable.css') }}" />
{{-- <link rel="stylesheet" href="{{ asset('admin/vendors/datatable/css/jquery.dataTables.min.css') }}" /> --}}
{{-- <link rel="stylesheet" href="{{ asset('admin/vendors/datatable/css/responsive.dataTables.min.css') }}" /> --}}
{{-- <link rel="stylesheet" href="{{ asset('admin/vendors/datatable/css/buttons.dataTables.min.css') }}" /> --}}
{{-- <link rel="stylesheet" href="{{ asset('admin/vendors/text_editor/summernote-bs4.css') }}" /> --}}
{{-- <link rel="stylesheet" href="{{ asset('admin/vendors/morris/morris.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('admin/vendors/material_icon/material-icons.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/metisMenu.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/style1.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/colors/default.css') }}" id="colorSkinCSS">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
    #multistepform .form-header {
        gap: 5px;
        text-align: center;
        font-size: .9em;
    }

    #multistepform .form-header .stepIndicator {
        position: relative;
        flex: 1;
        padding-bottom: 30px;
    }

    #multistepform .form-header .stepIndicator.active {
        font-weight: 600;
    }

    #multistepform .form-header .stepIndicator.finish {
        font-weight: 600;
        color: #009688;
    }

    #multistepform .form-header .stepIndicator::before {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        z-index: 9;
        width: 20px;
        height: 20px;
        background-color: #d5efed;
        border-radius: 50%;
        border: 3px solid #ecf5f4;
    }

    #multistepform .form-header .stepIndicator.active::before {
        background-color: #a7ede8;
        border: 3px solid #d5f9f6;
    }

    #multistepform .form-header .stepIndicator.finish::before {
        background-color: #009688;
        border: 3px solid #b7e1dd;
    }

    #multistepform .form-header .stepIndicator::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 8px;
        width: 100%;
        height: 3px;
        background-color: #f3f3f3;
    }

    #multistepform .form-header .stepIndicator.active::after {
        background-color: #a7ede8;
    }

    #multistepform .form-header .stepIndicator.finish::after {
        background-color: #009688;
    }

    #multistepform .form-header .stepIndicator:last-child:after {
        display: none;
    }

    /* #multistepform input {
        padding: 15px 20px;
        width: 100%;
        font-size: 1em;
        border: 1px solid #e3e3e3;
        border-radius: 5px;
    }

    #multistepform input:focus {
        border: 1px solid #009688;
        outline: 0;
    }

    #multistepform input.invalid {
        border: 1px solid #ffaba5;
    } */

    #multistepform .step {
        display: none;
    }

    #multistepform .form-footer {
        overflow: auto;
        gap: 20px;
    }

    #multistepform .form-footer button {
        background-color: #009688;
        border: 1px solid #009688 !important;
        color: #ffffff;
        border: none;
        padding: 13px 30px;
        font-size: 1em;
        cursor: pointer;
        border-radius: 5px;
        flex: 1;
        margin-top: 5px;
    }

    #multistepform .form-footer button:hover {
        opacity: 0.8;
    }

    #multistepform .form-footer #prevBtn {
        background-color: #fff;
        color: #009688;
    }

    .sidebar #sidebar_menu>li a {
        grid-template-columns: 16px auto !important;
    }

    .ck-editor__editable {
        min-height: 250px;
    }

    /* input[type="file"] {
        display: none;
    }

    .custom-file-upload {
        border: 2px solid #03A9F4;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    }

    .custom-file-upload {

        padding: 16px;
        border-radius: 11px;
        background: white;
        color: #03A9F4;
        font-size: 17px;
        font-family: cursive;
        margin-left: 40%;
        margin-top: 51px;

    }

    .custom-file-upload i {
        color: #03A9F4;
        font-size: 24px;
        margin-right: 9px;
    } */
</style>
