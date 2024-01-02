<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate</title>
    <script type="text/javascript">
                function getOrderTotal() {
                    var iweight= document.myform.weight.value;
                    var iheight= document.myform.iheight.value;
                    var ino= document.myform.no.value;

                    if(!iweight.match(recurrency)) {
                        alert('Please provide an item cost in 0.00 format!');
                    }

                    else {

                        var ifinal=iweight * iheight * ino;
                        ifinal *= 100;
                        ifinal = Math.ceil(ifinal);
                        ifinal /= 100;
                        if(ifinal) {
                            ifinal = ifinal;
                        }

                        document.getElementById('mytotal').value = ifinal;

                    }
}
    </script>
</head>
<body>

<div class="right">
       <label>
        <span> Id :</span>
        <input id="name" type="text" name="roll"  />
    </label>

    <label>
        <span>material name :</span>
        <input  type="text" name="material" placeholder="material Name" />
    </label>



       <label>
        <span>Weight:</span>
     <input name="weight" type="text" id="weight" onchange="getOrderTotal()" size="10" maxlength="10"  value="0"/>
    </label>

    <label>
        <span> height:</span>
       <input name="height" id="height" type="text"  onchange="getOrderTotal()" value="0" size="3" maxlength="4"/>
    </label>


     <label>
        <span> no of pcs :</span>

      <input name="no" type="text" id="no" onchange="getOrderTotal()" value="0" size="3" maxlength="4"/>



    </label>
    <label>
        <span> Total :</span>

      <input name="Total" type="text" id="mytotal"  value="0" size="3" maxlength="4"/>



    </label>


    </div>


    <!-- <form name="myform">
        Num1 <input type="text" id="num1"><br>
        Num2 <input type="text" id="num2"> <br>

        Result = <i id="result"></i><br>

        <input type="submit" value="Calculate" onclick="calculatePrice()"/>
    </form> -->


<!-- <script>
    function calculatePrice(){
        var num1 = parseInt(document.getElementById("num1"));
        var num2 = parseInt(document.getElementById("num2"));
        var result= num1+num2;
        document.getElementById("result").value=result;  

    }
</script> -->
</body>
</html>