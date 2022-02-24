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
                            <h1 class="headings">Update User Information</h1>
                            <form class="editProfileForm" action="{{ route('register') }}" name="frm-login" method="POST" >
                                @csrf
                                <div class="">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" required>
                                </div>
                                <div class="wrap-input">
                                    <label for="frm-reg-email">Email Address</label>
                                    <input type="email" id="frm-reg-email" name="email" value="{{ Auth::user()->email }}" required>
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
