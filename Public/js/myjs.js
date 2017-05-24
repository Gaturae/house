function findMsg(){  
	var value = $("#textfind").val();
	//document.cookie="a="+value; 
	var aaa = {value1:value};
 	$.ajax({
            //提交数据的类型 POST GET
           	ContentType:"application/json;charset=utf-8",
            type:"POST",
            //提交的网址
            url:"/think/Home/Index/php",
            //提交的数据
            data:aaa,
            //返回数据的格式
            dataType: "json",//"xml", "html", "script", "json", "jsonp", "text".
            //在请求之前调用的函数
            //beforeSend:function(){$("#msg").html("logining");},
            //成功返回之后调用的函数             
            success:function(data){
          		local_label(data)
            },
            //调用执行后调用的函数
            // complete: function(XMLHttpRequest, textStatus){
            //    //alert(XMLHttpRequest.responseText);
            //    alert("complete" + textStatus);
            //     //HideLoading();
            // },
            //调用出错执行的函数
           error :function (XMLHttpRequest, textStatus, errorThrown){
            	// alert(XMLHttpRequest.readyState)
            	// alert(XMLHttpRequest.status)
             //    alert(textStatus)
                alert("error:"+errorThrown)
            }         
         });
	
}

function local_label(data){
    //var jsonStr = JSON.stringify(data)
	$.each(data,function(key,val){
		$("#local_label").append("<a href='javascript:#'>"+val+" > </a>") 
	})
}

$(function () { $(".title_img a").tooltip({html : true });});

function fade(){

    $("#loginPanel").fadeToggle(1500,function(){

        $("#registPanel").fadeIn(500);
    });
   
}

