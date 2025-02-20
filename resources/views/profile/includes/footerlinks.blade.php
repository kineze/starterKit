<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "5000",
        "showDuration": "300",
        "hideDuration": "1000",
        "extendedTimeOut": "1000",
    };
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        @if(session()->has('success'))
            toastr.success("{{ session('success') }}");
        @endif
    
        @if(session()->has('error'))
            toastr.error("{{ session('error') }}");
        @endif
    
        @if(session()->has('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif
    
        @if(session()->has('info'))
            toastr.info("{{ session('info') }}");
        @endif
    });
</script>


 <script>
     const setup = () => {
         return {
         isSidebarOpen: true,
         currentSidebarTab: 'linksTab',
         isSettingsPanelOpen: false,
         isSubHeaderOpen: false,
         watchScreen() {
             if (window.innerWidth <= 1024) {
             this.isSidebarOpen = false
             }
         },
     }
   }
 </script>

<script>
    function ConfirmDelete(event, id) {
        event.preventDefault();
    
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the form
                document.getElementById('delete-form-' + id).submit();
                
                // Show the success message
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
            }
        });
    }
</script>

 