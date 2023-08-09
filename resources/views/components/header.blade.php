<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('components.head')
    <meta content="@yield('description')" name="description">
    <meta content="@yield('keywords')" name="keywords">
    <title>@yield('title')</title>
</head>

<body>
    <header id="header" class="fixed-top p-0 shadow-sm">
        <div class="container">
            <nav id="navbar-demo" class="navbar navbar-expand-md navbar-light bg-white">
                <div class="container">
                    <img src="{{ asset('images/logo-no-background.svg') }}"  width="32" height="32" class="d-inline-block" alt="Logo">
                    <a href="{{ url('/') }}" class="navbar-brand fw-bold fs-3 m-2">
                        {{ __('UniLink') }}</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle Navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        {{-- Left Side of Navbar --}}
                        <ul class="navbar-nav me-auto">

                        </ul>
                        {{-- Right Side of Navbar --}}
                        <ul class="navbar-nav ms-auto">
                            {{-- Authentication Links --}}
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
