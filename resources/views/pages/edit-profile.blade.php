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
                        <div class="profilePicUpdate">
                            <h1 class="headings">Update Profile Picture</h1>
                            <div class="profilePic">
                                <img src="{{ $user->profile_photo_path}}" alt="" srcset="">
                            </div>
                            <form class="editProfileForm" action="{{ route('update-picture', $user->id) }}"  method="POST" enctype="multipart/form-data" >
                                @csrf

                                <div>
                                    <input type="file" name="image">
                                </div>
                                <div>
                                    <input type="submit" style="width: 25%; padding:10px" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </main>
@endsection
