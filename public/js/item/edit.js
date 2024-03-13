function EditData(id, obj){
    obj = JSON.parse(decodeURIComponent(obj))
    $.each(obj, (key, value) => {
        $(key).val(value)
    })
    EditModal.modal("show")
    EditForm.attr("action", `/data-barang/${id}`)
}
