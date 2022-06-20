@extends('ambassador.layouts.app')
@section('content')
<div class="profile-content">
    <div class="container">
        <div class="profile-content-inner">
            <div class="profile-content-boxs">
                <div class="profile-content-boxs-single social-information-content-box">
                    <div class="social-information-content-inner">
                        <div class="content-sides">
                            <div class="content-side-01">
                                <div class="content-cards">
                                    <div class="content-card">
                                        <div class="content-card-inner">
                                            <div class="content-top-bar">
                                                <div class="content-top-bar-inner">
                                                    <div class="content-top-bar-title">
                                                        <div class="text">
                                                            About
                                                        </div>
                                                        <div class="edit-button">
                                                            <div class="edit-button-inner">
                                                                <span class="icon"><span class="ti-pencil-alt"></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="social-dropdown">
                                                        <div class="social-dropdown-inner">
                                                            <div class="social-dropdown-main">
                                                                <div class="icon">
                                                                    <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                </div>
                                                                <div class="text">
                                                                    Friends
                                                                </div>
                                                                <div class="drop-icon">
                                                                    <span class="ti-angle-down"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-card-content">
                                                <div class="content-card-content-inner">
                                                    <p>
                                                        {{auth()->user()->details->about}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-card">
                                        <div class="content-card-inner">
                                            <div class="content-top-bar">
                                                <div class="content-top-bar-inner">
                                                    <div class="content-top-bar-title">
                                                        <div class="text">
                                                            Social Information
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-card-content">
                                                <div class="content-card-content-inner">
                                                    <div class="social-info-editor-box">
                                                        <div class="social-info-editor-box-inner">
                                                            <ul class="social-info-editor-box-ul">
                                                                <li class="social-info-editor-box-li">
                                                                    <div class="info-editor-box">
                                                                        <div class="info-editor-box-title">
                                                                            <div class="info-editor-box-title-text">
                                                                                City
                                                                            </div>
                                                                            <div class="edit-button">
                                                                                <div class="edit-button-inner">
                                                                                    <span class="icon"><span class="ti-pencil-alt"></span></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-editor-box-value">
                                                                            <div class="info-editor-box-value-text">
                                                                                {{auth()->user()->details->city}}
                                                                            </div>
                                                                            <div class="set-privacy-dropdown">
                                                                                <div class="set-privacy-dropdown-value">
                                                                                    <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                </div>
                                                                                <div class="set-privacy-dropdown-inner">
                                                                                    <ul class="set-privacy-dropdown-ul">
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/globe.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/connection.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/personal-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/extended-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="social-info-editor-box-li">
                                                                    <div class="info-editor-box">
                                                                        <div class="info-editor-box-title">
                                                                            <div class="info-editor-box-title-text">
                                                                                Current State
                                                                            </div>
                                                                            <div class="edit-button">
                                                                                <div class="edit-button-inner">
                                                                                    <span class="icon"><span class="ti-pencil-alt"></span></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-editor-box-value">
                                                                            <div class="info-editor-box-value-text">
                                                                                {{auth()->user()->details->state}}

                                                                            </div>
                                                                            <div class="set-privacy-dropdown">
                                                                                <div class="set-privacy-dropdown-value">
                                                                                    <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                </div>
                                                                                <div class="set-privacy-dropdown-inner">
                                                                                    <ul class="set-privacy-dropdown-ul">
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/globe.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/connection.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/personal-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/extended-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="social-info-editor-box-li">
                                                                    <div class="info-editor-box">
                                                                        <div class="info-editor-box-title">
                                                                            <div class="info-editor-box-title-text">
                                                                                Relationship Status
                                                                            </div>
                                                                            <div class="edit-button">
                                                                                <div class="edit-button-inner">
                                                                                    <span class="icon"><span class="ti-pencil-alt"></span></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-editor-box-value">
                                                                            <div class="info-editor-box-value-text">
                                                                                {{auth()->user()->details->relationship}}

                                                                            </div>
                                                                            <div class="set-privacy-dropdown">
                                                                                <div class="set-privacy-dropdown-value">
                                                                                    <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                </div>
                                                                                <div class="set-privacy-dropdown-inner">
                                                                                    <ul class="set-privacy-dropdown-ul">
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/globe.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/connection.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/personal-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/extended-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="social-info-editor-box-li">
                                                                    <div class="info-editor-box">
                                                                        <div class="info-editor-box-title">
                                                                            <div class="info-editor-box-title-text">
                                                                                Date of Joining
                                                                            </div>
                                                                            <div class="edit-button">
                                                                                <div class="edit-button-inner">
                                                                                    <span class="icon"><span class="ti-pencil-alt"></span></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-editor-box-value">
                                                                            <div class="info-editor-box-value-text">
                                                                                {{auth()->user()->details->joining}}

                                                                            </div>
                                                                            <div class="set-privacy-dropdown">
                                                                                <div class="set-privacy-dropdown-value">
                                                                                    <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                </div>
                                                                                <div class="set-privacy-dropdown-inner">
                                                                                    <ul class="set-privacy-dropdown-ul">
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/globe.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/connection.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/personal-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/extended-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="social-info-editor-box-li">
                                                                    <div class="info-editor-box">
                                                                        <div class="info-editor-box-title">
                                                                            <div class="info-editor-box-title-text">
                                                                                Workplace
                                                                            </div>
                                                                            <div class="edit-button">
                                                                                <div class="edit-button-inner">
                                                                                    <span class="icon"><span class="ti-pencil-alt"></span></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-editor-box-value">
                                                                            <div class="info-editor-box-value-text">
                                                                                {{auth()->user()->details->workplace}}

                                                                            </div>
                                                                            <div class="set-privacy-dropdown">
                                                                                <div class="set-privacy-dropdown-value">
                                                                                    <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                </div>
                                                                                <div class="set-privacy-dropdown-inner">
                                                                                    <ul class="set-privacy-dropdown-ul">
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/globe.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/connection.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/personal-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/extended-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="social-info-editor-box-li">
                                                                    <div class="info-editor-box">
                                                                        <div class="info-editor-box-title">
                                                                            <div class="info-editor-box-title-text">
                                                                                High School
                                                                            </div>
                                                                            <div class="edit-button">
                                                                                <div class="edit-button-inner">
                                                                                    <span class="icon"><span class="ti-pencil-alt"></span></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-editor-box-value">
                                                                            <div class="info-editor-box-value-text">
                                                                                {{auth()->user()->details->high_school}}

                                                                            </div>
                                                                            <div class="set-privacy-dropdown">
                                                                                <div class="set-privacy-dropdown-value">
                                                                                    <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                </div>
                                                                                <div class="set-privacy-dropdown-inner">
                                                                                    <ul class="set-privacy-dropdown-ul">
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/globe.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/connection.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/personal-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/extended-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="social-info-editor-box-li">
                                                                    <div class="info-editor-box">
                                                                        <div class="info-editor-box-title">
                                                                            <div class="info-editor-box-title-text">
                                                                                Hobbies
                                                                            </div>
                                                                            <div class="edit-button">
                                                                                <div class="edit-button-inner">
                                                                                    <span class="icon"><span class="ti-pencil-alt"></span></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-editor-box-value">
                                                                            <div class="info-editor-box-value-text">
                                                                                {{auth()->user()->details->hobbies}}

                                                                            </div>
                                                                            <div class="set-privacy-dropdown">
                                                                                <div class="set-privacy-dropdown-value">
                                                                                    <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                </div>
                                                                                <div class="set-privacy-dropdown-inner">
                                                                                    <ul class="set-privacy-dropdown-ul">
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/globe.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/connection.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/personal-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/extended-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="social-info-editor-box-li">
                                                                    <div class="info-editor-box">
                                                                        <div class="info-editor-box-title">
                                                                            <div class="info-editor-box-title-text">
                                                                                Email Address
                                                                            </div>
                                                                            <div class="edit-button">
                                                                                <div class="edit-button-inner">
                                                                                    <span class="icon"><span class="ti-pencil-alt"></span></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-editor-box-value">
                                                                            <div class="info-editor-box-value-text">
                                                                                {{auth()->user()->email}}

                                                                            </div>
                                                                            <div class="set-privacy-dropdown">
                                                                                <div class="set-privacy-dropdown-value">
                                                                                    <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                </div>
                                                                                <div class="set-privacy-dropdown-inner">
                                                                                    <ul class="set-privacy-dropdown-ul">
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/globe.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/connection.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/personal-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/extended-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="social-info-editor-box-li">
                                                                    <div class="info-editor-box">
                                                                        <div class="info-editor-box-title">
                                                                            <div class="info-editor-box-title-text">
                                                                                Mobile Number
                                                                            </div>
                                                                            <div class="edit-button">
                                                                                <div class="edit-button-inner">
                                                                                    <span class="icon"><span class="ti-pencil-alt"></span></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-editor-box-value">
                                                                            <div class="info-editor-box-value-text">
                                                                                {{auth()->user()->country_code}} {{auth()->user()->phone}}
                                                                            </div>
                                                                            <div class="set-privacy-dropdown">
                                                                                <div class="set-privacy-dropdown-value">
                                                                                    <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                </div>
                                                                                <div class="set-privacy-dropdown-inner">
                                                                                    <ul class="set-privacy-dropdown-ul">
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/globe.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/connection.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/personal-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/extended-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="social-info-editor-box-li">
                                                                    <div class="info-editor-box">
                                                                        <div class="info-editor-box-title">
                                                                            <div class="info-editor-box-title-text">
                                                                                Gender
                                                                            </div>
                                                                            <div class="edit-button">
                                                                                <div class="edit-button-inner">
                                                                                    <span class="icon"><span class="ti-pencil-alt"></span></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="info-editor-box-value">
                                                                            <div class="info-editor-box-value-text">
                                                                                {{auth()->user()->gender}}

                                                                            </div>
                                                                            <div class="set-privacy-dropdown">
                                                                                <div class="set-privacy-dropdown-value">
                                                                                    <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                </div>
                                                                                <div class="set-privacy-dropdown-inner">
                                                                                    <ul class="set-privacy-dropdown-ul">
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/globe.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/connection.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/personal-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/extended-network.svg" alt="">
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-card">
                                        <div class="content-card-inner">
                                            <div class="content-top-bar">
                                                <div class="content-top-bar-inner">
                                                    <div class="content-top-bar-title">
                                                        <div class="text">
                                                            Photos/Gallery
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-card-content">
                                                <div class="content-card-content-inner">
                                                    <div class="photo-galary-grid">
                                                        <div class="photo-galary-grid-inner">
                                                            <div class="photo-grid-col">
                                                                <div class="photo-grid-col-inner">
                                                                    <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="photo-grid-col">
                                                                <div class="photo-grid-col-inner">
                                                                    <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="photo-grid-col">
                                                                <div class="photo-grid-col-inner">
                                                                    <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="photo-grid-col">
                                                                <div class="photo-grid-col-inner">
                                                                    <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="photo-grid-col">
                                                                <div class="photo-grid-col-inner">
                                                                    <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="photo-grid-col">
                                                                <div class="photo-grid-col-inner">
                                                                    <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="photo-grid-col">
                                                                <div class="photo-grid-col-inner">
                                                                    <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="photo-grid-col">
                                                                <div class="photo-grid-col-inner">
                                                                    <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="photo-grid-col">
                                                                <div class="photo-grid-col-inner">
                                                                    <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="see-all">
                                                    <div class="see-all-inner">
                                                        <a href="javascript:void(0)">See All</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-card">
                                        <div class="content-card-inner">
                                            <div class="content-top-bar">
                                                <div class="content-top-bar-inner">
                                                    <div class="content-top-bar-title">
                                                        <div class="text">
                                                            Friends (28)
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-card-content">
                                                <div class="content-card-content-inner">
                                                    <div class="friend-grid">
                                                        <div class="friend-grid-inner">
                                                            <div class="friend-grid-col">
                                                                <div class="friend-grid-col-inner">
                                                                    <div class="firend-grid-col-image">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                    <div class="friend-grid-col-text">
                                                                        Jhone Doe
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="friend-grid-col">
                                                                <div class="friend-grid-col-inner">
                                                                    <div class="firend-grid-col-image">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                    <div class="friend-grid-col-text">
                                                                        Jhone Doe
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="friend-grid-col">
                                                                <div class="friend-grid-col-inner">
                                                                    <div class="firend-grid-col-image">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                    <div class="friend-grid-col-text">
                                                                        Jhone Doe
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="friend-grid-col">
                                                                <div class="friend-grid-col-inner">
                                                                    <div class="firend-grid-col-image">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                    <div class="friend-grid-col-text">
                                                                        Jhone Doe
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="friend-grid-col">
                                                                <div class="friend-grid-col-inner">
                                                                    <div class="firend-grid-col-image">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                    <div class="friend-grid-col-text">
                                                                        Jhone Doe
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="friend-grid-col">
                                                                <div class="friend-grid-col-inner">
                                                                    <div class="firend-grid-col-image">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                    <div class="friend-grid-col-text">
                                                                        Jhone Doe
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="friend-grid-col">
                                                                <div class="friend-grid-col-inner">
                                                                    <div class="firend-grid-col-image">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                    <div class="friend-grid-col-text">
                                                                        Jhone Doe
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="friend-grid-col">
                                                                <div class="friend-grid-col-inner">
                                                                    <div class="firend-grid-col-image">
                                                                        <img src="ambassador_assets/images/default/default-02.png" alt="">
                                                                    </div>
                                                                    <div class="friend-grid-col-text">
                                                                        Jhone Doe
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="see-all">
                                                    <div class="see-all-inner">
                                                        <a href="javascript:void(0)">See All</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-side-02">
                                <div class="content-cards">
                                    <div class="content-card">
                                        <div class="content-card-inner">
                                            <div class="share-post-box">
                                                <div class="share-post-box-inner">
                                                    <div class="share-post-user-image">
                                                        <div class="share-post-user-image-inner">
                                                            <img src="ambassador_assets/images/user-profile/user-01.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="share-post-box-main">
                                                        <div class="share-post-box-main-inner">
                                                            <div class="share-post-input-box">
                                                                <div class="share-post-input-box-inner">
                                                                    <textarea name="" id="" cols="30" rows="10" placeholder="Write Something"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="share-post-box-main-bottom">
                                                                <div class="share-post-box-main-bottom-inner">
                                                                    <div class="share-post-box-attachments">
                                                                        <div class="share-post-box-attachments-inner">
                                                                            <ul class="share-post-attachments">
                                                                                <li class="share-post-attachments-li">
                                                                                    <div class="attachment-option">
                                                                                        <div class="attachment-icon">
                                                                                            <span class="ti-camera"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="share-post-attachments-li">
                                                                                    <div class="attachment-option">
                                                                                        <div class="attachment-icon">
                                                                                            <span class="ti-control-play"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="share-post-attachments-li">
                                                                                    <div class="attachment-option">
                                                                                        <div class="attachment-icon">
                                                                                            <span class="ti-microphone"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="share-post-attachments-li">
                                                                                    <div class="attachment-option">
                                                                                        <div class="attachment-icon">
                                                                                            <span class="ti-link"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="set-privacy-share">
                                                                        <div class="set-privacy-share-inner">
                                                                            <div class="set-privacy-dropdown">
                                                                                <div class="set-privacy-dropdown-value">
                                                                                    <img src="ambassador_assets/images/icons/users.svg" alt=""> <i>Friends</i> <span class="more-icon"><span class="ti-angle-down"></span></span>
                                                                                </div>
                                                                                <div class="set-privacy-dropdown-inner">
                                                                                    <ul class="set-privacy-dropdown-ul">
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/users.svg" alt=""> <span class="text">Friends</span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/globe.svg" alt=""> <span class="text">Public</span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/connection.svg" alt=""> <span class="text">Connections</span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/personal-network.svg" alt=""> <span class="text">Personal Network</span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="set-privacy-dropdown-li">
                                                                                            <div class="set-privacy-dropdown-icon">
                                                                                                <img src="ambassador_assets/images/icons/extended-network.svg" alt=""> <span class="text">Extended Network</span>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="share-post-button">
                                                                            <button>Share Post</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-card">
                                        <div class="content-card-inner">
                                            <div class="single-podt-box">
                                                <div class="single-podt-box-inner">
                                                    <div class="singal-post-top-bar">
                                                        <div class="singal-post-top-bar-user-info">
                                                            <div class="single-post-top-bar-photo">
                                                                <div class="single-post-top-bar-photo-inner">
                                                                    <img src="ambassador_assets/images/user-profile/user-01.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="singal-post-top-bar-post-detail">
                                                                <div class="singal-post-top-bar-post-detail-inner">
                                                                    <div class="user-name">
                                                                        Jhone Doe
                                                                    </div>
                                                                    <div class="date-and-privacy">
                                                                        <div class="time-stamp">
                                                                            <div class="date">28 May 2019</div>
                                                                            <div class="at">at</div>
                                                                            <div class="time">23.22 h</div>
                                                                        </div>
                                                                        <div class="privacy-icon">
                                                                            <img src="ambassador_assets/images/icons/users.svg" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="singal-post-top-bar-options">
                                                            <div class="icon">
                                                                <span class="ti-angle-down"></span>
                                                            </div>
                                                            <div class="singal-post-top-bar-options-bar">
                                                                <div class="singal-post-top-bar-options-bar-inner">
                                                                    <ul class="singal-post-top-bar-options-ul">
                                                                        <li class="singal-post-top-bar-options-li">
                                                                            <a href="javascript:void(0)" class="singal-post-top-bar-options-link">Edit</a>
                                                                        </li>
                                                                        <li class="singal-post-top-bar-options-li">
                                                                            <a href="javascript:void(0)" class="singal-post-top-bar-options-link">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="singal-post-content">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi culpa quisquam odio reprehenderit voluptas non placeat beatae deleniti excepturi labore perspiciatis sequi illum necessitatibus animi tempore, repudiandae error suscipit velit?</p>
                                                        <img src="ambassador_assets/images/post-content/01.png" alt="">
                                                    </div>
                                                    <div class="like-comment-bar">
                                                        <div class="like-comment-bar-inner">
                                                            <ul class="like-comment-bar-ul">
                                                                <li class="like-comment-bar-li">
                                                                    <div class="icon"><span class="ti-thumb-up"></span></div>
                                                                    <div class="text">58.6K</div>
                                                                </li>
                                                                <li class="like-comment-bar-li">
                                                                    <div class="text">28 Comments</div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-comment-input-bar">
                                                        <div class="add-comment-input-bar-inner">
                                                            <div class="add-comment-input-bar-user-image">
                                                                <div class="add-comment-input-bar-image-inner">
                                                                    <img src="ambassador_assets/images/user-profile/user-01.png" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="add-comment-input-bar-textarea">
                                                                <div class="add-comment-input-bar-textarea-inner">
                                                                    <div class="add-comment-input-bar-textarea-main">
                                                                        <textarea name="" id="" ></textarea>
                                                                    </div>
                                                                    <div class="add-button">
                                                                        <button>Add</button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="all-comments-box">
                                                        <div class="all-comments-box-inner">
                                                            <div class="all-comments-box-grid">
                                                                <div class="singal-comment-row">
                                                                    <div class="singal-comment-row-inner">
                                                                        <div class="singal-comment-row-user-image">
                                                                            <div class="singal-comment-row-user-image-inner">
                                                                                <img src="ambassador_assets/images/user-profile/user-01.png" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="singal-comment-row-comment-text">
                                                                            Is simply dummy text of the printing and typesetting.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="singal-comment-row">
                                                                    <div class="singal-comment-row-inner">
                                                                        <div class="singal-comment-row-user-image">
                                                                            <div class="singal-comment-row-user-image-inner">
                                                                                <img src="ambassador_assets/images/user-profile/user-01.png" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="singal-comment-row-comment-text">
                                                                            Is simply dummy text of the printing and typesetting.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="singal-comment-row">
                                                                    <div class="singal-comment-row-inner">
                                                                        <div class="singal-comment-row-user-image">
                                                                            <div class="singal-comment-row-user-image-inner">
                                                                                <img src="ambassador_assets/images/user-profile/user-01.png" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="singal-comment-row-comment-text">
                                                                            Is simply dummy text of the printing and typesetting.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="view-more-comments">
                                                        <div class="view-more-comments-inner">
                                                            <a href="javascript:void(0)">View more comments</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection