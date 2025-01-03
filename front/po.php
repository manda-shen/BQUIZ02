<style>
.type,
.list-item {
    display: block;
    margin: 10px 0;
}
</style>

<div>
    目前位置：首頁 > 分類網誌 > <span id='type'>健康新知</span>
</div>
<fieldset style="width:150px;margin-top:10px;display:inline-block;vertical-align:top">
    <legend>分類網誌</legend>
    <a href="#" class='type' data-type='1'>健康新知</a>
    <a href="#" class='type' data-type='2'>菸害防治</a>
    <a href="#" class='type' data-type='3'>癌症防治</a>
    <a href="#" class='type' data-type='4'>慢性病防治</a>
</fieldset>

<fieldset style='width:500px;display:inline-block;margin-top:10px;'>
    <legend>文章列表</legend>
    <div id="postList"></div>
</fieldset>

<script>
// function getList(){
//     $('.type')
// }
$(".type").on('click', function() {
    // console.log($(this).text())
    // console.log(e)
    $("#type").text($(this).text())
    let type = $(this).data('type')
    getList(type)

})

function getList(type) {
    /**
     * 1.有參數時，等同使用$.post
     * 2.無參數時，等同使用$.get
     */
    $("#postList").load("./api/get_list.php", {
        type
    })
    /*
    $.get("./api/get_list.php",{type},(list)=>{
    $("#postList").html(list) 
     */
}

function getPost(id) {
    $("#postList").load("./api/get_post.php", {id})
}
</script>