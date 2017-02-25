/**
 * Created by shino on 2016/12/1.
 */
$(".button_in").on('click',function () {

    var post_data = {
        'uid': $('#uid').val(),
        'aname':$('#aname').val(),
        'description':$('#description').val(),
        'stime':$('#stime').val(),
        'etime':$('#etime').val(),
        'type':$('#type').val()

    };
    console.log(post_data);
    $.ajax({
            url:"<?=site_url('activity/establish')?>",
        data:post_data,
        method:'post',
        async:false,
        complete:function (data) {
        alert("发布成功!");
        location.href = "<?=site_url('activity/view')?>"
    }
})
});