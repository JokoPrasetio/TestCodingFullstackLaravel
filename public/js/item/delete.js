function DeleteData(id, name)
{
    deleteModal.modal("show")
    deleteConfirm.html(`${name}`)
    deleteForm.attr("action", `/data-barang/${id}`)
}
