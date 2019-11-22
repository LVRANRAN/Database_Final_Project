function del(deid){
    var xml;
    if(window.ActiveXObject){//如果是浏览器支持ActiveXObjext则创建ActiveXObject对象
     xml=new ActiveXObject('Microsoft.XMLHTTP');
    }else if(window.XMLHttpRequest){//如果浏览器支持XMLHttpRequest对象则创建XMLHttpRequest对象
     xml=new XMLHttpRequest();
    }
    xml.open("GET","del.php?deid="+deid,true);//使用GET方法调用del.php并传递参数的值
    xml.onreadystatechange=function(){//当服务器准备就绪执行回调函数
     if(xml.readystate==4 && xml.status==200){//如果服务器已经传回信息并未发生错误
        var msg=xml.responseText;//把服务器传回的值赋给变量msg
        if(msg==1){//如果服务器传回的值为1则提示删除成功
         alert("删除成功！");
      location.reload();
        }else{//否则提示删除失败
         alert("删除失败！");
         return false;
        }
   }
    }
    xml.send(null);//不发送任何数据，因为数据已经使用请求URL通过GET方法发送
}