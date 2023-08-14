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
                    <h4>Job Details</h4>
                  </div>
                  <div class="card-body">
                  <small class="text-muted">Job title : </small>
                    <div class="section-title">{{$details->title}}</div>
                  <small class="text-muted">Job category : </small>

                    <div class="section-title">{{$details->category}}</div>
                    @if($details->file != null)
                    
                    <small class="text-muted">Thumbnail : </small>
                    <br/>
                    
                        <img src="{{asset('jobs/').'/'.$details->file}}" height="150" alt="">
                        <br/>
                        <br/>
                        <br/>
                    @endif
                  <small class="text-muted">Job description : </small>
                    {!! $details->description !!}
                  </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
