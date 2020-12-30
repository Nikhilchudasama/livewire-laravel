<script>

    const SwalConfirm = (data) => {
        Swal.fire({
            icon: data.icon,
            title: data.title,
            text: data.text,
            html: data.html,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: data.confirmButtonText,
            reverseButtons: true,
        }).then(result => {
            if (result.value) {
                return livewire.emit(data.method, data.params)
            }

            if (data.callback) {
                return livewire.emit(data.callback)
            }
        })
    }

    const SwalAlert = (data) => {
        Swal.fire({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: data.timeout??7000,
            titleText: data.titleText,
            icon: data.icon,
            html: data.html,
            timerProgressBar: true,
            didOpen: function(toast) {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
    }

    document.addEventListener('DOMContentLoaded', () => {
        this.livewire.on('swal:fire', data => {
            Swal.fire(data)
        })

        this.livewire.on('swal:confirm', data => {
            SwalConfirm(data)
        })

        this.livewire.on('swal:toast', data => {
            SwalAlert(data)
        })
    })
</script>
