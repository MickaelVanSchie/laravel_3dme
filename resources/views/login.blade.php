@extends('module.master')

@section('page_content')
<div class="banner-image position-relative">
    <div class="triangle-divider bg-white"></div>
</div>
<div class="container-fluid">
    <div class="container  ">
        <div class="row">
            <div class="col-md-12">
                <form action="login_submit" method="post">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="username">E-mail:</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="email" name="email">
                                </div>
                                <div class="col-md-12">
                                    <label for="password">Wachtwoord:</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="password" name="password">
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" value="Inloggen" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                        <div class="col-md4"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
