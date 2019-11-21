<script language="javascript">
    function ShowMeDate() {
        var Today=new Date();
        alert("今天日期是 " + Today.getFullYear()+ " 年 " + (Today.getMonth()+1) + " 月 " + Today.getDate() + " 日");
        <?php
            echo "this is a good day";
        ?>>
    }
</script>

<button onclick="ShowMeDate()">告訴我今天日期</button>