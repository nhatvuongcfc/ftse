// $(document).ready(function() {
// COUNTDOWN
var minutes = $('#set-time').val();

var target_date = new Date().getTime() + ((minutes * 60) * 1000); // set the countdown date
var time_limit = ((minutes * 60) * 1000);
//set actual timer
setTimeout(

    function() {
        Swal.fire({
            icon: 'success',
            title: 'Thời gian làm bài kết thúc',
            text: 'Hệ thống sẽ chấm điểm và công bố sau',
            timer: 3000
        });
        submit_test();
    }, time_limit);
var days, hours, minutes, seconds; // variables for time units
var countdown = document.getElementById("tiles"); // get tag element
getCountdown();
setInterval(function() {
    getCountdown();
}, 1000);

function getCountdown() {
    // find the amount of "seconds" between now and target
    var current_date = new Date().getTime();
    var seconds_left = (target_date - current_date) / 1000;
    if (seconds_left >= 0) {
        if ((seconds_left * 1000) < (time_limit / 2)) {
            $('.head').removeClass('color-full');
            $('.head').addClass('color-half');
        }
        if ((seconds_left * 1000) < (time_limit / 4)) {
            $('.head').removeClass('color-half');
            $('.head').addClass('color-empty');
        }
        days = pad(parseInt(seconds_left / 86400));
        seconds_left = seconds_left % 86400;
        hours = pad(parseInt(seconds_left / 3600));
        seconds_left = seconds_left % 3600;
        minutes = pad(parseInt(seconds_left / 60));
        seconds = pad(parseInt(seconds_left % 60));
        // format countdown string + set tag value
        countdown.innerHTML = "<span>" + hours + ":</span><span>" + minutes + ":</span><span>" + seconds + "</span>";
    }
}

function pad(n) {
    return (n < 10 ? '0' : '') + n;
}

$('input[type=radio][name^="answer"]').change(function() {
    var question_id = $(this).data('question');
    var iquestion_id = $(this).data('iquestion');
    var name = $(this).attr('name');
    $("#testing_answer_" + question_id + "_" + iquestion_id).find(".fulltest_answer_label").removeClass("active");
    $(this).parent().addClass("active");
    if ($("#fulltest_question_shortcut").length) {
        $("#fulltest_question_shortcut").find(".cau_" + iquestion_id).find("a").addClass("gray");
    }
});
//NỘP BÀI
function submit_test() {
    var user_id = $('.user_id').val();
    var test_id = $('.input_test_id').val();
    var task = {}; //object;
    var tasks = []; // array
    var checkbox = $(".fulltest_answer_input").filter(':checked').each(function() {
        var question = $(this).data('question');
        var answer = $(this).data('answer');
        // console.log(question + " " + answer);
        task = {
            question: question,
            answer: answer
        };
        tasks.push(task);
    });
    console.log(tasks);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        url: '/test/submit',
        dataType: "JSON",
        data: {
            user_id: user_id,
            test_id: test_id,
            tasks: tasks
        },
        success: function(data) {
            Swal.fire({
                icon: 'success',
                title: 'Thời gian làm bài kết thúc',
                timer: 3000
            });
            setTimeout(function() {
                window.location.href = "/";

            }, 3000);
        }
    });
}
//SCROLLSPY
$('body').scrollspy({ target: "#testing_form" });
$("#fulltest_question_shortcut a").on('click', function(event) {
    if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top - 90
        }, 800);
    }
});