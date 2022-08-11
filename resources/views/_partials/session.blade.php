<script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    })

    function notif(role, msg) {
      Toast.fire({
        icon: role,
        title: msg,
      })
    }

    @if (Session::has('success'))
      var msg = "{{ session('success') }}"
      notif('success', msg)
    @endif

    @if (Session::has('error'))
      var msg = "{{ session('error') }}"
      notif('error', msg)
    @endif

    @if (Session::has('warning'))
      var msg = "{{ session('warning') }}"
      notif('warning', msg)
    @endif
</script>