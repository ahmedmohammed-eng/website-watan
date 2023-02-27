@extends('layouts.app')
@section('content')
<div class="container">          
        <div class="row" style="text-align: center;margin-top: 40px;">
            <h2>How To Create Multi Language Website In Laravel 9 - websolutionstuff.com</h2><br>
            <div class="col-md-2 col-md-offset-3 text-right">
                <strong>Select Language: </strong>
            </div>
            <div class="col-md-4">
                <select class="form-control Langchange">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Chinese</option>                    
                </select>
            </div>
            <h1 style="margin-top: 80px;">{{ __('messages.co') }}</h1>
        </div>             
    </div>


@endsection