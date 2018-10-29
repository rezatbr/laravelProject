$(window).ready(function() {
    setTimeout(function () {
        $('.row').css('display','block');
        // $('.row').css('filter','blur(0)');
    },100);
    setTimeout(function () {
        $('#wait').css('display','none');
    },900);
});
function update_status(id,role){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var id=id;
    var role=role;
    var status=$('#s'+id+'').val();
    $.ajax({
        url: '/status',
        type: 'POST',
        /* send the csrf-token and the input to the controller */
        data: {_token: CSRF_TOKEN, id:id,status:status,role:role},
        dataType: 'JSON',
        beforeSend: function(){
            $("#wait").css("display", "block");
        },
        complete: function(){
            $("#wait").css("display", "none");
        },
        success:function(data){
          $("#s"+id).val(data.value);
        }
    });
}
function update_priority(id){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var id=id;
    var priority=$('#p'+id+'').val();
    $.ajax({
        url: '/priority',
        type: 'POST',
        /* send the csrf-token and the input to the controller */
        data: {_token: CSRF_TOKEN, id:id,priority:priority},
        dataType: 'JSON',
        beforeSend: function(){
            $("#wait").css("display", "block");
        },
        complete: function(){
            $("#wait").css("display", "none");
        },
        success:function(data){
            // alert(typeof (data.value));
            $("#p"+id).val(data.value);
        }
    });
}
/* attach a submit handler to the form */
function create_cat() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var url = '/create_cat',
        title=$('#title').val(),
        description=$('#description').val();

    $.ajax({
        url: url,
        type: 'POST',
        /* send the csrf-token and the input to the controller */
        data: {_token: CSRF_TOKEN, title:title,description:description},
        dataType: 'JSON',
        beforeSend: function(){
            $("#wait").css("display", "block");
        },
        complete: function(){
          $("#wait").css("display", "none");
          $('#modal_backdrop').modal('hide');
        },
        success:function (data) {
          $(".multi-select-full>select").prepend('<option value='+data.value+' selected="selected">'+data.title+'</option>').multiselect('rebuild');
        }
    });
}

   $(document).ready(function(){

    setTimeout(function(){
        $("#sweet_auto_closer").click();
    },10);
       setTimeout(function(){
           $("#sweet_error").click();
       },10);
});

function getRecords(page,role){
                $.ajax({
                      url:'/getList'+role+'?page='+page,
                      beforeSend:function(){                      
                      },
                      complete:function(){
                        $('.panel').css('filter','blur(0.9px)');
                          setTimeout(function(){
                              $('.row').css('display','block');
                          },1);
                      },
                      success:function(data){
                        $("#response").html(data);
                        location.hash=page;                       
                        setTimeout(function(){
                             $('.panel').css('filter','blur(0)');
                        },700);
                      }
                });
}



