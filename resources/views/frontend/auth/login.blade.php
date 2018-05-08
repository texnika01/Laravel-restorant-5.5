@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('labels.frontend.auth.login_box_title'))

@section('content')
    <div class="site">
        <!-- Main Container -->
        <div class="main">
            <div class="content single">
                <article>
                    <div class="row">
                        <strong>
                            {{ __('labels.frontend.auth.login_box_title') }}
                        </strong>
                    </div><!--card-header-->
                    <div class="card-body">
                        {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

                                    {{ html()->email('email')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.email'))
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}

                                    {{ html()->password('password')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.password'))
                                        ->required() }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="checkbox">
                                        {{ html()->label(html()->checkbox('remember', true, 1) . ' ' . __('labels.frontend.auth.remember_me'))->for('remember') }}
                                    </div>
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->

                        <div class="row">
                            <div class="col">
                                <div class="form-group clearfix">
                                    {{ form_submit(__('labels.frontend.auth.login_button')) }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->

                        <div class="row">
                            <div class="col">
                                <div class="form-group text-right">
                                    <a href="{{ route('frontend.auth.password.reset') }}">{{ __('labels.frontend.passwords.forgot_password') }}</a>
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->
                        {{ html()->form()->close() }}

                        <div class="row">
                            <div class="col">
                                <div class="text-center">
                                    {!! $socialiteLinks !!}
                                </div>
                            </div><!--col-->
                        </div><!--row-->
                    </div><!--card body-->
                </article>
            </div>
        </div>
        <!-- End Main Container -->
    </div>

    <!-- Background Section -->
    <div class="background">
        <div class="background-image" style="background-image: url('img/frontend/background/spices.jpg');">
            <div class="mask"></div>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div class="mobile-overlay">
        <button class="mobile-toggle dismiss"><span></span></button>
        <div class="mobile-nav clearfix"></div>
    </div>

    <!-- To Top Button -->
    <button class="totop">&uarr;</button>


@endsection
