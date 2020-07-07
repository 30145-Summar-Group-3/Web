<!-- <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" media="all" />    -->

@extends('layouts.app')


@section('content')
<link type="text/css" rel="stylesheet" href="https://cdn.phpjabbers.com/css/main.min.css?v=1.0.85" media="all" />
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}" media="all" />
<link rel="stylesheet" href="{{URL::asset('css/app.css')}}" media="all" />


<div class="container">
    <div class="row justify-content-center">
        <div class="form fA tabs">
					
		<div class="formContent tabsBody">
			<div class="tab current" id="accessTabSignIn" role="tabpanel" aria-hidden="false" aria-labelledby="accessTab-1">
	
                <form action= "/insert" method='post'>
                    <header class="formHead">
						<p class="formTitle">{{ __('Applying The Training') }}</p>
					</header>

                <table>
                    <tr>
                        {{csrf_field()}}
                        <td>
                        <div class="formAlert" role="alert" style="display: none"></div>

                        <div class="formRow">
							<label for="frmHeaderLoginEmail" class="formLabel">
								<i class="ico icoPerson"></i>
							</label>
					
							<div class="formControls">
								<input type="text" class="field" id="frmHeaderLoginEmail" name="name" placeholder="Name" data-msg-required="Email is required" data-msg-email="Please enter a valid email address." maxlength="255" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>
                        </td>
                    </tr>

                    <tr>
                        <td> 
                        <div class="formRow">
							<label for="frmHeaderLoginEmail" class="formLabel">
								<i class="ico icoCollage"></i>
							</label>
					
							<div class="formControls">
								<input type="text" class="field" id="frmHeaderLoginEmail" name="collage" placeholder="Collage" data-msg-required="Collage is required" data-msg-email="Please enter a Collage name" maxlength="255" />
                                @error('collage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>
                        </td>
                    </tr>

                    <tr>      
                        <td> 
                        <div class="formRow">
							<label for="frmHeaderLoginEmail" class="formLabel">
								<i class="ico icoMail"></i>
							</label>
					
							<div class="formControls">
								<input type="text" class="field" id="frmHeaderLoginEmail" name="email" placeholder="Email" data-msg-required="Email is required" data-msg-email="Please enter a valid email address." maxlength="255" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>
                        </td>
                    </tr>
                    <tr>      
                        <td> 
                        <div class="formRow">
							<label for="frmHeaderLoginEmail" class="formLabel">
								<i class="ico icoMail"></i>
							</label>
					
							<div class="formControls">
								<input type="intger" class="field" id="frmHeaderLoginEmail" name="earned_hours" placeholder="Earned hours" data-msg-required="Earned hours is required" data-msg-email="Please enter a valid Earned hours."  />
                                @error('earned_hours')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td> 
                        <div class="formActionsInner">
							<button type="submit" class="btn btnPrimary" value='Add'>{{ __('Applying') }}</button>
                        </div>
                        </td>
                    </tr>
                </table>
                </form>
            </div>
		</div>
        </div>
    </div>
</div>




@endsection



