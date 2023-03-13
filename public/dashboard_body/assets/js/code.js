//sweet alert delete function
$(function() {
    $(document).on('click', '#delete', function(e) {
        e.preventDefault();
        var link = $(this).attr("href");

        Swal.fire({
            title: 'Are you sure?',
            text: "This data will be deleted permanently!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                    'Deleted!',
                    'Data has been deleted.',
                    'success'
                )
            }
        })
    });
});


$('.delete-user').click(function(e) {
    e.preventDefault() // Don't post the form, unless confirmed
    if (confirm('Are you sure?')) {
        // Post the form
        $(e.target).closest('form').submit() // Post the surrounding form
    }
});