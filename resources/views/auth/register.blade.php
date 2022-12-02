@extends('layouts.welcome')
@section('content')
    <style>
.select {
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background-color: #fff;
    background-image: url(arrow.png);
    background-repeat: no-repeat;
    background-position: right .7em top 50%, 0 0;
    background-size: .65em auto;
}
    </style>
        <!--== Page Title Area Start ==-->
        <section  class="contact_img" id="page-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center">
                        <div class="page-title-content">
                            <h1 class="h2">Membership Form</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== Page Title Area End ==-->
        <!-- alert area -->
    
    
        <!--== Register Page Content Start ==-->
        <section id="page-content-wrap">
            <div class="register-page-wrapper section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="register-page-inner">
                                <div class="col-lg-10 m-auto">
                                    <div class="register-form-content">
                                        <div class="row">
                                            <!-- Regsiter Form Area Start -->
                                            <div class="col-lg-12 col-md-6 ml-auto">
                                                <div class="register-form-wrap">
                                                    <h3>registration Form</h3>
                                                    <div class="register-form">
                                                        <form action="" method="POST" id="registerFor" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="surname">SurName</label>
                                                                        <input type="text" class="form-control" id="surname" name="surname" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="firstname">FirstName</label>
                                                                        <input type="text" class="form-control" id="firstname" name="firstname" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="othername">OtherName</label>
                                                                        <input type="text" class="form-control" id="othername" name="othername" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="email">Email</label>
                                                                        <input type="email" class="form-control" id="email" name="email" />
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="phone">Phone</label>
                                                                        <input type="text" class="form-control" id="phone" name="phone" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="gender">Gender</label>
                                                                       <select name="gender" id="gender" class="form-control select">
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                       </select>
                                                                    </div>
                                                                </div>
                                                                
                                                                {{-- <div class="col-sm-12" ><span id="alertMSG" ></span></div> --}}
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="marital_status">Marital Status</label>
                                                                       <select name="marital_status" id="marital_status" class="form-control select">
                                                                        <option value="Single">Single</option>
                                                                        <option value="Married">Married</option>
                                                                        <option value="Divorced">Divorced</option>
                                                                       </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="chapter">Chpater</label>
                                                                        <select name="chpater" id="chapter" class="form-control">
                                                                            @for ($i = 2006; $i <= date('Y'); $i++)
                                                                                <option vlaue="{{$i}}">{{$i}}</option>
                                                                            @endfor
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_deptno">State of Origin</label>
                                                                        <select name="state" id="state" class="form-control">

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_deptno">LGA of Origin</label>
                                                                        <select name="state" id="state" class="form-control">
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="occupation">Occupation</label>
                                                                        <input type="text" name="occupation" id="occupation" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="occupation">Occupation</label>
                                                                        <input type="text" name="occupation" id="occupation" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           <div class="form-group file-input">
                                                                <input type="file" name="register_file" id="customfile" class="d-none" accept=".jpg,.png,.gif,.jpeg" required />
                                                                <label class="custom-file" for="customfile"><i class="fa fa-upload"></i>Upload Your Photo <span class="text-danger">Max 2MB</span></label>
                                                            </div> 
    
                                                            <div class="form-group">
                                                                <div class="row" >
                                                                    <div class="custom-control custom-checkbox col-sm-8" style="padding-left:20px;">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                        <label class="custom-control-label" for="customCheck1"> I have read and agree to the <a href="#">NACOS</a> Terms of Membership</label>
                                                                    </div>
                                                                    <input type="submit" class="btn btn-reg " style="float:right !important;" value="Register" id="reg_  stud">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Regsiter Form Area End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== Register Page Content End ==-->
@endsection
    