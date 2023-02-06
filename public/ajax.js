$(document).ready(function () {
    $(".task-check").change(function () {
        var checkbox = $(this);
        var taskId = checkbox.attr("id").split("-")[1];
        var route = checkbox.is(":checked") ? 'tasks.fulfil' : 'tasks.unFulfil';

        console.log('jquery is working')
        $.ajax({
            type: "POST",
            url: "/ajax/runRoute",
            data: { _token: "{{ csrf_token() }}", route: route, taskId: taskId },
            success: function (data) {
                console.log(data);
            }
        });
    });
});
