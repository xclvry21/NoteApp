@extends('user.user_master')
@section('user')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Title</h4>
                        
                        <table id="datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Title 1</td>
                                    <td>
                                        <a href="javascript:void(0)" id="show-note" data-url="#" class="btn btn-info sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"><i class="fas fa-eye" ></i></a>
        
                                        <a href="#" id="edit" class="btn btn-primary sm waves-effect waves-light"><i class="far fa-edit" ></i></a>
        
                                        {{-- this will use the customize function using get request --}}
                                        {{-- {{route('notes.delete', $note)}} --}}
                                        <a href="#" class="btn btn-danger sm" title="Delete" id="delete"><i class="fas fa-trash" ></i></a>

                                        {{-- this form will use the delete request route:resource --}}
                                        {{-- <form method="POST" action="{{route('notes.destroy', $note)}}">
                                            @csrf
                                            @method('DELETE')
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-danger btn-sm delete-note" value="Delete"></i>
                                            </div>
                                        </form> --}}
                                    </td>
                                </tr>
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
                        <h5 class="modal-title" id="note_title">Lorem Ipsum</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <p id="note_body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio earum similique beatae cupiditate aperiam, repellat sequi fugit, eligendi corporis neque nulla iure blanditiis porro enim harum, molestias dicta esse? Voluptas asperiores ea unde aliquid perspiciatis officiis quibusdam laboriosam, illum iure in placeat sapiente iusto minima sed corrupti. Repudiandae, illo. Id repellendus dolores consectetur provident sit, corporis autem libero animi nisi! Nam possimus delectus facere facilis quibusdam velit fuga, tempora aliquid magni odit aspernatur voluptatem illo, id, dolorum sint unde iure officia voluptas totam dignissimos. Sit repudiandae quo, voluptatum error aperiam alias tempora, et rem perferendis ipsa enim ex in dolorem ipsam dolorum unde! Vero eos sed consectetur, pariatur, error provident doloremque aliquid harum deserunt placeat exercitationem animi illum quibusdam voluptas eligendi natus expedita ducimus optio, veniam magnam corrupti officia aliquam vitae. Sequi natus reiciendis, quis, similique modi sunt neque dolore cupiditate, nemo sit non cumque voluptas. Delectus, cum quia ipsam perferendis dolores voluptas dolorum et amet eum repellat ipsa accusamus eaque vel laudantium quaerat obcaecati explicabo non itaque minus at doloremque asperiores iure praesentium. Nesciunt, facere nam voluptatibus, aliquid illum suscipit, cupiditate modi eveniet dolor laudantium sequi ipsum officia quibusdam placeat eius magnam quaerat odit natus debitis fuga nulla sapiente incidunt vel laborum. Quidem ea quod nihil rerum reprehenderit laborum eius. Distinctio accusantium ducimus esse aliquam ipsam harum mollitia sequi quae accusamus ab similique, nostrum modi eaque quo assumenda veritatis itaque. Inventore quidem fugiat earum aliquid tempora hic repudiandae, veritatis eligendi ab excepturi ipsum consectetur nihil quam! Harum natus, nihil ex, unde laudantium dignissimos laborum accusantium modi architecto impedit quisquam nobis deserunt facere nemo tempore enim blanditiis perspiciatis asperiores iure voluptates. Fuga laboriosam, iusto accusamus dignissimos rerum excepturi aliquam harum doloribus soluta ab ea quasi accusantium consequatur tempore. Provident assumenda possimus rem libero eius, ipsam delectus itaque commodi magni dolorum.</p>
                        </div>
                        <!-- end row -->
                    </div>
                    <div class="modal-footer">
                        <small class="text-start" id="note_date">1 hour ago</small>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>

    </div>
</div>



@endsection
