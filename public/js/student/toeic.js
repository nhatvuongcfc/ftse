heightList();

function heightList() {
    var window_height = $(window).height();
    var boxketqua_top = $("#test_ketqua").offset().top;
    var boxketqua_head_height = $("#test_ketqua").find(".head").height();
    var list = window_height - boxketqua_top - boxketqua_head_height - 40;
    $("#test_ketqua").find(".list").height(list);
};

$("a").on('click', function(event) {
    if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top - 100
        }, 800);
    } // End if
});
$('input[type=radio][name^="answer"]').change(function() {
    var question_id = $(this).data('question');
    var index = $(this).data('index');
    $("#testing_answer_" + question_id + "_" + index).find(".fulltest_answer_label").removeClass("active");
    $(this).parent().addClass("active");
    $("#fulltest_question_shortcut").find(".cau_" + index).find("input").val($(this).val());
    if ($("#fulltest_question_shortcut").length) {
        $("#fulltest_question_shortcut").find(".cau_" + index).find("a").addClass("shortcutActive");
    }
});
var fiveSeconds = new Date().getTime() + 7200000;
$('#show_count_down').countdown(fiveSeconds, {
        elapse: true
    })
    .on('update.countdown', function(event) {
        var this_countdown = $('#show_count_down');
        if (event.elapsed) {
            // .html('Hết thời gian làm bài');
            return liftOff();
        } else {
            this_countdown.html(event.strftime('%H : %M : %S'));
        }
    });

function send_answer_fulltest() {
    var full_test_id = $("#fullTestId").val();
    var task = {}; //object;
    var tasks = []; // array
    $(".fulltest_answer_label").filter('.active').each(function() {
        var question = $(this).find("input").data('question');
        var index = $(this).find("input").data('index');
        var answer = $(this).find("input").val();
        // console.log(question + " " + answer);
        task = {
            'question': question,
            'index': index,
            'answer': answer
        };
        tasks.push(task);
        console.log(tasks);
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        url: '../fulltest/store', //this is only changes
        dataType: "JSON",
        data: {
            full_test_id: full_test_id,
            tasks: tasks
        },
        success: function(data) {
            // Swal.fire({
            //     icon: 'success',
            //     title: 'Thời gian làm bài kết thúc',
            //     timer: 3000
            // });
            // setTimeout(function() {
            //     window.location.href = "/";

            // }, 3000);
        }
    });

}