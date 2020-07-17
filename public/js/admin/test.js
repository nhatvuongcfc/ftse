function create() {
    var matrix_id = $(".matrix_id").val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: './create',
        data: {
            matrix_id: matrix_id,
        },
    });
}

function choose_matrix(matrix_id) {
    // console.log(matrix_id);
    $("#matrix-input").val(matrix_id);
}

function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);

function matrix() {
    window.location = 'test/create/matrix';
}
$("#datetimepicker").datetimepicker();

function plus_number_question() {
    var number = $('.number_question').val();
    number++;
    $('.number_question').attr("value", parseInt(number));
}

function minus_number_question() {
    if ($('.number_question').val() == 0) {
        return false;
    }
    var number = $('.number_question').val();
    number--;
    $('.number_question').attr("value", parseInt(number));
}
$(".number_question").bind('change keyup', function() {
    if ($(this).val().length == 0) {
        $(this).val('');
    }
    $(this).attr('value', $(this).val() + " phút");
});

function plus_number_permutation() {
    var number = $('.number_permutation').val();
    number++;
    $('.number_permutation').attr("value", parseInt(number));
}

function minus_number_permutation() {
    if ($('.number_permutation').val() == 0) {
        return false;
    }
    var number = $('.number_permutation').val();
    number--;
    $('.number_permutation').attr("value", parseInt(number));
}
$(".number_permutation").bind('change keyup', function() {
    if ($(this).val().length == 0) {
        $(this).val('');
    }
    $(this).attr('value', $(this).val() + " phút");
});


function cancel_test(id) {
    // console.log(id);
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: 'cancel_test/' + id,
        success: function(result) {
            // console.log(result);
            // Swal.fire({
            //     title: 'Tạo đề thi thành công',
            //     icon: 'success',
            //     timer: 3000,
            //     showConfirmButton: false
            // });
            // setTimeout(function() {
            //     window.location = "/admin/test/content/" + result;

            // }, 2000);


        },
    });
}

function config(id) {
    window.location = "/admin/test/config/" + id;
}

// $("#myRange").on('change', 'input', function() {
//     console.log('ok');
//     // $('#value_permutation').text(val);
//     // var content = "";
//     // for (var i = 1; i <= val; i++) {
//     //     content += '<input type="text" class="form-control" id="name_code_' + i + '">';
//     // }
//     // $(".card-code").html(content);
// });

function change_permutation(val) {
    // console.log('pk');
    $('#value_permutation').text(val);
    var content = "";
    for (var i = 1; i <= val; i++) {
        content += '<input type="text" class="form-control" id="name_code_' + i + '">';
    }
    $(".card-code").html(content);
}

$('#number_permutation').on('input', function() {

    $('#val_permutation').html(this.value);
});

function hide_collaspe() {
    if ($(".collapse-code").hasClass('in')) {
        return false;
    }
}

function store() {
    var name = $("#name_test").val();
    var time = $(".time").val();
    var timer = $("#timer").val();
    var isOnline = $(".isOnline").val();
    var exam = $(".exam").find('option:selected').val();
    var number_permutation = $("#number_permutation").val();
    var name_code = [];
    for (var i = 1; i <= number_permutation; i++) {
        var id = 'name_code_' + i;
        name_code.push($("#" + id).val());
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: '/admin/test ',
        data: {
            name: name,
            time: time,
            timer: timer,
            isOnline: isOnline,
            exam: exam,
            number_permutation: number_permutation,
            name_code: name_code
        },
        success: function(result) {

            // if (result == '202') {
            console.log(result);
            // Swal.fire({
            //     title: 'Tạo đề thi thành công',
            //     icon: 'success',
            //     timer: 3000,
            //     showConfirmButton: false
            // });
            // setTimeout(function() {
            //     window.location = "/admin/test";

            // }, 500);
            // // }

        },
    });
};

function created_auto(matrix_id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: '/admin/tests/created/auto ',
        data: {

            matrix_id: matrix_id
        },
        success: function(result) {
            var questions = result.questions;
            var content = "";
            var STT = 1
            for (var i in questions) {

                content += '<div class="col_box_test" id="box_test_one" overflow-y: scroll;">' +
                    '<div class="question" id="question_' + STT + '">' +
                    '<div class="myquestionarea" onload="getAnswer(' + questions[i].id + ')" id="testing_answer_' + questions[i].id + '_' + STT + '">' +
                    '<p><b>Question ' + STT + '</b></p>' +
                    '<div class="alert alert-warning">' +
                    '<p>' + questions[i].content + '</p>' +
                    '</div>' +
                    '<div>';
                var answers = questions[i].answers;
                var alphabel = ['A', 'B', 'C', 'D'];
                for (var j in answers) {
                    content += '<label class="fulltest_answer_label" id="test_answer_label_' + answers[j].id + '">' +
                        '<input type="radio" class="fulltest_answer_input" data-answer="' + answers[j].id + '"' +
                        ' data-question="' + questions[i].id + '" data-iquestion="' + STT + '"  name="answer[' + questions[i].id + ']"  />' +
                        '<strong for="' + answers[j].id + '" class="alphabel">' + alphabel[j] + '</strong> ' +
                        '<span>' +
                        '<p>' + answers[j].content + '</p>' +
                        '</span>' +
                        '</label>'
                }
                content += '</div></div></div>';
                STT++;
            }
            $(".content_test").html(content);


        },
    });
}
var difficult = $(".select_difficult").find('option:selected').val();
var topic_id = $(".select_topic").find('option:selected').val();
getQuestion(topic_id, difficult);

function select_topic(topic_id) {
    // console.log(topic_id);
    var difficult = $(".select_difficult").find('option:selected').val();
    // console.log(difficult);
    getQuestion(topic_id, difficult);
}

function select_difficult(difficult) {
    console.log(difficult);
    var topic = $(".select_topic").find('option:selected').val();
    console.log(topic);
    getQuestion(topic_id, difficult);
}

function getQuestion(topic_id, difficult) {
    var matrix_id = $("#matrix_id").val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: '/admin/tests/created/getQuestion',
        data: {
            topic_id: topic_id,
            difficult: difficult,
            matrix_id: matrix_id
        },
        success: function(result) {
            var number_question = result.number_question;
            var number_matrix = result.number_matrix;
            var questions = result.questions;
            var content = "";
            var stt = 1;
            for (var question of questions) {
                content += '<tr>' +
                    '<td>' +
                    '<div class="custom-control  custom-checkbox custom-control-inline">' +
                    '<input type="checkbox" name="options[]" class=" checkbox_some custom-control-input" id="' + question.id + '">' +
                    '<label style="margin-bottom:2px" class="custom-control-label" for="' + question.id + '"></label>' +
                    '</div>' +
                    '</td>' +
                    '<th scope="row">' + stt + '</th>' +
                    '<td>' + question.content + '</td>' +
                    '</tr>';
                stt++;
            }
            $(".box-question").html(content);
            $("#number_question").text('Số câu trong CSDL: ' + number_question);
            $("#number_matrix").text('Số câu tối đa: ' + number_matrix[0]);

        }
    });
}