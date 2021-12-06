// jquery: thư viện của javascript đc dùng phổ biến trong việc làm giao diện
// $(selector).hàm()
$('.btn_remove_voucher').on('click', function(){
    let username = $(this).data('name');
    let redirectUrl = $(this).data('url');
    Swal.fire({
        title: `Bạn có chắc chắn muốn xóa mã giảm giá "${username}" hay không?`,
        showCancelButton: true,
        confirmButtonText: 'Có',
        cancelButtonText: `Hủy`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          window.location.href = redirectUrl;
        }
    })
})

