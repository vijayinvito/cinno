@extends('admin.default')

@section('page-header')
    Users <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

    <div class="mB-20">
        <a href="{{ route(ADMIN . '.users.create') }}" class="btn btn-info">
            {{ trans('app.add_button') }}
        </a>
    </div>


    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>last Name</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            
            <tfoot>
                <tr>
                <th>First Name</th>
                    <th>last Name</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
            
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->first_name }}</td>
                        <td>{{ $item->last_name }}</td>
                        <td>{{ $item->company_name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ route(ADMIN . '.active', $item->id) }}"  class="btn btn-primary btn-sm">Active</span></a></li>
                                <li class="list-inline-item">
                                  

                                <a href="{{ route(ADMIN . '.deactive', $item->id) }}"  class="btn btn-secondary btn-sm">Deactive</span></a></li>
                                        
                                
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>

@endsection