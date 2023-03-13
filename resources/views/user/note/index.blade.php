@extends('user.user_master')
@section('user')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">{{$title}}</h4>
                        
                        <table id="datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                @php
                                    $i = 1
                                @endphp
                                @foreach ($notes as $note)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$note->title}}</td>
                                        <td>
                                            <a href="javascript:void(0)" id="show-note" data-url="{{ route('notes.show', $note->id) }}" class="btn btn-info sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"><i class="fas fa-eye" ></i></a>
        
                                            <a href="{{route('notes.edit', $note)}}" id="edit" class="btn btn-primary sm waves-effect waves-light"><i class="far fa-edit" ></i></a>
        
                                            <a href="#" class="btn btn-danger sm" title="Delete" id="delete"> <i class="fas fa-trash" ></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                             </tbody>
                        </table>
                    
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

         
        <div class="modal fade" id="noteShowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="note_title">...</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <p id="note_body">...</p>
                        </div>
                        <!-- end row -->
                    </div>
                    <div class="modal-footer">
                        <small class="text-start" id="note_date">...</small>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>

    </div>
</div>



@endsection
