@extends('layouts.app') <!-- Or your main layout -->

@section('content')
@include('Chatify::headLinks') <!-- Include Chatify styles -->

<div class="messenger">
    <!-- User List Section -->
    <div class="messenger-listView">
        <div class="m-header">
            <h2>Messages</h2>
            <input type="text" class="messenger-search" placeholder="Search users...">
        </div>
        <div class="listOfContacts">
            @foreach ($users as $user)
                @include('Chatify::listItem', ['user' => $user])
            @endforeach
        </div>
    </div>

    <!-- Messaging Section -->
    <div class="messenger-messagingView">
        <div class="m-header">
            <h3 class="chat-header">Select a user to chat</h3>
        </div>
        <div class="m-body messages-container">
            <p class="message-hint">Please select a user to view messages</p>
        </div>
        @include('Chatify::sendForm')
    </div>

    <!-- Info Section -->
    <div class="messenger-infoView">
        @include('Chatify::info')
    </div>
</div>

@include('Chatify::footerLinks') <!-- Include Chatify scripts -->
@endsection
