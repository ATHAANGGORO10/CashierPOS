@if (Session::has('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                toast: 'true',
                position: 'bottom-end',
                icon: 'success',
                text: '{{ Session::get('success') }}',
                showConfirmButton: false,
                timer: 5500,
                customClass: {
                    content: 'swal-text-left'
                },
                showClass: {
                    popup: 'animate__animated animate__fadeInRight'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutRight'
                }
            });
        });
    </script>
@endif

<script>
    function confirmDelete(event, id) {
        event.preventDefault();
        Swal.fire({
            toast: 'true',
            position: 'bottom-end',
            icon: 'success',
            text: '',
            showCancelButton: false,
            timer: '5500'
            customClass: {
                content: 'swal-text-left'
            },
            showClass: {
                popup: 'animate__animated animate__fadeInRight'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutRight'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        });
    }
</script>
