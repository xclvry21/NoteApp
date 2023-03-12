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
                                            <button type="button" id="show" class="btn btn-info sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"><i class="far fa-eye" ></i></button>
        
                                            <a href="#" id="edit" class="btn btn-primary sm waves-effect waves-light"><i class="far fa-edit" ></i></a>
        
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

         
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="note_title">Lorem Ipsum</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <p id="note_body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium non adipisci, temporibus possimus ut blanditiis magni cumque fugit, est placeat aliquam aut explicabo labore odio dolor expedita mollitia. Odit commodi suscipit consequatur necessitatibus reiciendis aut, ut ea quidem recusandae delectus harum facere cum accusamus sint mollitia. Necessitatibus provident, magni praesentium architecto mollitia accusantium eum nostrum facere obcaecati repudiandae qui totam tempore quisquam at omnis suscipit distinctio sapiente facilis natus et amet velit quaerat. Assumenda voluptatem sunt beatae, non soluta nulla rem eligendi quos explicabo eveniet quaerat, aliquam cumque corporis accusantium deleniti magnam quia excepturi ipsum debitis? Aperiam vero architecto consequatur, eius labore sed at quae tempora reiciendis, distinctio similique, nostrum minima sit culpa. Reiciendis itaque dolorum enim corporis sit necessitatibus magni magnam odio? Unde omnis eveniet magni nobis saepe minima laudantium quos aliquam autem possimus explicabo, sequi cupiditate voluptatem, ut dignissimos nisi hic in minus tenetur neque accusantium ex nam.</p>
                        </div>
                        <!-- end row -->
                    </div>
                    <div class="modal-footer">
                        <small class="text-start" id="note_modified_date">Created at 3/10/2023</small>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>

    </div>
</div>



@endsection
