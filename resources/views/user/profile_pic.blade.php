{!! Form::open( [ 'url' => 'change/profile/pic','files' =>'true' ]) !!}

{!! csrf_field() !!}






<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col-md-9">
                                {!!Form::file("thing_img",["class"=>"form-control"])!!}
                                

                                @if ($errors->has('thing_img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('thing_img') }}</strong>
                                    </span>
                                @endif
                            </div>
</div>


{!!Form::close()!!}