@extends('dashboard.layouts.app')
@section('title','Jobs')
@section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4> Jobs List</h4>
                    <a href="{{route('new-job')}}" style="border-radius:2px" class="btn btn-icon icon-left btn-primary"><i class="
                              fas fa-plus"></i> New Job</a>
                  </div>
                  @if(Session::has('success'))
                    <div class="alert alert-success text-center">
                        {{Session::get('success')}}
                    </div>
                @endif   
                  <div class="card-body">
                    <div class="table-responsive">
                    
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                      
                        <thead>
                          <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Applicants</th>
                            <th>Posted On</th>
                            <th>End Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @if(count($jobs)>0)
                          @foreach($jobs as $job)
                          <tr>
                            <td >{{$job->title}}</td>
                            <td>
                            {{$job->category}}
                            </td>
                            <td>
                              {{count($job->applications)}}
                            </td>
                            <td>
                              @php
                              $date = strtotime($job->created_at);
                              $date = date('d-M-y',$date);
                              @endphp
                              {{$date}}
                            </td>
                            <td>
                              @php
                            $date = strtotime($job->end_date);
                              $date = date('d-M-y ',$date);
                              @endphp
                              {{$date}}
                            </td>
                            <td>
                            
                            <a href="{{route('job-detail',['id'=>$job->id])}}" class="btn btn-icon btn-sm btn-info"><i class="fas fa-eye"></i></a>
                            
                            <!-- <a href="#" class="btn btn-icon btn-sm btn-warning"><i class="fas fa-edit"></i></a> -->

                            <a href="{{route('delete-job',['id'=>$job->id])}}" class="btn btn-icon btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                          </tr>
                          @endforeach
                          @else
                          <tr> no data </tr>
                          @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>
@endsection