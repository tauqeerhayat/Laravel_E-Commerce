@extends('layouts.base')

@section('title')
    <title>Update Profile</title>
@endsection

@section('onPageStyle')

@endsection

@section('content')
    <main id="main">
        <div class="container">
            <div class="profile-container">
                <div class="prf-menu">
                    <ul>
                        <li><a href="{{ route('edit.profile') }}">Profile Picture</a></li>
                        <li><a href="{{ route('edit.profile.info') }}">User Information</a></li>
                        <li><a href="{{ route('edit.profile.pass') }}">Password</a></li>
                    </ul>
                </div>
                <div>
                    <div class="profile-base">
                        <div class="profile-base">
                            <h2 class="headings">Update Password</h2>
                            <form class="editProfileForm" action="{{ route('register') }}" name="frm-login" method="POST" >
                                @csrf
                                <div class="wrap-input item-width-in-half left-item ">
                                    <label for="frm-reg-pass">Password </label>
                                    <input type="password" id="frm-reg-pass" name="password" placeholder="Password">
                                </div>
                                <div class="wrap-input item-width-in-half ">
                                    <label for="frm-reg-cfpass">Confirm Password </label>
                                    <input type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="Confirm Password">
                                </div>
                                <input type="submit" class="btn btn-sign" value="Register" name="register">
                            </form>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </main>
@endsection

