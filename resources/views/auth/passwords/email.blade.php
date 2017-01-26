@extends('layouts.app')

<!-- SEO META -->
@section('meta')
<title>Reset Password - {{ App\Helper\Helper::site_title() }}</title>
@endsection

@section('content')
<div class="smart-wrap">
        
        @if (session('status'))
            <div class="success" style="margin: 25px auto;width: 68%;">
                <p>{{ session('status') }}</p>
            </div>
        @endif

        <div class="smart-forms smart-container wrap-2">
        
            <div class="form-header header-black">
                <h4>Reset Your Password</h4>
          </div><!-- end .form-header section -->
            
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                <div class="form-body theme-black">
                
                    <div class="frm-row"> 
                    
                    <div class="colm colm6 pad-l30" style="width: 100%;padding-left: 0;">  
                    
                        <div class="section">
                            <label class="field prepend-icon">
                                <input type="text" name="email" id="email" class="gui-input{{ $errors->has('email') ? ' has-error' : '' }}" placeholder="Enter E-mail Address" value="{{ old('email') }}">
                                <span class="field-icon"><i class="fa fa-envelope"></i></span>  
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </label>
                        </div>
                        
                    </div><!-- end .colm section -->
                    
                    </div><!-- end .frm-row section -->                                                          
                    
                </div><!-- end .form-body section -->
                <div class="form-footer">
                    <button type="submit" style="width: 100%;" class="button btn-black">Send Password Reset Link</button>
                </div><!-- end .form-footer section -->
            </form>
            
        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->
    
    <div></div><!-- end section -->
@endsection