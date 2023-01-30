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
    <section class="contact_img" id="page-title-area">
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
                                                <h3>Membership registration Form</h3>
                                                <div class="register-form">
                                                    <form action="{{route('register.member')}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="lastname">Last Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="lastname" name="lastname" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="firstname">First Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="firstname" name="firstname" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" class="form-control"
                                                                        id="email" name="email" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="phone">Phone</label>
                                                                    <input type="text" class="form-control"
                                                                        id="phone" name="phone" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="gender">Gender</label>
                                                                    <select name="gender" id="gender"
                                                                        class="form-control select">
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="marital_status">Marital Status</label>
                                                                    <select name="marital_status" id="marital_status"
                                                                        class="form-control select">
                                                                        <option value="Single">Single</option>
                                                                        <option value="Married">Married</option>
                                                                        <option value="Divorced">Divorced</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="col-sm-12" ><span id="alertMSG" ></span></div> --}}
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="chapter">Chapter</label>
                                                                    <select name="chapter" id="chapter"
                                                                        class="form-control">
                                                                        @for ($i = 2006; $i <= date('Y'); $i++)
                                                                            <option vlaue="{{ $i }}">
                                                                                {{ $i }}</option>
                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="hostel">Hostel</label>
                                                                   <select name="hostel" id="hostel" class="form-control">
                                                                    @foreach ($hostels as $hostel)
                                                                    <option value="{{ $hostel }}">
                                                                        {{ $hostel }}</option>
                                                                @endforeach
                                                                   </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="lga">State of Origin</label>
                                                                    <select name="state" id="state"
                                                                        class="form-control">
                                                                        <option selected value="">Select State...
                                                                        </option>
                                                                        @foreach ($states as $state)
                                                                            <option value="{{ $state }}">
                                                                                {{ $state }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="lga">LGA of Origin</label>
                                                                    <select name="lga" id="lga"
                                                                        class="form-control">

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="occupation">Occupation</label>
                                                                    <select name="occupation" id="oocupation" class="form-control">
                                                                        <option>Civil Servant</option>
                                                                        <option>Business</option>
                                                                        <option>Private Sector</option>
                                                                        <option>Farmer</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="facebook">Facebook Handle</label>
                                                                    <input type="text" name="facebook"
                                                                        id="facebook" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="twitter">Twitter Handle</label>
                                                                    <input type="text" name="twitter"
                                                                        id="twitter" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group file-input col-12 col-sm-12">
                                                                <label for="photo">Passport</label>
                                                                <input type="file" name="photo" class="form-control" accept=".jpg,.png,.gif,.jpeg" required />
                                                            </div>
    
                                
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Residential Address</label>
                                                                    <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="custom-control custom-checkbox col-sm-8"
                                                                    style="padding-left:20px;">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="customCheck1">
                                                                    <label class="custom-control-label"
                                                                        for="customCheck1"> I have read and agree to the <a
                                                                            href="#">Association</a> Terms of
                                                                        Membership</label>
                                                                </div>
                                                                <button type="submit" class="btn btn-reg "style="float:right !important;">Register</button>
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
    <script>
        var state = document.getElementById("state");
        var lga = document.getElementById("lga");
        let Url = '{{ url('/api/') }}';

        lga.length = 0;

        let defaultOption = document.createElement('option');
        defaultOption.text = 'Choose LGA';

        lga.add(defaultOption);
        lga.selectedIndex = 0;

        state.addEventListener("change", function() {
            // alert(state.value);

            fetch(Url + '/getLGA/' + state.value)
                .then((res) => res.json())
                .then((data) => {
                    console.log(data)
					document.getElementById("lga").innerHTML = "";
                    let option;
                    for (let i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.text = data[i];
                        option.value = data[i];
                        lga.add(option);
                    }

                });
        })
    </script>
    <!--== Register Page Content End ==-->
@endsection
