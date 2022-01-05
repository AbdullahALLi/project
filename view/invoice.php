<!DOCTYPE html>

<body>

</body>
</html>
<script type="text/javascript">
    function checkTotal() {
        document.listForm.total.value = '';
        var sum = 0;
        for (i=0;i<document.listForm.choice.length;i++) {
          if (document.listForm.choice[i].checked) {
            sum = sum + parseInt(document.listForm.choice[i].value);
          }
        }
        document.listForm.total.value = sum;
    }
</script>

<form name="listForm">
<input type="checkbox" name="choice" value="100" onchange="checkTotal()"/>100<br/>
<input type="checkbox" name="choice" value="50" onchange="checkTotal()"/>50<br/>
<input type="checkbox" name="choice" value="1500" onchange="checkTotal()"/>1500<br/>
<input type="checkbox" name="choice" value="200" onchange="checkTotal()"/>200<br/>
Total: <input type="text" size="2" name="total" value="0"/>
</form>