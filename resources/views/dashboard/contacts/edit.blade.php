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
                            <h4>Update Contact</h4>

                            <form method="POST" class="fm-inline ml-2 mt-2"
                                action="{{ route('contacts.destroy', ['contact' => $contact->id]) }}">
                                @csrf
                                @method('DELETE')

                                
                                <p class="" style="text-align: center" onclick="return confirm('Are you sure to delete');"><input type="submit" value="Delete Contact" class="btn btn-danger"/></p>
                            </form>

                        </div>

                        

                        <div class="card-body">
                            <form action="{{ route('contacts.update', ['contact' => $contact->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First Name</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="first_name" value="{{ $contact->first_name }}" required class="form-control" />
                                        @if ($errors->has('first_name'))
                                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                        @endif
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">First Name</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="last_name" value="{{ $contact->last_name }}" required class="form-control" />
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
                                            <input type="email" name="email" value="{{ $contact->email }}" required class="form-control" />
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="phone_with_cc" value="{{ $contact->phone_with_cc }}" required class="form-control" />
                                        @if ($errors->has('phone_with_cc'))
                                            <span class="text-danger">{{ $errors->first('phone_with_cc') }}</span>
                                        @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Enquiry</label>
                                        <div class="col-sm-12 col-md-7">
                                            {{-- <input type="text" name="enquiry" value="{{ $contact->enquiry }}" required class="form-control" />
                                            @if ($errors->has('enquiry'))
                                                <span class="text-danger">{{ $errors->first('enquiry') }}</span>
                                            @endif --}}
                                            <div class="form-group">
                                                <select class="form-control" name="enquiry">
                                                    <option value="compliment" @if($contact->enquiry == 'compliment') selected @endif > Compliment </option>
                                                    <option value="complaint" @if($contact->enquiry == 'complaint') selected @endif > complaint </option>
                                                    <option value="general enquiry" @if($contact->enquiry == 'general enquiry') selected @endif > general enquiry </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Restaurant</label>
                                        <div class="col-sm-12 col-md-7">
                                            {{-- <input type="text" name="restaurant" value="{{ $contact->restaurant }}" required class="form-control" />
                                            @if ($errors->has('restaurant'))
                                                <span class="text-danger">{{ $errors->first('restaurant') }}</span>
                                            @endif --}}
                                            <div class="form-group">
                                                <select class="form-control" name="resturant">
                                                    <option value="Burnley" @if($contact->resturant == 'Burnley') selected @endif > Burnley </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Dine Delivery</label>
                                        <div class="col-sm-12 col-md-7">
                                            {{-- <input type="text" name="dine_take_delivery" value="{{ $contact->dine_take_delivery }}" required class="form-control" />
                                            @if ($errors->has('dine_take_delivery'))
                                                <span class="text-danger">{{ $errors->first('dine_take_delivery') }}</span>
                                            @endif --}}
                                            <div class="form-group">
                                                <select class="form-control" name="dine_take_delivery">
                                                    <option value="Dine-in" @if($contact->dine_take_delivery == 'Dine-in') selected @endif > Dine-in </option>
                                                    <option value="Takeaway" @if($contact->dine_take_delivery == 'Takeaway') selected @endif > Takeaway </option>
                                                    <option value="Delivery" @if($contact->dine_take_delivery == 'Delivery') selected @endif > Delivery </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
    
                                    {{-- <div class="col-md-6 form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image Uploaded</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="upload_image" value="{{ $contact->upload_image }}" required disabled class="form-control" />
                                            @if ($errors->has('upload_image'))
                                                <span class="text-danger">{{ $errors->first('upload_image') }}</span>
                                            @endif
                                        </div>
                                    </div> --}}
                                </div>


                                {{-- <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images</label>
                                    <div class="col-sm-12 col-md-7">
                                        
                                        @if ($contact->upload_image == "yes")

                                        <div>
                                            @if ($contact->image1)
                                            <img src="{{asset(Storage::url($contact->image1))}}" alt="" height="128px" width="128px">
                                            @endif

                                            @if ($contact->image2)
                                                <img src="{{asset(Storage::url($contact->image2))}}" alt="" height="128px" width="128px">
                                            @endif

                                            @if ($contact->image3)
                                                <img src="{{asset(Storage::url($contact->image3))}}" alt="" height="128px" width="128px">
                                            @endif
                                        </div>
                                            
                                        @endif
                                        
                                    </div>
                                </div> --}}
                                
                                
                                {{-- <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Developement interest</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="type_of_development_interest" value="{{ $contact->type_of_development_interest }}" required class="form-control" />
                                    @if ($errors->has('type_of_development_interest'))
                                        <span class="text-danger">{{ $errors->first('type_of_development_interest') }}</span>
                                    @endif
                                    </div>
                                </div> --}}

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="form-control" name="content"> {{ $contact->content }} </textarea>
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
                                    <button type="submit" class="btn btn-primary">Update contact</button>
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
