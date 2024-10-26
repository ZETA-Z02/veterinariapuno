var host = '192.168.1.41';
function insert(array,controller,method='create'){
    //console.log(array);
    $.ajax({
        type: "POST",
        url: `http://${host}/clinica/${controller}/${method}`,
        data: array,
        success: function (response) {
            console.log('success POST',response);
        },error: function (error){
            console.log('error POST');
        }
    });
}
function get(id,controller,method='get'){
    $.ajax({
        type: "GET",
        url: `http://${host}/clinica/${controller}/${method}`,
        dataType: "json",
        success: function (response) {
            //console.log(response);
            let data = response;
            let html = '';
            // for(let j=0; j<data[1].length;j++){
            //     let columns = ``;
            //     for(let i in data[1][0]){
            //         // console.log(data[1])
            //         // console.log(i)
            //         // console.log(data[1][0][i]);
            //         columns += `<td>${data[1][0][i]}</td>`;    
            //     }
            //     html += `
            //                 <tr value="${data[0].id}">
            //                     ${columns}
            //                     <td><a class="button">Detalles</a></td>
            //                 </tr>
            //             `;
            // }
            data.forEach((element) => {
                let columns = ``;
                for(let i in element[1]){
                    columns += `<td>${element[1][i]}</td>`;
                }
                html += `
                            <tr value="${element[0].id}">
                                ${columns}
                                <td><a class="button">Detalles</a></td>
                            </tr>
                        `;
            });
            $(`#${id}`).html(html);
        },error: function (error){
            console.log('error GET',error);
        }
    });
}
function getOne(id){
    console.log(array);
    $.ajax({
        type: "GET",
        url: "url",
        data: {id},
        dataType: "json",
        success: function (response) {
            console.log('success GET');
        },error: function (error){
            console.log('success GET');
        }
    });
}
function update(array){
    console.log(array);
    $.ajax({
        type: "POST",
        url: "url",
        data: {array},
        dataType: "json",
        success: function (response) {
            console.log('success PUT');
        },error: function (error){
            console.log('success PUT');
        }
    });
}
function deletet(id){
    console.log(array);
    $.ajax({
        type: "POST",
        url: "url",
        data: {id},
        dataType: "json",
        success: function (response) {
            console.log('success DELETE');
        },error: function (error){
            console.log('success DELETE');
        }
    });
}