import $ from 'jquery';
import 'select2';
import 'select2/dist/css/select2.css';  // optional if you have css loader
import 'select2-bootstrap-theme/dist/select2-bootstrap.css';  // optional if you have css loader

$(() => {
    $('.select2-enable').select2({
        theme: "bootstrap"
    });
});

window.select2_ajax = select2_ajax;

function select2_ajax(customParams) {
    let minInputLength,placeholder,url;
    if(!customParams){
        return false;
    }

    if(!customParams.selector || typeof customParams.selector === "undefined"){
        return false;
    }

    if(typeof customParams.minInputLength === "undefined"){
        minInputLength=0;
    }else{
        minInputLength=customParams.minInputLength;
    }

    if(typeof customParams.placeholder === "undefined"){
        placeholder=0;
    }else{
        placeholder=customParams.placeholder;
    }

    if(typeof customParams.url === "undefined"){
        url=0;
    }else{
        url=customParams.url;
    }
    console.log(customParams.selector);

    //Call the Select2
    $(customParams.selector).select2({
        minimumInputLength:minInputLength,
        placeholder:placeholder,
        theme: "bootstrap",
        ajax: {
            url: url,
            dataType: "json",
            delay: 250,
            data: function (params) {
                return {
                    q: $.trim(params.term), // search term
                    page: params.page
                };
            },
            processResults: function (data) {
                /*return {
                    results: $.map(data, function(obj) {
                        return { id: obj.ID, text: obj.TEXT };
                    })
                };*/
                return {
                    results: data
                };
            },
            cache: true
        },
        debug:false
    });
}
