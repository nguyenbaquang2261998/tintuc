// Biến dùng kiểm tra nếu đang gửi ajax thì ko thực hiện gửi thêm
var is_busy = false;

// Biến lưu trữ trang hiện tại
var page = 1;

// Biến lưu trữ rạng thái phân trang 
var stopped = false;

$(document).ready(function()
{    
    // Khi kéo scroll thì xử lý
    $(window).scroll(function() 
    {
        // Element append nội dung
        $element = $('#content');

        // ELement hiển thị chữ loadding
        $loadding = $('#loadding');

        // Nếu màn hình đang ở dưới cuối thẻ thì thực hiện ajax
        if($(window).scrollTop() + $(window).height() >= $element.height()) 
        {
            // Nếu đang gửi ajax thì ngưng
            if (is_busy == true){
                return false;
            }

            // Nếu hết dữ liệu thì ngưng
            if (stopped == true){
                return false;
            }

            // Thiết lập đang gửi ajax
            is_busy = true;

            // Tăng số trang lên 1
            page++;
            
            // Hiển thị loadding
            $loadding.removeClass('hidden');
            // Gửi Ajax
            setTimeout(function(){
                $.ajax(
                {
                    type        : 'get',
                    dataType    : 'text',
                    url         : '/index.php?r=ajax/load-more',
                    data        : {page : page},
                    success     : function (result)
                    {
                        is_busy = false;
                        $loadding.addClass('hidden');
                        $("#content").append(result);
                    }
                });
            },1000);
            
            
            // return alert('aaaaa');
        }
    });
});