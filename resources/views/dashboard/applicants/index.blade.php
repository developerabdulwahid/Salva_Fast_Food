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
                    <h4> Applicants List</h4>
                    {{-- <a href="{{route('applicants.create')}}" style="border-radius:2px" class="btn btn-icon icon-left btn-primary"><i class="
                              fas fa-plus"></i> New Franchise</a> --}}
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
                            <th>Job Name</th>
                            <th>Category</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Requested ON</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @forelse ($applicants as $row)
                          <tr>
                            <td >{{ $row->job->title }}</td>
                            <td >{{ $row->category }}</td>
                            <td >{{ $row->fullname }}</td>
                            <td >{{ $row->email }}</td>
                            <td >{{ $row->phone }}</td>
                            <td>
                              @php
                              $date = strtotime($row->created_at);
                              $date = date('d-M-y',$date);
                              @endphp
                              {{$date}}
                            </td>
                            <td>

                                <a href="{{route('applicants.show',['applicant' => $row->id])}}" class="btn btn-icon btn-sm btn-info"><i class="fas fa-eye"></i></a>

                                  {{-- <form method="POST" class="fm-inline ml-2"
                                    action="{{ route('applicants.destroy', ['applicant' => $row->id]) }}">
                                    @csrf
                                    @method('DELETE')

                                    
                                    <input type="submit" value="{{ __('Delete!') }}" class="btn btn-danger"/>
                                  </form> --}}

                            </td>
                          </tr>
                          @empty
                          <tr> no data </tr>
                          @endforelse()
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