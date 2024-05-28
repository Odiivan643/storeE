@extends('base')

@section('title')
    Contact Page | ZoomStore
@endsection

@section('content')
<div class="main_content">
 <div class="section pb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-map2"></i>
                        </div>
                        <div class="contact_text">
                            <span>Address</span>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-envelope-open"></i>
                        </div>
                        <div class="contact_text">
                            <span>Email Address</span>
                            <a href="mailto:"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact_wrap contact_style3">
                        <div class="contact_icon">
                            <i class="linearicons-tablet2"></i>
                        </div>
                        <div class="contact_text">
                            <span>Phone</span>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="section pt-0">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session("success") }}
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading_s1">
                        <h3>Entrez votre message</h3>
                    </div>
                    <p class="leads">Faites vos remarques en détails et sans taboure </p>
                    <div class="field_form">
                    @include('contactFrontForm') 
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    

</div>
@endsection