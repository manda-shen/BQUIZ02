<fieldset style="width:75%;">
    <legend>新增問卷</legend>
    <table style="width:95%;">
        <tr style>
            <td class="clo" style="width:12%;">問卷名稱</td>
            <td>
                <input type="text" name="subject" id="subject" style="width:85%;">
            </td>
        </tr>

        <tr>
            <td class="clo" colspan='2' style="width:95%;">
                <div id="options">
                    選項&nbsp;<input type="text" name="option[]" id="" style="width:80%;">
                    <button onclick="more()">更多</button>
                </div>
            </td>
        </tr>
    </table>
    <div class="ct">
        <button onclick="send()">新增</button>
        <button onclick="resetForm()">清空</button>
    </div>
</fieldset>

<script>
function more() {
    let el = `<div id="options">選項&nbsp;<input type="text" name="option[]" id="" style="width:80%;"></div>`
    $("#options").before(el)
}

function send() {
    let subject = $("#subject").val()
    let options = $("input[name='option[]']").map((id, item) => $(item).val()).get()
    console.log(subject, options)

    $.post("./api/add_que.php", {
        subject,
        options
    }, (res) => {
        console.log(res)
        //location.reload()
    })
}

function resetForm() {
    $("input[type='text']").val("")
}
</script>