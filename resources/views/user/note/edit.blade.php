@extends('user.user_master')
@section('user')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Title</h4>
                        <form action="#" method="post">
                            <div class="row mb-3 mt-3">
                                <div class="col-sm-12">
                                    <input class="form-control" type="text" placeholder="Note title" id="example-text-input" name="title" value="noteTitle">
                                        <span class="text-danger">Error $message</span>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <textarea class="form-control" rows="10" placeholder="What's on your mind..." name="body">noteBody</textarea>
                                        <span class="text-danger">Error $message</span>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary waves-effect waves-light float-end" value="Update">

                        </form>
                    
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

    </div>

    </div>
</div>



@endsection
