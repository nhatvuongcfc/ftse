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

function chooseMatrix(matrixId) {
    // console.log(matrix_id);

    var string = './created/' + matrixId;
    console.log(string);
    $("#hrefSave").attr('href', string);

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
// $("#datetimepicker").datetimepicker();

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


function change_permutation(val) {
    $('#value_permutation').text(val);
    var content = "";
    for (var i = 1; i <= val; i++) {
        content += '<input type="text" class="form-control" id="name_code_' + i + '">';
    }
    $(".card-code").html(content);
}

$('#numberPermutation').on('input', function() {

    $('#valPermutation').html(this.value);
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
            Swal.fire({
                title: 'Tạo đề thi thành công',
                icon: 'success',
                timer: 3000,
                showConfirmButton: false
            });
            setTimeout(function() {
                window.location = "/admin/test";

            }, 500);
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

function selectTopic(topicId) {
    console.log(topicId);
    var difficult = $(".selectDifficult").find('option:selected').val();
    console.log(difficult);
    getQuestion(topicId, difficult);
}

function selectDifficult(difficult) {
    console.log(difficult);
    var topic = $(".selectTopic").find('option:selected').val();
    console.log(topic);
    getQuestion(topicId, difficult);
}

function getQuestion(topicId, difficult) {
    // console.log(difficult);
    var matrixId = $("#matrixId").val();
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
            topicId: topicId,
            difficult: difficult,
            matrixId: matrixId
        },
        success: function(result) {
            console.log(result);
            var numberQuestion = result.number_question;
            var numberMatrix = result.number_matrix;
            var questions = result.questions;
            var content = "";
            var stt = 1;
            for (var question of questions) {
                content += '<tr class="tr_export_' + question.id + '" style="cursor:pointer"  onclick="getContent(' + question.id + ')" >' +
                    '<td>' +
                    '<div class="custom-control  custom-checkbox custom-control-inline">' +
                    '<input  type="checkbox" onclick="chosseExportQuestion(' + question.id + ')" name="exportQuestion[]" class="export-question custom-control-input" id="checkExport' + question.id + '">' +
                    '<label onclick="chosseExportQuestion(' + question.id + ')" style="margin-bottom:2px" class="custom-control-label" for="' + question.id + '"></label>' +
                    '</div>' +
                    '</td>' +
                    '<th scope="row">' + stt + '</th>' +
                    '<td style="display:block ruby">' + question.content + '</td>' +
                    '</tr>';
                stt++;

            }
            $(".box-export").html(content);
            $("#numberQuestion").text('Số câu trong CSDL: ' + numberQuestion);
            $("#numberTopicMatrix").text('Số câu tối đa: ' + numberMatrix[0]);
        }
    });
}

function chosseExportQuestion(id) {
    var check = $('#checkExport' + id);
    // console.log(check);
    check = $('#checkExport' + id).prop("checked");
    if (check) {
        $('#checkExport' + id).prop('checked', false);
        $(".tr_export_" + id).removeClass('alert alert-primary');
    } else {
        $('#checkExport' + id).prop('checked', true);
        $(".tr_export_" + id).addClass('alert alert-primary');
    }
}

function chosseImportQuestion(id) {
    var check = $('#checkImport' + id);
    check = $('#checkImport' + id).prop("checked");
    if (check) {
        $('#checkImport' + id).prop('checked', false);
        $(".tr-import-" + id).removeClass('alert alert-primary');
    } else {
        $('#checkImport' + id).prop('checked', true);
        $(".tr-import-" + id).addClass('alert alert-primary');
    }
    return true;
}
vararrExport = [];
var arrImport = [];

function exportQuestion() {
    var checkbox = $(".export-question");
    var checked = checkbox.filter(':checked');
    checked.map(function() {
        var id = this.id;
        arrExport.push(id.slice(13, id.length));
    });
    getQuestionExport(arr_export);
}

function importQuestion() {
    // console.log('ok');
    var checkbox = $(".import-question");
    // console.log(checkbox);
    var checked = checkbox.filter(':checked');
    checked.map(function() {
        var id = this.id;
        arrImport.push(id.slice(13, id.length));
    });
    var arrNew = arrExport.filter(item => !arrImport.includes(item));
    arrExport = arrNew;

    unchosseImportQuestion(arrImport);
    getQuestionExport(arrNew);
}

function unchosseImportQuestion(arrImport) {
    console.log(arrImport);
    for (var item of arrImport) {
        chosseExportQuestion(item);
    }
    return true;
}

function getContent(id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: '/admin/tests/created/getContent',
        data: {
            id: id
        },
        success: function(result) {
            var questions = result.questions;
            var content = "";
            var STT = 1
            content += '<div class="col_box_test" id="box_test_one" overflow-y: scroll;">' +
                '<div class="question" id="question_' + STT + '">' +
                '<div class="myquestionarea" onload="getAnswer(' + questions.id + ')" id="testing_answer_' + questions.id + '_' + STT + '">' +
                '<p><b>Question ' + STT + '</b></p>' +
                '<div class="alert alert-warning">' +
                '<p>' + questions.content + '</p>' +
                '</div>' +
                '<div>';
            var answers = questions.answers;
            var alphabel = ['A', 'B', 'C', 'D'];
            for (var j in answers) {
                content += '<label class="fulltest_answer_label" id="test_answer_label_' + answers[j].id + '">' +
                    '<strong for="' + answers[j].id + '" class="alphabel">' + alphabel[j] + '</strong> ' +
                    '<span>' +
                    '<p>' + answers[j].content + '</p>' +
                    '</span>' +
                    '</label>'
            }
            content += '</div></div></div>';
            STT++;
            $(".box_content").html(content);
        }
    });

}

function getQuestionExport(array) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: '/admin/tests/created/exportQuestion',
        data: {
            array: array
        },
        success: function(result) {
            var questions = result.questions;
            var content = "";
            var stt = 1;
            var numberChoose = questions.length;
            for (var question of questions) {
                content += '<tr class="tr-import-' + question.id + '" style="cursor:pointer"  onclick="getContent(' + question.id + ')" >' +
                    '<td>' +
                    '<div class="custom-control  custom-checkbox custom-control-inline">' +
                    '<input  type="checkbox" onclick="chosseImportQuestion(' + question.id + ')" name="import-question[]" class="import-question custom-control-input" id="checkImport' + question.id + '">' +
                    '<label onclick="chosseImportQuestion(' + question.id + ')" style="margin-bottom:2px" class="custom-control-label" for="' + question.id + '"></label>' +
                    '</div>' +
                    '</td>' +
                    '<th scope="row">' + stt + '</th>' +
                    '<td style="display:block ruby">' + question.content + '</td>' +
                    '</tr>';
                stt++;

            }
            $(".box-import").html(content);
            $("#numberChoose").text('Số câu đã chọn: ' + numberChoose);
        }
    });
}

function collapseHandsome() {
    var difficult = $(".select-difficult").find('option:selected').val();
    var topicId = $(".select-topic").find('option:selected').val();
    getQuestion(topicId, difficult);
}

