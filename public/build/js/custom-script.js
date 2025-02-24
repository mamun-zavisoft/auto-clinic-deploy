// delete confirmation start

$('.confirm-text2').on('click', function(e) {
    e.preventDefault();

    // Get the associated delete form
    var deleteForm = $(this).closest('tr').find('.delete-form');

    // Show the SweetAlert confirmation dialog
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        // icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            deleteForm.submit();
        }
    });
});

// delete confirmation end