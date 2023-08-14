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
                    <h4> Sliders List</h4>
                    <a href="{{route('sliders.create')}}" style="border-radius:2px" class="btn btn-icon icon-left btn-primary"><i class="
                              fas fa-plus"></i> New Slider</a>
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
                            <th>Created On</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @forelse ($sliders as $row)
                          <tr>
                            <td >{{$row->title}}</td>
                            <td>
                              @php
                              $date = strtotime($row->created_at);
                              $date = date('d-M-y',$date);
                              @endphp
                              {{$date}}
                            </td>
                            <td>

                                <div class="row">
                                  <a href="{{route('sliders.edit',['slider' => $row->id])}}" class="btn btn-icon btn-sm btn-info"><i class="fas fa-edit"></i></a>

                                  <form method="POST" class="fm-inline ml-2"
                                    action="{{ route('sliders.destroy', ['slider' => $row->id]) }}">
                                    @csrf
                                    @method('DELETE')

                                    
                                    <input type="submit" value="{{ __('Delete!') }}" class="btn btn-danger"/>
                                  </form>
                                </div>

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