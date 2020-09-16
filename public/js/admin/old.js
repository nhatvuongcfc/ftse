$('[data-toggle="tooltip"]').tooltip();
$("#create_subject").change(function() {
    var subject_id = $(this).val();
    getTopic(subject_id);
});

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
    $(this).attr('value', $(this).val());
});
getUrl_topic();

function getUrl_topic() {
    var url = window.location.pathname;
    if (url.includes('edit')) {
        var matrix_id = $("#matrix_id").val();
        getTopic_edit(matrix_id);
    }
}


function getTopic_edit(matrix_id) {
    var group_id = $("#create_group option:selected").val();
    var subject_id = $("#create_subject option:selected").val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: '../edit/getTopic',
        data: {
            matrix_id: matrix_id,
            group_id: group_id,
            subject_id: subject_id
        },
        success: function(result) {
            var topics = result.topics;
            var details = result.details;
            var content = "";
            $("#row").val(details.length);
            for (var detail of details) {
                for (var topic of topics) {
                    arr_topic.push(topic);
                    if (detail.topic_id == topic.id) {
                        content += '<div   class=" custom-control custom-checkbox">' +
                            '<input checked type="checkbox"  onclick="topic_matrix(' + topic.id + ')"    name="topic[]" value="' + topic.id + '" class="topic-checkbox  custom-control-input" id="topic' + topic.id + '">' +
                            '<label class="custom-control-label" for="topic' + topic.id + '">' + topic.name + '</label>' +
                            '</div>';
                        topics.splice(topics.indexOf(topic), 1);

                    }
                }
            }
            for (var topic of topics) {
                content += '<div   class=" custom-control custom-checkbox">' +
                    '<input type="checkbox" onclick="topic_matrix(' + topic.id + ')"    name="topic[]" value="' + topic.id + '" class="topic-checkbox  custom-control-input" id="topic' + topic.id + '">' +
                    '<label class="custom-control-label" for="topic' + topic.id + '">' + topic.name + '</label>' +
                    '</div>';
            }
            $(".topic").html(content);
        },
    });
    resetTable();
}

function getTopic() {
    var group_id = $("#create_group option:selected").val();
    var subject_id = $("#create_subject option:selected").val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: './getTopic',
        data: {
            group_id: group_id,
            subject_id: subject_id
        },
        success: function(result) {
            var topics = result.topics;
            var content = "";
            for (var topic of topics) {
                content += '<div   class=" custom-control custom-checkbox">' +
                    '<input type="checkbox" onclick="topic_matrix(' + topic.id + ')"    name="topic[]" value="' + topic.id + '" class="topic-checkbox  custom-control-input" id="topic' + topic.id + '">' +
                    '<label class="custom-control-label" for="topic' + topic.id + '">' + topic.name + '</label>' +
                    '</div>';
            }
            $(".topic").html(content);
        },
    });
    resetTable();
}



function resetTable() {
    // $(".box_matrix").empty();
    $('input[type=checkbox]').prop("checked", false);
    arr_topic = [];
    $("#row").val(arr_topic.length);

};
$(document).on("click", ".tag", function() {
    $(this).remove();
});
var arr_topic = [];
$(document).on("click", ".topic-checkbox", function() {
    var id = $(this).val();
    var check = $(this).is(':checked');
    if (check == true) {
        arr_topic.push(id);
        $("#row").val(arr_topic.length);
        topic_matrix(arr_topic);
    } else {
        arr_topic = arr_topic.filter(item => item !== id);
        $("#row").val(arr_topic.length);
        topic_matrix(arr_topic);
    }
});

function topic_matrix(arr_topic) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        dataType: 'json',
        type: 'POST',
        url: 'topic_matrix',
        data: {
            array: arr_topic
        },
        success: function(result) {
            var topics = result.topics;
            var content = "";
            key = 1;
            var arr_difficult = ['NB', 'TH', 'VD', 'VC'];
            var arr_NB = [];
            var arr_TH = [];
            var arr_VD = [];
            var arr_VC = [];
            var arr_number_topic = [];
            for (var topic of topics) {
                content += '<tr>' +
                    '<td>' + key + '</td>' +
                    '<td>' +
                    '<div class="tag">' +
                    '<input type="checkbox" class="topic_matrix" value=' + topic.id + ' />' +
                    '<label for="">' + topic.name + '</label>' +
                    // '<i class="fa fa-times-circle"></i>' +
                    '</div>' +
                    '</td>';
                for (var difficult of arr_difficult) {
                    var space = '&nbsp';
                    var id = difficult + key;
                    content += '<td>' +
                        '<div class=" def-number-input number-input safari_only">' +
                        '<button onclick="minus(' + id + ')"  class="minus"></button>' +
                        '<input onfocus="focus_input(this)" data-topic=' + topic.id + ' onchange="change_number(this)" onkeyup="change_number(this)" class="number_matrix number_' + difficult + '" id="' + difficult + key + '" min="0" name="' + difficult + key + '" value="0" type="number">' +
                        '<button onclick="plus(' + id + ')"  class="plus"></button>' +
                        '</div>' +
                        '</td>';
                }
                content += '<td id="number_topic_' + key + '"></td>' +
                    '<td id="persent_topic_' + key + '"></td>' +
                    '</tr>';
                key++;
            }
            content +=
                '<tr>' +
                ' <th colspan="2" style="text-align: center">Tổng số câu</th>';
            for (var difficult of arr_difficult) {
                content += '<th id="sum_' + difficult + '" style="text-align: center"></th>';
            }
            content += '<th id="number_question_matrix"></th>' +
                '<th></th>' +
                '</tr>' +
                '<tr>' +
                ' <th colspan="2" style="text-align: center">% câu</th>';
            for (var difficult of arr_difficult) {
                content += '<th id="persent_' + difficult + '" style="text-align: center"></th>';
            }
            content += '<th></th>' +
                '<th id="persent_question"></th>'
            '</tr>';
            $(".box_matrix").html(content);
            row = key - 1;
            number_question();
        }
    });
}
// {{-- <tfoot>
//     <tr> 
//         <td colspan="2" style="text-align: center">Tổng số câu</td>
//         @php
//             $arrDifficult=['NB','TH','VD','VC'];
//         @endphp
//         @foreach ($arrDifficult as $difficult)
//             <td id="sum{{ $difficult}}" style="text-align: center"></td>
//         @endforeach
//         <td id="numberQuestionMatrix"></td> 
//             <td></td> 
//     </tr> 
//     <tr> 
//         <td colspan="2" style="text-align: center">% câu</td>
//     @foreach ($arrDifficult as $difficult)
//         <td id="persent_{{ $difficult}}" style="text-align: center"></td>
//     @endforeach
//         <td></td> 
//         <td id="persentQuestionMatrix"></td>
//     </tr>   
// </tfoot>
//  --}}

function focus_input(x) {
    $(x).attr('value', '');
}

function minus(x) {
    var number = $(x).val();
    if (number == 0) {
        return false;
    }
    number--;
    $(x).val(number);
    number_question();
}

function plus(x) {
    var number = $(x).val();
    number++;
    $(x).val(number);
    number_question();
}

function change_number(x) {
    if ($(x).val().length == 0) {
        $(x).val('');
    }
    $(x).attr('value', $(x).val());
    number_question();
}


function number_question() {

    var row = $("#row").val();
    // console.log(row);
    var arr_difficult = ['NB', 'TH', 'VD', 'VC'];
    var number_question_matrix = 0
    for (var i = 1; i <= row; i++) {
        var sum_number_topic = 0;
        for (var j = 0; j < arr_difficult.length; j++) {
            var string = arr_difficult[j] + i;
            var number_topic = parseInt($('input[name="' + string + '"]').val());

            sum_number_topic += number_topic;
            number_question_matrix += number_topic;
        }

        // console.log(number_question_matrix);
        $('#number_topic_' + i).html(sum_number_topic);
        $('#number_question_matrix').html(number_question_matrix);
    }
    for (var difficult of arr_difficult) {
        var number_difficult = 0;
        $(".number_" + difficult).each(function() {
            number_difficult += parseInt($(this).val());
        });
        $('#sum_' + difficult).html(number_difficult);
    }
    persent_question(number_question_matrix);
}

function persent_question(number_question_matrix) {
    var row = $("#row").val();
    var arr_difficult = ['NB', 'TH', 'VD', 'VC'];
    for (var i = 1; i <= row; i++) {
        if (number_question_matrix == 0) {
            $('#persent_topic_' + i).text("0%");
            $("#persent_question").text("0%");
        } else {
            var persent_topic = Math.round($('#number_topic_' + i).text() / number_question_matrix * 100);
            $('#persent_topic_' + i).text(persent_topic + "%");
            $("#persent_question").text("100%");

        }
    }
    for (var difficult of arr_difficult) {
        if (number_question_matrix == 0) {
            $('#persent_' + difficult).text("0%");
            // $("#persent_question").text("100%");
        } else {
            var persent_difficult = Math.round($("#sum_" + difficult).text() / number_question_matrix * 100);
            $('#persent_' + difficult).text(persent_difficult + "%");
        }
    }
}

function submit() {

    if ($('#name_matrix').length == 0) {
        Swal.fire({
            text: 'Tên ma trận không được trống',
            icon: 'error',
            timer: 2000,
            showConfirmButton: false
        });
        return false;
    }
    var number_question = $(".number_question").val();
    var number_question_matrix = $("#number_question_matrix").text();
    if (($("#number_question_matrix").length == 0)) {
        Swal.fire({
            text: 'Ma trận đề không được trống',
            icon: 'error',
            timer: 2000,
            showConfirmButton: false
        });
        return false;
    }

    if (number_question != number_question_matrix) {
        Swal.fire({
            title: 'Nhập lại ma trận',
            text: 'Số lượng câu hỏi trong ma trận không đúng',
            icon: 'error',
            timer: 3000,
            showConfirmButton: false
        });
        return false;
    }

    var group_id = $("#create_group option:selected").val();
    var subject_id = $("#create_subject option:selected").val();
    var name = $('#name_matrix').val();
    var matrix_id = $('#matrix_id').val();
    var arr_topic = [];
    var arr_NB = [];
    var arr_TH = [];
    var arr_VD = [];
    var arr_VC = [];
    $(".topic_matrix").each(function() {
        var topic_id = $(this).val();
        arr_topic.push(topic_id);
    });
    var arr_difficult = ['NB', 'TH', 'VD', 'VC'];
    $(".number_NB").each(function() {
        var number = $(this).val();
        arr_NB.push(number);
    });
    $(".number_TH").each(function() {
        var number = $(this).val();
        arr_TH.push(number);
    });
    $(".number_VD").each(function() {
        var number = $(this).val();
        arr_VD.push(number);
    });
    $(".number_VC").each(function() {
        var number = $(this).val();
        arr_VC.push(number);
    });
    var url = window.location.href.indexOf('edit');
    // console.log(url.indexOf('edit'));
    if (url == -1) {
        type = "POST";

    } else {
        type = "PUT";
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        dataType: 'json',
        type: type,
        url: "./",
        data: {
            matrix_id: matrix_id,
            name: name,
            number_question: number_question,
            group_id: group_id,
            subject_id: subject_id,
            arr_topic: arr_topic,
            arr_NB: arr_NB,
            arr_TH: arr_TH,
            arr_VD: arr_VD,
            arr_VC: arr_VC,
        },
        success: function(result) {
            console.log(result);
            Swal.fire({
                text: 'Thêm ma trận thành công',
                icon: 'success',
                timer: 2000,
                showConfirmButton: false
            });
            setTimeout(function() {
                window.location.href = "/admin/matrix";
            }, 1000);
        }
    });

}
var checkbox = $('table tbody input[type="checkbox"]');
$("#selectAll").click(function() {
    if (this.checked) {
        checkbox.each(function() {
            this.checked = true;
        });
    } else {
        checkbox.each(function() {
            this.checked = false;
        });
    }
});
checkbox.click(function() {
    if (!this.checked) {
        $("#selectAll").prop("checked", false);
    }
});

function delete_one(id) {
    Swal.fire({
        title: 'Bạn có chắc chắn?',
        text: "Bạn không thể khôi phục dữ liệu này ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xóa!',
        cancelButtonText: 'Hủy!'
    }).then((result) => {
        if (result.value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'delete',
                url: './matrix/' + id,
                dataType: "JSON",

                success: function(result) {
                    Swal.fire({
                        text: 'Xóa thành công',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    setTimeout(function() { // wait for 5 secs(2)
                        location.reload(); // then reload the page.(3)
                    }, 500);
                }
            });
        }
    });
}

function delete_mul() {
    var selectAll = $('#selectAll').is(':checked');
    if (selectAll == true) {
        delete_some();
    } else {
        delete_all();
    }
}

function delete_all() {
    Swal.fire({
        title: 'Bạn có chắc chắn xóa tất cả?',
        text: "Bạn kỵ hông thể khôi phục dữ liệu này ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xóa!',
        cancelButtonText: 'Hủy!'
    }).then((result) => {
        if (result.value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: './matrix/destroy_all',
                dataType: "JSON",
                success: function(result) {
                    Swal.fire({
                        text: 'Xóa thành công',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    setTimeout(function() { // wait for 5 secs(2)
                        location.reload(); // then reload the page.(3)
                    }, 500);
                    checkbox.each(function() {
                        this.checked = false;
                    });
                    // $(".checkbox_some").checked=false; // Unchecks it
                }
            });
        }
    });

}

function delete_some() {
    var arr_delete = [];
    var checkbox = $(".checkbox_some");
    var checked = checkbox.filter(':checked');
    checked.map(function() {
        arr_delete.push(this.id);
    });
    // arr_delete=json_encode(arr_delete);
    // console.log(arr_delete);
    Swal.fire({
        title: 'Bạn có chắc chắn?',
        text: "Bạn không thể khôi phục dữ liệu này ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xóa!',
        cancelButtonText: 'Hủy!'
    }).then((result) => {
        if (result.value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: './matrix/destroy_some',
                dataType: "JSON",
                data: {
                    "array": arr_delete
                },
                success: function(result) {
                    Swal.fire({
                        text: 'Xóa thành công',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    setTimeout(function() {
                        location.reload();
                    }, 500);
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
        }
    });
}