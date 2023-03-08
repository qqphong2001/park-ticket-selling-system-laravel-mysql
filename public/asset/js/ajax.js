
$('.buttonModal').on("click",function(){
    var id = $(this).attr("value");
    $.ajax({
        url:'/ajax/'+id,
        type: 'get',
        dataType: 'JSON',
        success: function(data){
             $('#modelphotofood').attr("src",data[0][0].photo)
            $('#modelnamefood').text(data[0][0].name)
            $('#modeldescfood').text(data[0][0].description)
            $('#modelpricefood').text(data[0][0].price)
            console.log(data)
        },
    })
})

$('.addtocart').on("click",function(){

    var id = $(this).attr("value");
    $.ajax({
        url:'/ajax/'+id,
        type:'get',
        dataType:'JSON',
        success:function(data){

            console.log(data)

        }
    })

})


// $('#add-to-cart-form').on('submit', function(e) {
//     e.preventDefault();

//     $.ajax({
//         url: $(this).attr('action'),
//         type: 'POST',
//         data: $(this).serialize(),
//         success: function(response) {
//             alert(response.message);
//             $('#cart-count').html(response.cart_count);
//         },
//         error: function(xhr) {
//             alert('Error: ' + xhr.responseJSON.message);
//         }
//     });
// });

