$('document').ready(function () {

            function cl() {
                $.ajax({
                    url: "data.json",
                    type: 'get',
                    dataType: 'json',
                    cache: false,
                    success: function (data) {
                        console.log(data);
                        $.each(data, function (key, value) {
                            console.log(key);
                            console.log(value);
                            $('#resturant .row').append(`
                      <div class="col-md-3 p-2 d-none rest">
                    <div class="card" >
        <img src="${value.ph}" style="width:100%; height:200px" alt="..." class="food">
        <div class="card-body">
            <h5 class="card-title" style="min-height:47px;">${value.rn}</h5>
            <p class="card-text overflow-auto" style="height:120px;">${value.rvw}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">${value.city}, ${value.state}</li>
        </ul>
        <div class="card-body">
            <a href="${value.lnk}" target="_blank" class="card-link">Website link</a>
            <a href="edit.php?${key}" class="card-link">Add Review</a>
        </div>
    </div>
    </div>
                    `);
                        });
                    }
                });
            };

            cl();
}
);