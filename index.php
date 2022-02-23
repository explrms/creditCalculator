<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<div align="left" id="cor5" class="sidebarForm">
    <h4>Калькулятор кредита:</h4>
    <form action="#" method="post" id="calculator">

        <label>Сумма кредита: <font color="#FF0000" style="vertical-align: middle;">*</font></label>
        <div class="input" id="cor5">
            <input name="summaCredit" value="" id="posName" type="text">
        </div>

        <label>Ставка % в год: <font color="#FF0000" style="vertical-align: middle;">*</font></label>
        <div class="input" id="cor5">
            <input name="procent" value="" id="posEmail" type="text">
        </div>

        <label>Период выплат:</label><br>
        <div class="select1" id="cor5">
            <select name="year">
                <option value="0">0 лет</option>
                <option value="1">1 год</option>
                <option value="2">2 года</option>
                <option value="3">3 года</option>
                <option value="4">4 года</option>
                <option value="5">5 лет</option>
                <option value="6">6 лет</option>
                <option value="7">7 лет</option>
                <option value="8">8 лет</option>
                <option value="9">9 лет</option>
                <option value="10">10 лет</option>
                <option value="11">11 лет</option>
                <option value="12">12 лет</option>
                <option value="13">13 лет</option>
                <option value="14">14 лет</option>
                <option value="15">15 лет</option>
                <option value="16">16 лет</option>
                <option value="17">17 лет</option>
                <option value="18">18 лет</option>
                <option value="19">19 лет</option>
                <option value="20">20 лет</option>
                <option value="21">21 год</option>
                <option value="22">22 года</option>
                <option value="23">23 года</option>
                <option value="24">24 года</option>
                <option value="25">25 лет</option>
                <option value="26">26 лет</option>
                <option value="27">27 лет</option>
                <option value="28">28 лет</option>
                <option value="29">29 лет</option>
            </select>
        </div>

        <div class="select2" id="cor5">
            <select name="month">
                <option style="height: 33px; padding: 11px 0 0 0;" value="0">0 месяцев</option>
                <option style="height: 33px; padding: 11px 0 0 0;" value="1">1 месяц</option>
                <option style="height: 33px; padding: 11px 0 0 0;" value="2">2 месяца</option>
                <option style="height: 33px; padding: 11px 0 0 0;" value="3">3 месяца</option>
                <option style="height: 33px; padding: 11px 0 0 0;" value="4">4 месяца</option>
                <option style="height: 33px; padding: 11px 0 0 0;" value="5">5 месяцев</option>
                <option style="height: 33px; padding: 11px 0 0 0;" value="6">6 месяцев</option>
                <option style="height: 33px; padding: 11px 0 0 0;" value="7">7 месяцев</option>
                <option style="height: 33px; padding: 11px 0 0 0;" value="8">8 месяцев</option>
                <option style="height: 33px; padding: 11px 0 0 0;" value="9">9 месяцев</option>
                <option style="height: 33px; padding: 11px 0 0 0;" value="10">10 месяцев</option>
                <option style="height: 33px; padding: 11px 0 0 0;" value="11">11 месяцев</option>
                <option style="height: 33px; padding: 11px 0 0 0;" value="12">12 месяцев</option>
            </select>
        </div>

        <button type="button" id="send4">Посчитать --></button>
    </form>

    <hr style="margin: 5px 8px 0 8px; height:1px; background-color:#666; width:95%;">
    <h4>Итог расчёта:</h4>
    <table width="420" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
            <td width="158" height="20" style="position:relative;"><span style="font: 12px Verdana; position:absolute; top:2px; right:8px;">Ежемесячный платёж:</span></td>
            <td><span id="h1" style="font: 12px Verdana;">0</span></td>
        </tr>
        <tr>
            <td width="158" height="20" style="position:relative;"><span style="font: 12px Verdana; position:absolute; top:2px; right:8px;">Количество платежей:</span></td>
            <td><span id="h2" style="font: 12px Verdana;">0</span></td>
        </tr>
        <tr>
            <td width="158" height="20" style="position:relative;"><span style="font: 12px Verdana; position:absolute; top:2px; right:8px;">Всего заплатите:</span></td>
            <td><span id="h3" style="font: 12px Verdana;">0</span></td>
        </tr>
        <tr>
            <td width="158" height="20" style="position:relative;"><span style="font: 12px Verdana; position:absolute; top:2px; right:8px;">Переплата по кредиту:</span></td>
            <td><span id="h4" style="font: 12px Verdana;">0</span></td>
        </tr>
        </tbody></table><br>

</div>

<style>
    .sidebarForm {
        background: #f6f6f6;
        box-shadow: 0 0 5px #ccc;
        -webkit-box-shadow: 0 0 5px #ccc;
        -moz-box-shadow: 0 0 5px #ccc;
        width: 420px;
    }

    #cor5 {
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
    }

    .sidebarForm h4 {
        font: 14px Verdana;
        color: #333333;
        text-align: left;
        padding: 10px 10px 10px 10px;
        margin: 0px;
    }

    .sidebarForm label {
        font: 12px Verdana;
        color: #333;
        padding: 10px;
    }

    .sidebarForm .input {
        width: 179px;
        height: 20px;
        overflow: hidden;
        background: white;
        border: solid 1px #DFE2E5;
        margin: 5px 0 10px 10px;
        box-shadow: 0 0 5px #ccc;
        -webkit-box-shadow: 0 0 5px #ccc;
        -moz-box-shadow: 0 0 5px #ccc;
    }

    .sidebarForm .input input {
        width: 174px;
        height: 26px;
        background: white;
        margin: -3px 0 0 -5px;
        padding: 0px 8px;
        border: none;
        background: transparent;
    }

    .sidebarForm .select1 {
        width: 70px;
        height: 20px;
        float: left;
        overflow: hidden;
        background: white;
        border: solid 1px #DFE2E5;
        margin: 5px 7px 10px 10px;
        box-shadow: 0 0 5px #ccc;
        -webkit-box-shadow: 0 0 5px #ccc;
        -moz-box-shadow: 0 0 5px #ccc;
    }

    .sidebarForm .select1 select {
        width: 80px;
        height: 26px;
        background: white;
        margin: -3px 0 0 -5px;
        padding: 0px 8px;
        border: none;
        background: transparent;
    }

    .sidebarForm .select2 {
        width: 100px;
        height: 20px;
        overflow: hidden;
        background: white;
        border: solid 1px #DFE2E5;
        margin: 5px 0 10px 10px;
        box-shadow: 0 0 5px #ccc;
        -webkit-box-shadow: 0 0 5px #ccc;
        -moz-box-shadow: 0 0 5px #ccc;
    }

    .sidebarForm .select2 select {
        width: 110px;
        height: 26px;
        background: white;
        margin: -3px 0 0 -5px;
        padding: 0px 8px;
        border: none;
        background: transparent;
    }

    .sidebarForm button {
        border: 2px #ccc solid;
        width: 150px;
        height: 25px;
        font: 12px Verdana;
        font-weight: 700;
        color: #FFFFFF;
        background-color: #cc0000;
        padding-bottom: 2px;
        margin: 5px 0 15px 135px;
    }
</style>

<script type="text/javascript">
    $(document).ready(function() {
// калькулятор кредита................................./
        var Ld = "<img src='load.gif' alt='' />";
        var error = "<span style='font-size: 11px; font-weight: 100;'><font color='#ff0000'>Ошибка!</font> Форма заполненна не корректно!</span>";
        var erForm = "";

        $("#send4").click(function(){
            $("#h1").html(Ld).show();
            $("#h2").html(Ld).show();
            $("#h3").html(Ld).show();
            $("#h4").html(Ld).show();

            var amount = $("#calculator input[name='summaCredit']").val();
            var interest = $("#calculator input[name='procent']").val()/1200;
            var yearCredit = $("#calculator select[name='year']").val();
            var month = $("#calculator select[name='month']").val();

            var Valjuta = $("#calculator select[name='posValjuta']").val();
            var time = yearCredit * 12 + Number(month);
            /*alert(time);*/

            function calculatePayment() {
                var rate = amount * (interest * Math.pow(1 + interest, time)) / (Math.pow(1 + interest, time) - 1);
                var summaVsego = rate * time;
                var pereplata = summaVsego - amount;
                $("#h1").text(rate.toFixed(2));
                $("#h2").text(time);
                $("#h3").text(summaVsego.toFixed(2));
                $("#h4").text(pereplata.toFixed(2));
            }

            if (amount === "") {erForm = "yes";}
            if (interest == "") {erForm = "yes";}
            if (yearCredit == "0" && month == "0") {erForm = "yes";}

            if (erForm == "") { calculatePayment(); } else {
                $("#h1").html(error);
                $("#h2").html(error);
                $("#h3").html(error);
                $("#h4").html(error);
                erForm = "";}
            return false;
        });

    });
</script>