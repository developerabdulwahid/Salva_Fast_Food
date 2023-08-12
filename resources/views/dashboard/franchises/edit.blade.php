@extends('dashboard.layouts.app') @section('title','Add new slider')
@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Franchise</h4>

                            <form method="POST" class="fm-inline ml-2 mt-2"
                                action="{{ route('franchises.destroy', ['franchise' => $franchise->id]) }}">
                                @csrf
                                @method('DELETE')

                                
                                <p class="" style="text-align: center" onclick="return confirm('Are you sure to delete');"><input type="submit" value="Delete Frachise" class="btn btn-danger"/></p>
                            </form>

                        </div>

                        

                        <div class="card-body">
                            <form action="{{ route('franchises.update', ['franchise' => $franchise->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First Name</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="first_name" value="{{ $franchise->first_name }}" required class="form-control" />
                                        @if ($errors->has('first_name'))
                                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                        @endif
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First Name</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="last_name" value="{{ $franchise->last_name }}" required class="form-control" />
                                        @if ($errors->has('last_name'))
                                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                        @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="email" value="{{ $franchise->email }}" required class="form-control" />
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="phone" value="{{ $franchise->phone }}" required class="form-control" />
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Country</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="country" value="{{ $franchise->country }}" required class="form-control" />
                                        @if ($errors->has('country'))
                                            <span class="text-danger">{{ $errors->first('country') }}</span>
                                        @endif
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">City</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="city" value="{{ $franchise->city }}" required class="form-control" />
                                        @if ($errors->has('city'))
                                            <span class="text-danger">{{ $errors->first('city') }}</span>
                                        @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="address" value="{{ $franchise->address }}" required class="form-control" />
                                        @if ($errors->has('address'))
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                        @endif
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Postal Code</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="postcode" value="{{ $franchise->postcode }}" required class="form-control" />
                                        @if ($errors->has('postcode'))
                                            <span class="text-danger">{{ $errors->first('postcode') }}</span>
                                        @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nationality</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="nationality" value="{{ $franchise->nationality }}" required class="form-control" />
                                        @if ($errors->has('nationality'))
                                            <span class="text-danger">{{ $errors->first('nationality') }}</span>
                                        @endif
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Find us</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="hear_about_us" value="{{ $franchise->hear_about_us }}" required class="form-control" />
                                        @if ($errors->has('hear_about_us'))
                                            <span class="text-danger">{{ $errors->first('hear_about_us') }}</span>
                                        @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ever Run</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="ever_run_options" value="{{ $franchise->ever_run_options }}" required class="form-control" />
                                        @if ($errors->has('ever_run_options'))
                                            <span class="text-danger">{{ $errors->first('ever_run_options') }}</span>
                                        @endif
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Food Experience</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="food_experience" value="{{ $franchise->food_experience }}" required class="form-control" />
                                        @if ($errors->has('food_experience'))
                                            <span class="text-danger">{{ $errors->first('food_experience') }}</span>
                                        @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">When start</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="start_options" value="{{ $franchise->start_options }}" required class="form-control" />
                                        @if ($errors->has('start_options'))
                                            <span class="text-danger">{{ $errors->first('start_options') }}</span>
                                        @endif
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Envestmen Level</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="level_of_investment" value="{{ $franchise->level_of_investment }}" required class="form-control" />
                                        @if ($errors->has('level_of_investment'))
                                            <span class="text-danger">{{ $errors->first('level_of_investment') }}</span>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Developement interest</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="type_of_development_interest" value="{{ $franchise->type_of_development_interest }}" required class="form-control" />
                                    @if ($errors->has('type_of_development_interest'))
                                        <span class="text-danger">{{ $errors->first('type_of_development_interest') }}</span>
                                    @endif
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="form-control" name="description"> {{ $franchise->content }} </textarea>
                                    @if ($errors->has('content'))
                                        <span class="text-danger">{{ $errors->first('content') }}</span>
                                    @endif
                                        
                                    </div>
                                </div>

                            

                            {{-- <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                <img src="{{asset(Storage::url($slider->image))}}" alt="" height="128px" width="128px">
                                
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="image" />
                                        @if ($errors->has('image'))
                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div> --}}
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-primary">Update Franchise</button>
                                </div>
                            </div>

                            
                        </div>

                        

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
