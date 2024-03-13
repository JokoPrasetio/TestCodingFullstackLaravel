DataTable.bootstrapTable({
    url: "/datatable",
    showColumns: true,
    showColumnsToggleAll: true,
    showRefresh: true,
    sortable: true,
    search: true,
    searchOnEnterKey: false,
    searchHighlight: true,
    pagination: true,
    pageSize: 10,
    pageList: [10, 25, 50, 100, 200],
    cookie: true,
    icons: {
        refresh: "fas fa-sync",
        columns: "fas fa-th-list",
    },
    columns: [
        {
            title: "Nama Barang",
            field: "name",
            sortable: true,
        },
        {
            title: "Stok",
            field: "stok",
            sortable: true,
        },
        {
            title: "Jumlah Terjual",
            field: "jumlah_terjual",
            sortable: true,
        },
        {
            title: "Tanggal Tranksaksi",
            field: "tanggal_tranksaksi",
            sortable: true,
        },
        {
            title: "Jenis Barang",
            field: "jenis_barang",
        },
        {
            title: "Aksi",
            field: "id",
            formatter: (value, row) => {
                const fields = {
                    "#name_old": row.name,
                    "#stok_old": row.stok,
                    "#jumlah_terjual_old": row.jumlah_terjual,
                    "#tanggal_tranksaksi_old": row.tanggal_tranksaksi,
                    "#jenis_barang_old": row.jenis_barang,
                };
                const obj = encodeURIComponent(JSON.stringify(fields));
                let buttons = "";
                buttons += `
                <button class="btn btn-datatable btn-icon btn-transparent-dark my-auto" onclick="EditData('${row.id}', '${obj}')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                <i class="far fa-edit fa-fw"></i>
                </button>
                `;

                buttons += `
                <button class="btn btn-datatable btn-icon btn-transparent-dark my-auto ms-2" onClick="DeleteData('${row.id}', '${row.name}')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                <i class="far fa-trash-can fa-fw"></i>
                </button>
                `;
                return `<div class="d-flex space-x">${buttons}</div>`;
            },
        },
    ],
});
