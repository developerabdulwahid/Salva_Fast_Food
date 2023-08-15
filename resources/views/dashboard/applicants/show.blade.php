@extends('dashboard.layouts.app') @section('title','create-job')
@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Applicant Details</h4>

                    <form method="POST" class="fm-inline ml-2 mt-2"
                        action="{{ route('applicants.destroy', ['applicant' => $applicant->id]) }}">
                        @csrf
                        @method('DELETE')

                        
                        <p class="" style="text-align: center" onclick="return confirm('Are you sure to delete');"><input type="submit" value="Delete Application" class="btn btn-danger"/></p>
                    </form>

                  </div>
                  <div class="card-body">
                  {{-- <small class="text-muted">Job Name : </small>
                  <div class="section-title">{{$applicant->job->title}}</div>

                  <small class="text-muted">Job Category : </small>
                  <div class="section-title">{{$applicant->category}}</div> --}}


                  <small class="text-muted">Applicant name : </small>
                  <div class="section-title">{{$applicant->fullname}}</div>

                  <small class="text-muted">Applicant email : </small>
                  <div class="section-title">{{$applicant->email}}</div>

                  <small class="text-muted">Applicant phone : </small>
                  <div class="section-title">{{$applicant->phone}}</div>

                  <small class="text-muted">Applicant store : </small>
                  <div class="section-title">{{$applicant->store}}</div>

                  <small class="text-muted">Applicant position : </small>
                  <div class="section-title">{{$applicant->position}}</div>

                  <small class="text-muted">Applicant time : </small>
                  <div class="section-title">{{$applicant->time}}</div>

                    @if($applicant->resume != null)
                    <small class="text-muted">Thumbnail : </small>
                    <br/>
                        <a href="{{ asset('cvs/').'/'.$applicant->resume }}">{{ $applicant->resume }}</a>
                        <br/>
                        <br/>
                        <br/>
                    @endif
                    
                    <small class="text-muted">Application About : </small>
                    <div class="section-title">{!! $applicant->content !!}</div>
                    
                  </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
